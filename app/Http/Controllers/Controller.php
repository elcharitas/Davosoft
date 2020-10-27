<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Handles all app redirection
     * 
     * @param string $path
     * @param int $status
     * @return Illuminate\Http\RedirectResponse
     */
    protected function redirect($path, $status = 302)
    {
        return redirect()->to(route($path), $status);
    }
}
