<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\BookingBilling;
class BillingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    } // authentication

    //
    public function index(){

        $booking = Booking::where('tenant_id',auth()->user()->id)
            ->where('status','=','active')->first();
                if($booking === null){
                    return view('billing.billing');
                }else{
                    $billings = BookingBilling::where('booking_id',$booking->id)->get();
                    return view('billing.my_billing')->with(compact('booking','billings'));
                }

    }

}
