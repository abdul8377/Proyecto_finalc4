<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Livewire\CategoryMain;
use App\Livewire\CustomerMain;
use App\Livewire\Dashboard\Main;
use App\Livewire\IndexLivewire;
use App\Livewire\ProductMain;
use App\Livewire\ProductsByCategory;
use App\Livewire\ProductsByCategoryLivewire;
use App\Models\Category;
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
});
Route::get('/', [IndexLivewire::class, 'render'])->name('index');
Route::get('/categories/{categoryId}/products', [ProductController::class, 'productsByCategory'])->name('products.byCategory');
