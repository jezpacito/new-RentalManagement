<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingBilling extends Model
{
    //
    public function room(){
        return $this->belongsTo('App\Booking','booking_id','id');
    }
    // public function booking(){
    //     return $this->belongsTo('App\')
    // }
}
