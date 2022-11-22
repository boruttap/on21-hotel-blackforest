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

Route::get('/', function () {
    return view('welcome');
});

// adminPanel
Route::get('admin', function () {
    return view('/adminPanel/dashboard');
});

Route::get('admin/roomcategory/create', function () {
    return view('/adminPanel/roomCategory/createRoomCategory');
});

Route::get('admin/roomcategory', function () {
    return view('/adminPanel/roomCategory/showAllCategorys');
});

Route::get('admin/roomcategory/edit', function () {
    return view('/adminPanel/roomCategory/editRoomCategory');
});

Route::get('admin/roomcategory/show', function () {
    return view('/adminPanel/roomCategory/showSelectedCategory');
});
