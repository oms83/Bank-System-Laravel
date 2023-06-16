<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankLocation extends Model
{
    //
    use SoftDeletes;

    public function currency()
    {
        return $this->hasOne('App\Models\Currency','id','currency_id');
    }

    public function bank()
    {
        return $this->hasOne('App\Models\Bank','id','bank_id');
    }

}
