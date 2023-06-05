<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\BankTransaction;
use Illuminate\Support\Facades\Auth;

class DashBoardController extends Controller
{


    function index(){

        $bankAccounts = BankAccount::withTrashed()->with('bank','bank_location','bank_location.currency')
        ->where('user_id',Auth::id())
        ->limit(3)
        ->orderBy('id','DESC')
        ->get();


        ///START OF BANK DEPOSITS

        $bankTransactions = BankTransaction::where('user_id',Auth::id())
        ->where('type','credit')
        ->whereDate('created_at', '>=' , now()->subDays(7))->get();

        $bankDepositAmounts = $bankTransactions->pluck("amount")
        ->toArray();

        $bankDepositDates = $bankTransactions->pluck("created_at")
        ->toArray();

        ///END OF BANK DEPOSITS

        ///START OF BANK EXPENSES

        $bankTransactions = BankTransaction::where('user_id',Auth::id())
        ->where('type','debit')
        ->whereDate('created_at', '>=' , now()->subDays(7))->get();

        $bankExpensesAmounts = $bankTransactions->pluck("amount")
        ->toArray();

        $bankExpensesDates = $bankTransactions->pluck("created_at")
        ->toArray();

        ///END OF BANK EXPENSES


        return view('pages.dashboard', compact('bankAccounts', 'bankDepositAmounts', 'bankDepositDates', 'bankExpensesAmounts', 'bankExpensesDates'));

    }
}
