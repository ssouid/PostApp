<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {  
        $title = __('Login');

        return view('front.auth.login.index', compact('title'));
    }

}
