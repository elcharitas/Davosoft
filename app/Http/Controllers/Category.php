<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;

class Category extends Controller
{
    /**
     * Display the specified category by pages.
     *
     * @param string $category
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function show($category, $page = 1)
    {
        $apps = App::category($category);
        dump($apps);
    }
}
