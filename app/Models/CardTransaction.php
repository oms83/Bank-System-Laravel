<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTransaction extends Model
{
    //
    public function card()
    {
        return $this->hasOne('App\Models\Card','id','card_id');
    }

}
