<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsByCategoryLivewire extends Component
{
    use WithPagination;

    public $categoryId;
    public $sendCategory;

    public function mount($categoryId)
    {
        $this->categoryId = $categoryId;
        $this->sendCategory = $categoryId;
    }

    public function render()
    {
        $category = Category::find($this->sendCategory);

        $products = $category ? $category->products()->latest('id')->paginate(6) : Product::latest('id')->paginate(6);
        $categories = Category::all();

        return view('livewire.products-by-category-livewire', compact('products', 'categories'));
    }

    public function updatingSendCategory()
    {
        $this->resetPage();
    }
}
