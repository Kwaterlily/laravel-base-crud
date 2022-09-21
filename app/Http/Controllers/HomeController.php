<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //fuonzione che rimanda a index page
    public function index()
    {
        return view('home');
    }
}
