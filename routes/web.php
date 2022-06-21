<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;

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

Route::get('admin/login',[AdminController::class,'login']);
Route::get('admin',[AdminController::class,'index']);
Route::post('admin/login',[AdminController::class,'submit_login']);
Route::get('admin/logout',[AdminController::class,'logout']);

// DepartmentController
Route::get('depart/{id}/delete',[DepartmentController::class,'destroy']);
Route::resource('depart',DepartmentController::class);

// EmployeeController
Route::get('employee/{id}/delete',[EmployeeController::class,'destroy']);
Route::resource('employee',EmployeeController::class);

<<<<<<< HEAD

// AttendanceController
//Route::get('attendance/{id}/delete',[AttendanceController::class,'destroy']);
//Route::resource('attendance',AttendanceController::class);
Route::resource('attendance',AttendanceController::class);
=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 2e83b72f9b3135f249f8175c01938332d2f9bdc4
