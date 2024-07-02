<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EmployeeForm extends Form
{
    #[Rule('required')]
    public $name,$lastname,$dni,$phone,$email,$birthdate;

}
