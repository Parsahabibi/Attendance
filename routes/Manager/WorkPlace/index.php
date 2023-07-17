<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


$role="Manager";
Route::get($role.'/WorkPlace/EditWorkPlace', function () {
    return view('web/Manager/WorkPlace/EditWorkPlace');
});
Route::get($role.'/WorkPlace/ListWorkPlace', function () {
    return view('web/Manager/WorkPlace/ListWorkPlace');
});
Route::get($role.'/WorkPlace/NewWorkPlace', function () {
    return view('web/Manager/WorkPlace/NewWorkPlace');
});
