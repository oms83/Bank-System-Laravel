<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\CardTransaction;
use App\Models\Card;


class CardTransactionController extends Controller
{
    //

    public function show(Request $request,int $id){

        $card = Card::where('id', $id)
        ->where('user_id', Auth::id())
        ->first();


        if( Auth::user()?->can('view-card-transactions') ){

            $card = Card::where('id', $id)->first();

        }


        if(!empty($card)){

            $cardTransactions = CardTransaction::with('card.card_type','card.currency')
            ->where('user_id',Auth::id())
            ->where('card_id',$id)
            ->paginate(20);

            if( Auth::user()?->can('view-card-transactions') ){

                $cardTransactions = CardTransaction::with('card.card_type','card.currency')
                ->where('card_id',$id)
                ->paginate(20);

            }

            return view('pages.card_transactions', compact('cardTransactions', 'card'));

        }

        return redirect()->route('cards')->with('error', 'Card Can\'t Be Found. Please Try Again.');

    }



    function storeTransaction(Request $request){

        DB::beginTransaction();
        try{

            $card = Card::withTrashed()->find($request->card_id);

            if($request->type == "credit"){

                if($request->balance == "ledger_balance"){
                    $card->ledger_balance = $card->ledger_balance + $request->amount;
                }else{
                    $card->available_balance = $card->available_balance + $request->amount;
                }

            }else{

                if($request->balance == "ledger_balance"){
                    $card->ledger_balance = $card->ledger_balance - $request->amount;
                }else{
                    $card->available_balance = $card->available_balance - $request->amount;
                }

            }

            $card->save();

            $cardTransaction = new CardTransaction();
            $cardTransaction->transaction_code = $request->transaction_code;
            $cardTransaction->narration = $request->narration;
            $cardTransaction->amount = $request->amount;
            $cardTransaction->type = $request->type;
            $cardTransaction->card_id = $request->card_id;
            $cardTransaction->status = $request->status;
            $cardTransaction->user_id = $card->user_id;
            $cardTransaction->created_at = Carbon::parse($request->date);
            $cardTransaction->updated_at = Carbon::parse($request->date);
            $cardTransaction->save();

            DB::commit();

            return redirect()->route('card_transactions', $card->id)->with('success', 'Card Transaction Addition Successfully.');

        }catch(\Exception $ex){

            DB::rollBack();
            return redirect()->route('card_transactions', $card->id)->with('error', 'Card Transaction Addition Failed. Please Try Again Later');

        }


    }



}
