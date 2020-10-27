<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string $category
     * @param string $app
     * @return \Illuminate\Http\Response
     */
    public function index($category, $app)
    {
        return view('screens.app', ['$category' => $category, 'app' => $app]);
    }

    /**
     * Store/Downloads a resource to local storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response|void
     */
    public function store($id)
    {
        $app = Preview::where('serve', $id)->first();
        
        if($app){
            return Data::download($id);
        }
    }

    /**
     * View information about the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $app = Preview::where('serve', $id)->first();
        
        if(!$app){
            abort(429, __('previews.expired'));
        }
        
        return view('screens.preview', ['app' => Data::find($app->id), 'screen' => $app]);
    }
}
