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
Route::get($role.'/Reported/JoziatMorkhasi', function () {
    return view('web/Manager/Reported/JoziatMorkhasi');
});

Route::get($role.'/Reported/karkard', function () {
    return view('web/Manager/Reported/karkard');
});
Route::get($role.'/Reported/Morkhasi', function () {
    return view('web/Manager/Reported/Morkhasi');
});
Route::get($role.'/Reported/ReportProject', function () {
    return view('web/Manager/Reported/ReportProject');
});
Route::get($role.'/Reported/Taradod', function () {
    return view('web/Manager/Reported/Taradod');
});
