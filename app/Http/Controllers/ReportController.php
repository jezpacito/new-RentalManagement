<?php

namespace App\Http\Controllers;

use App\Booking;
use App\BookingBilling;
use Illuminate\Http\Request;
use Carbon\Carbon;
class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } // authentication

    //

    public function index(){
            
        return view('report.index');
    }

    public function date(Request $request){
        $date = Carbon::parse($request->date)->month;
        $count = BookingBilling::with('room.user')->whereMonth('created_at',$date)->count();
        $result = BookingBilling::with('room.user')->whereMonth('created_at',$date)->get();
        // dd($result);
        $total =$result->sum('price');
        // dd($total);
    
            return view('report.result')->with(compact('result','date','total','count'));
    }
}
