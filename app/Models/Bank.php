<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bank extends Model
{
    //
    use SoftDeletes;

    public function location()
    {
        return $this->hasMany('App\Models\BankLocation','bank_id','id');
    }


}
