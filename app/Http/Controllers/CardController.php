<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use App\Models\User;
use App\Models\CardType;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CardController extends Controller
{

    public function index(Request $request){


        $cards = Card::with('currency','card_type')
        ->where('user_id',Auth::id())->paginate(10);

        if( Auth::user()?->can('view-all-cards') ){
            $cards = Card::withTrashed()->with('currency','card_type')->paginate(10);
        }

        $users = User::role('Customer')->get();
        $cardTypes = CardType::get();
        $currencies = Currency::get();

        return view('pages.cards', compact('cards', 'users', 'cardTypes', 'currencies'));
    }

    public function store(Request $request){

        DB::beginTransaction();

        try{

            if( Auth::user()?->can('add-card') ){

                $card = new Card();
                $card->name = $request->name;
                $card->number = $request->number;
                $card->available_balance = $request->available_balance;
                $card->ledger_balance = $request->ledger_balance;

                $card->user_id = $request->user_id;
                $card->card_type_id = $request->card_type_id;
                $card->currency_id = $request->currency_id;

                $card->month = $request->month;
                $card->year = $request->year;
                $card->cvv = $request->cvv;
                $card->billing_address = $request->billing_address;
                $card->zip_code = $request->zip_code;

                $card->status = $request->status;
                $card->save();

                DB::commit();
                return redirect()->route('cards')->with('success', 'Card Addition Successful');

            }

            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Addition Failed. UnAuthorized Action Failed');

        }catch(\Exception $ex){

            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Addition Failed. Please Try Again Later');

        }

    }


    function update(Request $request,int $id){

        DB::beginTransaction();

        try{

            if( Auth::user()?->can('edit-card') ){

                $card = Card::findOrfail($id);
                $card->name = $request->name;
                $card->number = $request->number;
                $card->available_balance = $request->available_balance;
                $card->ledger_balance = $request->ledger_balance;

                $card->card_type_id = $request->card_type_id;
                $card->currency_id = $request->currency_id;

                $card->month = $request->month;
                $card->year = $request->year;
                $card->cvv = $request->cvv;
                $card->billing_address = $request->billing_address;
                $card->zip_code = $request->zip_code;

                $card->status = $request->status;
                $card->save();

                DB::commit();
                return redirect()->route('cards')->with('success', 'Card Updated Successfully');

            }

            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Update Failed. UnAuthorized Action Failed');

        }catch(\Exception $ex){

            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Update Failed. Please Try Again Later');

        }

    }


    function destory(Request $request,int $id){

        DB::beginTransaction();

        try{

            if( Auth::user()?->can('delete-card') ){

                $card = Card::findOrfail($id);
                $card->delete();

                DB::commit();
                return redirect()->route('cards')->with('success', 'Card Deletion Successfully');

            }

            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Deletion Failed. UnAuthorized Action Failed');

        }catch(\Exception $ex){

            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Deletion Failed. Please Try Again Later');

        }

    }

    function restore(Request $request,int $id){

        DB::beginTransaction();

        try{

            if( Auth::user()?->can('restore-card') ){

                $card = Card::withTrashed()->findOrfail($id);
                $card->restore();

                DB::commit();
                return redirect()->route('cards')->with('success', 'Card Restore Successfully');

            }

            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Restore Failed. UnAuthorized Action Failed');

        }catch(\Exception $ex){

            Log::info($ex->getMessage());
            DB::rollBack();
            return redirect()->route('cards')->with('error', 'Card Restore Failed. Please Try Again Later');

        }

    }




}
