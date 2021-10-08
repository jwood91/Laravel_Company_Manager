<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Models\Company;


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

Route::get('/', function(){
  return View('home');
});

Route::get('/company-table', [IndexController::class, 'companyIndex']);

Route::get('/employee-table', [IndexController::class, 'employeeIndex']);
