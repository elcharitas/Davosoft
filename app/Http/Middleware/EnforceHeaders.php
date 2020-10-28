<?php

namespace App\Http\Middleware;

use URL;
use Closure;

class EnforceHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        
        $response->withHeaders([
            'X-XSS-Protection' => '1; mode=block',
            'X-Frame-Options' => 'SAMEORIGIN',
            'X-Content-Type-Options' => 'nosniff',
            'X-Powered-By' => 'Irhodia David(Shimidah)',
            'Strict-Transport-Security' => 'max-age=31536000; includeSubDomains',
        ]);
        
        if(config('app.env') === 'production')
        {
            if($request->getScheme() === 'http')
            {
                return redirect()->to(url()->full());
            }
            
            URL::forceScheme('https');
        }
        
        return $response;
    }
}
