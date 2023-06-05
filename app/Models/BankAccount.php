<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankAccount extends Model
{
    //
    use SoftDeletes;

    public function bank()
    {
        return $this->hasOne('App\Models\Bank','id','bank_id');
    }

    public function bank_location()
    {
        return $this->hasOne('App\Models\BankLocation','id','bank_location_id');
    }
}
