<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = __('Home page');


        return view('front.home.index', compact('title') );
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

}