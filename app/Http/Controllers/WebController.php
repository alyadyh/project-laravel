<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function about(Request $request)
    {
        return view('about');
    }

    public function admin(Request $request)
    {
        return view('admin');
    }
}
