<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Livewire\Admin\RoleManagement;
use App\Livewire\Admin\UserManagement;
use App\Livewire\CategoryMain;
use App\Livewire\CustomerMain;
use App\Livewire\Dashboard\Main;
use App\Livewire\EmployeeMain;
use App\Livewire\IndexLivewire;
use App\Livewire\ProductMain;
use App\Livewire\ProductsByCategory;
use App\Livewire\ProductsByCategoryLivewire;
use App\Livewire\SupplierMain;
use App\Livewire\Web\PaymentManagement;
use App\Livewire\Web\Producshow;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');

// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', Main::class)->name('dashboard');
    Route::get('/products', ProductMain::class)->name('products');
    Route::get('/categorias',CategoryMain::class)->name('categorias');
    Route::get('/clientes',CustomerMain::class)->name('clientes');
    Route::get('/empleados',EmployeeMain::class)->name('empleados');
    Route::get('/suppliers',SupplierMain::class)->name('supplier');
    Route::get('/roles',RoleManagement::class)->name('roles');
    Route::get('/users',UserManagement::class)->name('user');




    Route::get('/productpdf',[ProductMain::class,'reportePDF'])->name('productspdf');
    Route::get('/customerpdf',[CustomerMain::class,'reportePDF'])->name('customerspdf');
    Route::get('/categorypdf',[CategoryMain::class,'reportePDF'])->name('categoriespdf');
    Route::get('/employeepdf',[EmployeeMain::class,'reportePDF'])->name('employeespdf');



});
Route::get('/', [IndexLivewire::class, 'render'])->name('index');
Route::get('/categories/{categoryId}/products', [ProductController::class, 'productsByCategory'])->name('products.byCategory');
Route::get('/productos/{product}',Producshow::class)->name('product.show');
Route::get('/checkout',PaymentManagement::class)->name('checkout');
