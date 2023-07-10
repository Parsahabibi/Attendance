<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }
}
