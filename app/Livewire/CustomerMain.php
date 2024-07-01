<?php

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use App\Livewire\Forms\CustomerForm;
use App\Livewire\Forms\ManagerForm;
use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Customer;
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

class CustomerMain extends Component{
    use WithPagination;
    use WireUiActions;
    use WithFileUploads;
    public $isOpen=false;
    public $position_id;
    public ?Customer $customer;
    public CustomerForm $form;
    public $search,$foto;

    // public function mount($id){
    //     $this->position_id=$id;
    //     $this->form->mount($id);
    // }

    public function render(){
        $customers=Customer::where('name','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);

        return view('livewire.customer-main',compact('customers'));

    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['customer','foto']);
        $this->resetValidation();
    }

    public function edit(Customer $customer){

        $this->customer = $customer;
        $this->form->fill($customer->toArray());

        if(isset($customer->image->url)){
            $this->foto=$customer->image->url;
        }else{
            $this->foto='../../img/sinfoto.png';
        }
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if (!isset($this->customer->id)) {
            // Crear cliente
            $customer = Customer::create($this->form->all());

            if($this->foto){
                $url=$this->foto->store('customer','public');
                $customer->image()->create(['url'=>$url]);
            }
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            // Actualizar ccliente
            $this->customer->update($this->form->all());

            if(is_object($this->foto)){
                $url=$this->foto->store('customer','public');
                if($this->customer->image){
                    Storage::delete($this->customer->image->url);
                    $this->customer->iamage()->update(['url'=>$url]);
                }else{
                    $this->customer->image()->create(['url'=>$url]);
                }
            }
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Customer $customer){
        $customer->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
