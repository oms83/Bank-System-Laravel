<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    function index(Request $request)
    {

        $user = User::with('country')->find(Auth::id());
        return view('pages.profile', compact('user'));

    }


}
