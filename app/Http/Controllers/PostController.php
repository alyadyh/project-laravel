<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PostController extends Controller
{
    public function index(Portfolios $posts){

    	$data = $posts->latest()->take(8)->get();
    	return view('welcome', compact('data'));
    }
}