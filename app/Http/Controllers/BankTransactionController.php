<?php

namespace App\Http\Controllers;
use App\Models\BankTransaction;

 public function transactions(Request $request,$id){

        $bankAccount = BankAccount::with('bank_location.currency')->withTrashed()
        ->where('id',$id)
        ->where('user_id',Auth::id())
        ->first();

        if(Auth::user()?->can('view-bank-transactions')){

            $bankAccount = BankAccount::with('bank_location.currency')->withTrashed()
            ->find($id);

        }


        if(!empty($bankAccount)){

            $bankTransactions = BankTransaction::where('user_id',Auth::id())
            ->where('bank_account_id',$id)
            ->orderBy('id','DESC')
            ->paginate(20);

            if(Auth::user()?->can('view-bank-transactions')){

                $bankTransactions = BankTransaction::where('bank_account_id',$id)
                ->orderBy('id','DESC')
                ->paginate(20);


            }


            return view('pages.transactions', compact('bankAccount', 'bankTransactions'));

        }

        return redirect()->route('accounts')->with('error', 'Bank Account Transaction Can\'t Be Found. Please Try Again.');

    }

  public function all_transactions(Request $request){

        $bankTransactions = BankTransaction::with('bank_account','bank_account.bank','bank_account.bank_location')
        ->where('user_id',Auth::id())
        ->orderBy('id','DESC')
        ->paginate(20);

        if(Auth::user()?->can('view-all-transactions')){

            $bankTransactions = BankTransaction::with('bank_account','bank_account.bank','bank_account.bank_location')
            ->orderBy('id','DESC')
            ->paginate(20);

        }



        return view('pages.all_transactions', compact('bankTransactions'));

    }

$bankTransaction = new BankTransaction();
            $bankTransaction->transaction_code = $request->transaction_code;
            $bankTransaction->narration = $request->narration;
            $bankTransaction->amount = $request->amount;
            $bankTransaction->type = $request->type;
            $bankTransaction->bank_account_id = $request->bank_account_id;
            $bankTransaction->status = $request->status;
            $bankTransaction->user_id = $bankAccount->user_id;
            $bankTransaction->created_at = Carbon::parse($request->date);
            $bankTransaction->updated_at = Carbon::parse($request->date);
            $bankTransaction->save();
    DB::commit();

            return redirect()->route('account_history', $bankAccount->id)->with('success', 'Bank Transaction Addition Successfully.');

        }catch(\Exception $ex){

            DB::rollBack();
            return redirect()->route('account_history', $bankAccount->id)->with('error', 'Bank Transaction Addition Failed. Please Try Again Later');

        }
