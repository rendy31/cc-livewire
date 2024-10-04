<?php

use App\Livewire\Dashboard;
use App\Livewire\Post\PostEdit;
use App\Livewire\Post\PostList;
use App\Livewire\Post\PostCreate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\Category\CategoryEdit;
use App\Livewire\Category\CategoryList;
use App\Livewire\Category\CategoryCreate;

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
    Route::get('/category/create', CategoryCreate::class)->name('category.create');
    Route::get('/category/edit/{id}', CategoryEdit::class)->name('category.edit');

    Route::get('/post', PostList::class)->name('post.index');
    Route::get('/post/create', PostCreate::class)->name('post.create');
    Route::get('/post/edit/{id}', PostEdit::class)->name('post.edit');
})->middleware('auth');
