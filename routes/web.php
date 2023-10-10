<?php

use App\Http\Livewire\Site\Pages\Category as CategoryPage;
use App\Http\Livewire\Site\Pages\Home as HomePage;
use App\Http\Livewire\Site\Pages\Product as ProductPage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomePage::class)->name('home');
Route::get('/productos/{slug}', ProductPage::class)->name('product.show');
Route::get('/categorias/{slug}', CategoryPage::class)->name('category.show');
