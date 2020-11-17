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

Route::get('/report1', 'App\Http\Controllers\Report1Controller@index');
Route::get('/report2', 'App\Http\Controllers\Report2Controller@index');

Route::resources([
    'departments' => 'App\Http\Controllers\DepartmentController',
    'employees' => 'App\Http\Controllers\EmployeeController',
]);
