<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    function index(Request $request){

        
        return view('pages.messages');

    }
}
