<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $title = __('Register');

        return view('front.auth.register.index', compact('title'));
    }

    public function store( StoreRegisterRequest $request)
    {
       $data = $request->validated();
        
       dd($data);

        return to_route('home');
    }
}
