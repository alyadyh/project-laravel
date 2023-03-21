<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome(Request $request)
    {
        return view('welcome');
    }

    public function admin(Request $request)
    {
        return view('admin');
    }
}
