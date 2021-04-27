<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/calculate', [\App\Http\Controllers\FirstController::class, 'calculator']);

Route::get('/hello', function (){
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('posts');

Route::get('/lists', [\App\Http\Controllers\PostController::class, 'postlists'])->name('lists');




Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'post'])->name('post');


Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('create');


Route::post('/save', [\App\Http\Controllers\PostController::class, 'save'])->name('save');


Route::delete('/delete/{id}', [\App\Http\Controllers\PostController::class, 'delete'])->name('delete');


Route::get('/update/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('update');


Route::put('/update_save/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('edit');
