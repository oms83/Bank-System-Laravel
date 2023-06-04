<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankTransaction extends Model
{
    //

    public function bank_account()
    {
        return $this->hasOne('App\Models\BankAccount','id','bank_account_id');
    }


}
