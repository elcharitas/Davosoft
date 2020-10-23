<?php

namespace App\Http\Middleware;

use App\Preview;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    /**
     * Handles the removal of dirty/expired links
     * 
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function terminate(Request $request)
    {
        Preview::where('created_at', '<', now()->subMinutes(15))->get()->each(function ($link) {
                    $link->delete();
                });
    }
}
