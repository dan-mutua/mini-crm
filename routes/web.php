<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

// Home page route
Route::get('/', function () {
    return view('welcome');
});

// Routes for Companies
Route::resource('companies', \App\Http\Controllers\CompaniesController::class)->middleware('auth');

// Routes for Employees
Route::resource('employees', EmployeeController::class)->middleware('auth');

// Authentication routes
Auth::routes();

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('add-company-route', [\App\Http\Controllers\HomeController::class, 'addCompany']);

Route::get('add-employee-route',[\App\Http\Controllers\HomeController::class,'addEmployee']);

