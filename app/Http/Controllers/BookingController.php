<?php

namespace App\Http\Controllers;
use App\Room;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{ //for dropdown of room and room list
    // public function index(){
    //     $rooms=Room::all()->pluck('name','id');
    //     return view('admin.book.booking',compact('rooms'));
    // }
    // public function getBookings($id){
    //    $bookings=Booking::where('room_id',$id)->pluck('name','id');
    //     return json_encode($bookings);
    // }
    public function __construct()
    {
        $this->middleware('auth');
    } // authentication



    public function index(){
        return view('admin.book.booking');
    }
}
