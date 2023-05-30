<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardTypeController extends Controller
{
    public function index()
    {
        return view('pages.card_types');
    }
}
