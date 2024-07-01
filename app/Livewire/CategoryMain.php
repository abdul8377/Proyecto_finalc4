<?php

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use App\Livewire\Forms\ManagerForm;
use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Manager;
use App\Models\Product;
use App\Models\Product_detail;
use App\Models\Season;
use App\Models\Supplier;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class CategoryMain extends Component{
    use WithPagination;
    use WireUiActions;
    use WithFileUploads;
    public $isOpen=false;
    public $position_id;
    public ?Category $category;
    public CategoryForm $form;
    public $search,$foto;

    // public function mount($id){
    //     $this->position_id=$id;
    //     $this->form->mount($id);
    // }

    public function render(){
        $categories=Category::where('name','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);

        return view('livewire.category-main',compact('categories'));

    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['category','foto']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Category $category){
        //dd($vehicle);
        $this->category = $category;
        $this->form->fill($category->toArray());

        if(isset($category->image->url)){
            $this->foto=$category->image->url;
        }else{
            $this->foto='../../img/sinfoto.png';
        }
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if (!isset($this->category->id)) {
            // Crear category
            $category = Category::create($this->form->all());

            if($this->foto){
                $url=$this->foto->store('category','public');
                $category->image()->create(['url'=>$url]);
            }
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            // Actualizar category
            $this->category->update($this->form->all());

            if(is_object($this->foto)){
                $url=$this->foto->store('category','public');
                if($this->category->image){
                    Storage::delete($this->category->image->url);
                    $this->category->iamage()->update(['url'=>$url]);
                }else{
                    $this->category->image()->create(['url'=>$url]);
                }
            }
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Category $category){
        $category->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
