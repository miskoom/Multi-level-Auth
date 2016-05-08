<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('user.login');
});

Route::post('/login', "Auth\AuthController@postLogin");
Route::get('/admin', "DashboardController@getAdminPage");
Route::get('/logout', "Auth\AuthController@logout");
Route::post('/send_verdict', "DashboardController@sendVerdict");

Route::get('/dashboard', "DashboardController@getGodPage");
Route::get('/dashboard/add_employee', "DashboardController@getAddEmployee");
Route::post('/dashboard/add_employee', "DashboardController@addEmployee");
Route::get('/dashboard/employee/{id}', "DashboardController@getEmployee");
Route::post('/dashboard/employee/{id}', "DashboardController@sendConfirm");

Route::get('/super_dashboard', "DashboardController@getSuperGodPage");
Route::get('/super_dashboard/payroll', "DashboardController@getPayroll");
Route::get('/super_dashboard/employee/{id}', "DashboardController@superGetEmployee");
Route::get('/super_dashboard/employee_info/{id}', "DashboardController@superGetEmployeeInfo");
Route::get('/super_dashboard/add_employee', "DashboardController@superGetAddEmployee");
Route::post('/super_dashboard/add_employee', "DashboardController@superAddEmployee");
Route::post('/super_dashboard/employee/{id}', "DashboardController@superSendConfirm");