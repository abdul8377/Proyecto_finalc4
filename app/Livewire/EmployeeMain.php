<?php

namespace App\Livewire;

use App\Livewire\Forms\CategoryForm;
use App\Livewire\Forms\CustomerForm;
use App\Livewire\Forms\EmployeeForm;
use App\Livewire\Forms\ManagerForm;
use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\Product;
use App\Models\Product_detail;
use App\Models\Season;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use WireUi\Traits\WireUiActions;

class EmployeeMain extends Component{
    use WithPagination;
    use WireUiActions;
    use WithFileUploads;
    public $isOpen=false;
    public $position_id;
    public ?Employee $employee;
    public EmployeeForm $form;
    public $search;

    // public function mount($id){
    //     $this->position_id=$id;
    //     $this->form->mount($id);
    // }

    public function render(){
        $employees=Employee::where('name','LIKE','%'.$this->search.'%')->latest('id')->paginate(10);

        return view('livewire.employee-main',compact('employees'));

    }

    public function create(){
        $this->isOpen=true;
        $this->form->reset();
        $this->reset(['employee']);
        $this->resetValidation();
        //$this->form->mount($this->supplier_id);
    }

    public function edit(Employee $employee){
        //dd($vehicle);
        $this->employee=$employee;
        $this->form->fill($employee);
        $this->isOpen=true;
        $this->resetValidation();
    }

    public function store(){
        $this->validate();
        if(!isset($this->employee->id)){
            Employee::create($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $this->employee->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function destroy(Employee $employee){
        $employee->delete();
    }

    public function updatingSearch(){
        $this->resetPage();
    }
    public function reportePDF(){
        $employees=Employee::all();
        $pdf = Pdf::loadView('reports.employeespdf',compact('employees'));
        //return $pdf->download('reporte.pdf');
        return $pdf->stream();
    }

}
