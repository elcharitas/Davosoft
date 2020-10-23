<?php

namespace App\Http\Controllers\Dashboard;

use App\App;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Apps extends Controller
{
    /**
     * Boots up middleware for admin
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function index(Category $category)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Category $category)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, App $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @param  \App\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, App $app)
    {
        //
    }
}
