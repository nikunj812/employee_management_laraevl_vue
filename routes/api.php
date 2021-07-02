<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\EmployeesDataController;
use App\Http\Controllers\backend\EmployeesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employees/countries',[EmployeesDataController::class, 'countries']);
Route::get('/employees/{country}/states',[EmployeesDataController::class, 'states']);
Route::get('/employees/{state}/cities',[EmployeesDataController::class, 'cities']);
Route::get('/employees/departments',[EmployeesDataController::class, 'departments']);

// Route::get('/employees',[EmployeesController ::class, 'index']);
// Route::post('/employees',[EmployeesController ::class, 'store']);
// Route::delete('/employees/{employee}',[EmployeesController ::class, 'destroy']);

Route::apiResource('employees',EmployeesController ::class);