<?php
namespace App\Http\Controllers;

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




Route::get('/',[adminController::class,'home'])->name('home');
Route::get('/create',[adminController::class,'index'])->name('create.form');

Route::post('/store',[adminController::class,'store'])->name('store');
Route::get('/read',[adminController::class,'read'])->name('read');
Route::get('/edit/{id}',[adminController::class,'edit'])->name('edit');
Route::post('/update/{id}',[adminController::class,'update'])->name('update');
Route::delete('/delete/{id}',[adminController::class,'delete'])->name('delete');
Route::get('/view/{id}',[adminController::class,'view'])->name('view');

/// Category 
Route::get('/category/add',[CategoryController::class,'index'])->name('category.add');
Route::post('/create',[CategoryController::class,'create'])->name('create');
Route::get('/category/read',[CategoryController::class,'read'])->name('category');
Route::get('viewCategory/{id}',[CategoryController::class,'viewCategory'])->name('viewCategory');
Route::get('showDetails/{id}',[adminController::class,'showDetails'])->name('showDetails');

///Login route
Route::get('/login/form',[CategoryController::class,'loginForm'])->name('loginForm');
Route::post('/login/store',[CategoryController::class,'storeLogin'])->name('login.store');


///Registration Route.........
Route::get('show/form',[CategoryController::class,'showFrom'])->name('registration.from');
Route::post('/store/form',[CategoryController::class,'storeForm'])->name('store.form');
