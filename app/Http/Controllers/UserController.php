<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Country;


class UserController extends Controller
{
    //

    public function index(Request $request)
    {

        $countries = Country::get();
        $roles = Role::all()->pluck('name');
        $users = User::withTrashed()->orderBy('created_at', 'DESC')->paginate(20);
        return view('pages.users', compact('users', 'countries', 'roles'));

    }

    


}
