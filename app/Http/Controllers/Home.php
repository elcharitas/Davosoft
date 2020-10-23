<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    /**
     * Display a listing of the resource.
     * shows a log in form if not logged
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('screens.apps');
    }
}
