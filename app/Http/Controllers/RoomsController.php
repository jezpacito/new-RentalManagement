<?php

namespace App\Http\Controllers;
use App\Room;
use App\User;
use App\Booking;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\BookingBilling;

class RoomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } // authentication
  

    //
    public function index(){
        // dd('test');
        $rooms = Room::get();
        // dd($rooms);
        return view('rooms.index')->with(compact('rooms'));
    }

    public function booked($id){

        // dd($room);
            $room = Room::where('id',$id)->first();
            $tenant = User::where('type_id', 1)->get();
            // dd($room);
        return view('rooms.book')->with(\compact('room','tenant'));

    }

    public function store(Request $request){
        // dd($request->all());

        
        $new = new Booking;
        $new->room_id = $request->room_id;
        $new->tenant_id = $request->user;
        $new->price = $request->price;
        $new->status = 'active';
        $new->save();

        //update room status
        $update = Room::where('id',$new->room_id)->first();
        $update->status = 'occupied';
        $update->save();

        //generate booking_billing
        $billing = new BookingBilling();
        $billing->booking_id = $new->id;
        $billing->month = Carbon::now();
        $billing->status = 'unpaid';
        $billing->price = $request->price;
        $billing->save();


        // dd($new);
        return redirect(url('\booked-room',$billing->id));
    }

    //active booked rooms
    public function booked_rooms(){

        $booked = Booking::with('user','room')->where('status','=','active')->get();
        // dd($booked);
        return view('rooms.booked_rooms')->with(compact('booked'));
    }

    public function inactive_booked_rooms(){

        $booked = Booking::with('user','room')->where('status','=','inactive')->get();
        // dd($booked);
        return view('rooms.booked_rooms_inactive')->with(compact('booked'));

    }

    public function inactive_booking_billing_details($booking_id){
                
        $booking = Booking::where('id',$booking_id)->first();
        $billing = BookingBilling::where('booking_id',$booking->id)->get();
        return view('rooms.inactive_booking_details')->with(compact('billing','booking'));
    }



    public function booked_room_booking_details($id){

//        dd($id);
        $billings = BookingBilling::where('booking_id',$id)->get();
        $room = Booking::where('id',$id)->first();
        return view('rooms.booked_room_billings')->with(compact('billings','room'));
    }


    //pay billing
    public function pay_billing($id){

        $booking_billing = BookingBilling::where('id',$id)->first();
        $booking_billing->status = 'paid';
        $booking_billing->save();
        return redirect()->back();

    }

    //set booking to incactive //tenatn leaves the room
    public function set_booking_inactive($id){

        $booking = Booking::where('id',$id)->first();
        $booking->status = 'inactive';
        $booking->save();

        $room = Room::where('id',$booking->room_id)->first();
        $room->status = 'vacant';
        $room->save();

        return redirect('/room');
    }

    public function test(){
        $get_booked = Room::where('status','=','occupied')->get();
        $date = Carbon::now();

        dd($date->month);
       
    }




}
