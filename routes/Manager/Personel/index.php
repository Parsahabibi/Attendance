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
Route::get($role.'/Personel/ListPersonel', function () {
    return view('web/Manager/Personel/ListPersonel');
});

Route::get($role.'/Personel/NewPersonel', function () {
    return view('web/Manager/Personel/NewPersonel');
});

