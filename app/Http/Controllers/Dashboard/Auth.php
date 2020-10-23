<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class Auth extends Controller
{
    /**
     * Boots up authentication middleware
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy', 'locked', 'unlock']);
        
        $this->middleware('throttle: 60, 1')->only(['login', 'unlock']);
        
        $this->middleware('throttle: 30, 1')->only('lpswd');
    }

    /**
     * Handles the authentication and authorization.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        
        $credentials = $this->credentials($request);
        
        if(true === $auth = $this->auth($credentials))
        {
            return redirect(route('adminindex'));
        } else {
            return redirect()
                    ->to(route('adminlogin'))
                    ->withErrors($auth)
                    ->withInput($request->only('shp_id'));
        }
    }

    /**
     * Display the login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('screens.login');
    }
    
    /**
     * Display the locked out screen
     * 
     * @return Illuminate\Http\Response
     */
    public function locked()
    {
        if(auth()->user() && session('locked'))
        {
            return view('screens.locked');
        } else {
            return redirect(route('adminindex'));
        }
    }
    
    /**
     * Unlocks the admin page for access
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function unlock(Request $request)
    {
        return $this->login($request);
    }

    /**
     * Resets user password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lpswd(Request $request)
    {
        //
    }

    /**
     * Logs a user out of session.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        if(auth()->user() && auth()->logout() == session()->forget('active'))
        {
            return redirect()->to('/');
        }
    }
    
    /**
     * Grabs the credentials
     * 
     * @param Illuminate\Http\Request $request
     * @return array
     */
    protected function credentials($request)
    {
        extract($request->post());
        
        $user = auth()->user();
        
        if($user !== null)
        {
            $shp_id = $user->username;
        }
        
        return [
            'username' => $shp_id ?? null,
            'password' => $shp_key ?? null
        ];
    }
    
    /**
     * Validates the credentials
     * 
     * @param array $credentials
     * @return Illuminate\Support\Validation
     */
    protected function validator($credentials)
    {
        $rules = [
            'username' => 'required|alphanum',
            'password' => 'required'
        ];
        
        return Validator::make($credentials, $rules);
    }
    
    /**
     * Performs the authentication and creates the "active" session
     * 
     * @param array $credentials
     * @return Illuminate\Support\Validation|boolean
     */
    protected function auth($credentials)
    {
        $validator = $this->validator($credentials);
        
        if($validator->fails())
        {
            return $validator;
        } else if(auth()->attempt($credentials))
        {
            return session(['active' => now()]) === null;
        }
    }
}