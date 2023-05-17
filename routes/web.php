<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;


//Frontend view

Route::get('/', [FrontendController::class, 'index'])->name('user.index');
Route::get('/about', [FrontendController::class, 'about'])->name('user.about');
Route::get('/menu', [FrontendController::class, 'menu'])->name('user.menu');
Route::get('/update', [FrontendController::class, 'update'])->name('user.update');
Route::get('/contact', [FrontendController::class, 'contact'])->name('user.contact');

Route::post('reservation',[ReservationController::class,'add_reservation'])->name('user.reserve');
Route::get('reservations',[ReservationController::class,'show_reserve'])->name('user.showreserve');


//Backend view


Route::get('/dashboard', [BackendController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin panel pages

    // User management

    Route::get('/manage-user',[UserController::class,'index'])->name('admin.user-man');
    Route::get('/dalete-user/{id}',[UserController::class,'delete'])->name('admin.user-del');
    Route::get('/edit-user/{id}',[UserController::class,'edit'])->name('admin.user-edit');
    Route::post('/update-user/{id}',[UserController::class,'update'])->name('admin.user-update');


    // Product management

    Route::get('/add-product',[ProductController::class,'add_index'])->name('admin.add-p');
    Route::post('/insert-product',[ProductController::class,'insert_product'])->name('admin.add-product');
    Route::get('/manage-product',[ProductController::class,'show_product'])->name('admin.manage-product');
    Route::get('/delete-product/{id}',[ProductController::class,'delete_product'])->name('admin.delete-product');
    Route::get('/edit-product/{id}',[ProductController::class,'edit_product'])->name('admin.edit-product');
    Route::post('/update-product/{id}',[ProductController::class,'update_product'])->name('admin.update-product');
    Route::put('/active-status/{id}', [ProductController::class, 'activeStatus'])->name('active.status');
    Route::put('/inactive-status/{id}', [ProductController::class, 'inactiveStatus'])->name('inactive.status');

});

require __DIR__.'/auth.php';
