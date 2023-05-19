<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\BankTransaction;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{


    function index(){

       

        return view('/pages.dashboard');

    }
}
