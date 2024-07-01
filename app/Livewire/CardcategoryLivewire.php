<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CardcategoryLivewire extends Component
{
    public function render()
    {
        $categories=Category::all();
        return view('livewire.cardcategory-livewire',compact('categories'));
    }
}
