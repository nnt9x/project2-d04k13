<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Customer\CustomerController;
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

Route::get('/', function () {
    return redirect()->route('customer-home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Cac route ben khach hang
Route::get('/customer/home', [CustomerController::class, 'home'])->name('customer-home');

// Cac route Admin
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin-home');

Route::get('/admin/order', [OrderController::class,'index'])->name('admin-order-index');
