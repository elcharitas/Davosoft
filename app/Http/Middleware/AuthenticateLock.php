<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;

class AuthenticateLock
{
    /**
     * Number of minutes before locking? ? ?  : : : a session
     * 
     * @var int
     */
    protected $interval = 1;
    
    /**
     * Gets the time interval for activity
     * Defaults to user setting
     * 
     * @return int
     */
    protected function interval()
    {
        return auth()->user()->interval ?: $this->interval;
    }
    
    /**
     * Handle an incoming request by checking if user is locked out or not.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(now()->diffInMinutes(session('active')) > $this->interval())
        {
            session(['locked' => true]);
            
            return redirect(route('adminlock'));
        }
        
        return $next($request);
    }
    
    /**
     * While a user is logged in and active, store a session to track the session.
     * If the session isn't set, user gets locked out!
     * 
     * @return void
     */
    public function terminate($reque)
    {
        if(session('locked') !== true)
        {
            session(['active' => now()]);
        }
    }
}
