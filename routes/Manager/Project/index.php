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
Route::get($role.'/Project/ListProject', function () {
    return view('web/Manager/Project/ListProject');
});

Route::get($role.'/Project/SabtProject', function () {
    return view('web/Manager/Project/SabtProject');
});
