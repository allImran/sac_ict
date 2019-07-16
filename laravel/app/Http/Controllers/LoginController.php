<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	//dd($request);
    	$this->validateLogin($request);

    	if(Auth::attempt([
    		'email' 	=> $request->email,
    		'password'	=> $request->password
    	])){

    		$user = User::where('email', $request->email)->first();
    		//checking if there is any cart data
    		
				

				if($request->session()->has('cart')) {
				    return redirect()->route('cart.Checkout');
				}else{
        			if($user->is_admin()){
        				return redirect()->route('home');
        			}
        			else{
        				return redirect()->route('home.front');
        			}	
    		}
    		
    	}

    	return $this->sendFailedLoginResponse($request);

    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

     public function username()
    {
        return 'email';
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected function guard()
    {
        return Auth::guard();
    }



    public function cookie(Request $request)
    {
        if ($request->session()->has('cart')) {
            return 'ache';
        }
    }




}