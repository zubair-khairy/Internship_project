<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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


Route::get('/create', function () {
    return view('companies.create');
});

// Companies Routes
Route::resource('companies', CompanyController::class);

// Employees Routes
Route::resource('employees', EmployeeController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::middleware(['auth'])->group(function () {
    // Your authenticated-only routes go here
});


Route::get('/admin/login', 'Auth\LoginController@showAdminLoginForm')
    ->middleware('CheckIsAdmin') // Apply the CheckIsAdmin middleware
    ->name('admin.login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');