<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

// request it is a method or variable from "Illuminate\Http" 

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
