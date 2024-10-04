<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Category\CategoryEdit;
use App\Livewire\Category\CategoryList;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::get('/home', Dashboard::class)->name('dashboard')->middleware('auth');

Route::prefix('blog')->group(function () {

    Route::get('/category', CategoryList::class)->name('category.index');
    // Route::get('/category/create', KategoriCreate::class)->name('category.create');
    Route::get('/category/edit/{id}', CategoryEdit::class)->name('category.edit');
})->middleware('auth');
