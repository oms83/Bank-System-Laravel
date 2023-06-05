<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //

    public function sender()
    {
        return $this->hasOne('App\Models\User','id','sender_id');
    }

    public function receiver()
    {
        return $this->hasOne('App\Models\User','id','receiver_id');
    }

    public function getMessagePreviewAttribute()
    {
        $preview = "<span class='text-bold'>{$this->subject}</span> - <span class='text-muted'>{$this->body}</span>";
        if( strlen($preview) > 30 ){
            $preview = substr($preview, 0 ,300);
            $preview .= "...";
        }

        return $preview;
    }


}
