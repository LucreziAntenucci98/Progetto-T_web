<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    //definisce la homepage per i diversi utenti.
    protected function redirectTo() {        
        $role = auth()->user()->role;
        switch ($role) {
            case 'admin': return '/admin';
                break;
            case 'user': return '/user';
                break;
            default: return '/';
        };
    }

    
    //Login con 'username' al posto di 'email'.
    public function username() {
        return 'username';
    }
    
    
    
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

}