<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProductForm extends Form
{
    #[Rule('required')]
    public $name,$price,$stock,$category_id,$supplier_id,$description,$other_detail;
}
