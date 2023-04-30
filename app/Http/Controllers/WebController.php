<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Http\Controllers\PortfolioController;

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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::all();

        return view('portfolios.index', compact('data'));
    }
}
