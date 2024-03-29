<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::all();

        return view('portfolios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url_link' => 'required',
            'category' => 'required',
            'image_file' => 'required',
        ]);

        $imagePath = $request->file('image_file')->store('uploads', ['disk' => 'public']);

        $newPortfolio = new Portfolio();
        $newPortfolio->title = $request->title;
        $newPortfolio->description = $request->description;
        $newPortfolio->url_link = $request->url_link;
        $newPortfolio->image_file_url = '/storage/' . $imagePath;
        $newPortfolio->save();

        return redirect()->route('portfolios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $data = Portfolio::findOrFail($id);

        return view('portfolios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Portfolio::findOrFail($id);

        return view('portfolios.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imagePath = $request->file('image_file')->store('uploads', ['disk' => 'public']);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'url_link' => 'required',
            'image_file' => 'required',
        ]);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->url_link = $request->url_link;
        $portfolio->image_file_url = '/storage/' . $imagePath;
        $portfolio->save();

        return redirect()->route('portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return redirect()->route('portfolios.index');
    }
}