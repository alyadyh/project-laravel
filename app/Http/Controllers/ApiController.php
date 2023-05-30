<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddPortfolioRequest;
use App\Http\Requests\UpdatePortfolioRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Portfolio::all();

        return response($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddPortfolioRequest $request)
    {
        $imagePath = $request->file('image_file')->store('uploads', ['disk' => 'public']);

        $newPortfolio = new Portfolio();
        $newPortfolio->title = $request->title;
        $newPortfolio->description = $request->description;
        $newPortfolio->url_link = $request->url_link;
        $newPortfolio->image_file_url = '/storage/' . $imagePath;
        $newPortfolio->save();

        return response('add portfolio success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortfolioRequest $request, string $id)
    {
        $imagePath = $request->file('image_file')->store('uploads', ['disk' => 'public']);

        $portfolio = Portfolio::findOrFail($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->url_link = $request->url_link;
        $portfolio->image_file_url = '/storage/' . $imagePath;
        $portfolio->save();

        return response('update portfolio success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
