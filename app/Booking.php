<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User','tenant_id','id');
    }

    public function room(){
        return $this->belongsTo('App\Room');
    }
}
