<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\Home\HomeController;

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

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

require __DIR__.'/sample-routes/index.php';
require __DIR__.'/Employee/Dashbord/index.php';
require __DIR__.'/Employee/Function/index.php';
require __DIR__.'/Employee/LookShift/index.php';
require __DIR__.'/Employee/Reported/index.php';
require __DIR__.'/Employee/Request/index.php';
require __DIR__.'/Employee/Shift/index.php';
require __DIR__.'/Login/index.php';
require __DIR__.'/Manager/Dashbord/index.php';
require __DIR__.'/Manager/Holiday/index.php';
require __DIR__.'/Manager/Personel/index.php';
require __DIR__.'/Manager/Project/index.php';
require __DIR__.'/Manager/Reported/index.php';
require __DIR__.'/Manager/Request/index.php';
require __DIR__.'/Manager/Shift/index.php';
require __DIR__.'/Manager/WorkPlace/index.php';




