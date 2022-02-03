<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanyController;

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

Auth::routes();

Route::resource('employee', EmployeeController::class);

Route::resource('company', CompanyController::class);

Route::get('/admin', function () { return view('layouts.adminLTE'); })->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
