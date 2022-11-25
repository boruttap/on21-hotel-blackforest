<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingRequestsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Homepage
Route::resource('/', HomeController::class);

Route::resource('/about', AboutController::class);
Route::resource('/booking', BookingController::class);

// Admin
Route::get('admin/dashboard', function () {
    return view('/adminPanel/dashboard');
});

// adminPanel Login
Route::get('admin/login',[AdminController::class,'login']);
Route::post('admin/login', [AdminController::class, 'authenticate']);

// adminPanel roomCategory
Route::get('admin/roomcategory/{id}/delete',[RoomCategoryController::class,'destroy']);
Route::resource('admin/roomcategory', RoomCategoryController::class);

// adminPanel room
Route::get('admin/room/{id}/delete',[RoomController::class,'destroy']);
Route::resource('admin/room', RoomController::class);

// adminPanel worker
Route::get('admin/worker/{id}/delete',[AdminController::class,'destroy']);
Route::resource('admin/worker', AdminController::class);

// adminPanel customer
Route::get('admin/customer/{id}/delete',[UserController::class,'destroy']);
Route::resource('admin/customer', UserController::class);

Route::resource('admin/bookingrequests', BookingRequestsController::class);


Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/');
