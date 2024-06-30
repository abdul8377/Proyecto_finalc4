<?php

namespace App\Livewire;

use App\Livewire\Forms\ManagerForm;
use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Manager;
use App\Models\Product;
use App\Models\Product_detail;
use App\Models\Season;
use App\Models\Supplier;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class ProductMain extends Component{
    use WithPagination;
    use WireUiActions;
    public $isOpen=false;
    public $position_id;
    public ?Product $product;
    public ProductForm $form;
    public $search;

    // public function mount($id){
    //     $this->position_id=$id;
    //     $this->form->mount($id);
    // }

    public function render(){
        $products=Product::where('name','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);
        $categories=Category::all();
        $suppliers=Supplier::all();
        return view('livewire.product-main',compact('products','categories','suppliers'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['product']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Product $product){
        //dd($vehicle);
        $this->product = $product;
        $this->form->fill($product->toArray());
        $detail = Product_detail::where('product_id', $product->id)->first();
        if ($detail) {
            $this->form->fill([
                'description' => $detail->descrition,
                'other_detail' => $detail->other_detail,
            ]);
        }
        $this->isOpen = true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if (!isset($this->product->id)) {
            // Crear producto
            $product = Product::create($this->form->only(['name', 'price', 'stock', 'category_id', 'supplier_id']));
            // Crear detalle de producto
            Product_detail::create([
                'product_id' => $product->id,
                'description' => $this->form->description,
                'other_detail' => $this->form->other_detail,
            ]);
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        } else {
            // Actualizar producto
            $this->product->update($this->form->only(['name', 'price', 'stock', 'category_id', 'supplier_id']));
            // Actualizar detalle de producto
            $detail = Product_detail::where('product_id', $this->product->id)->first();
            if ($detail) {
                $detail->update([
                    'description' => $this->form->description,
                    'other_detail' => $this->form->other_detail,
                ]);
            } else {
                Product_detail::create([
                    'product_id' => $this->product->id,
                    'description' => $this->form->description,
                    'other_detail' => $this->form->other_detail,
                ]);
            }
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Product $product){
        $product->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
}
