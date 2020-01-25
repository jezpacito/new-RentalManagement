<?php

namespace App\Http\Controllers;
use DB;
use App\Booking;
use Illuminate\Http\Request;
use App\Room;

class DashboardController extends Controller
{
 

    public function index(){//display data

        // $jointabledata =DB::table('rooms')
        // ->join('bookings','bookings.room_id','=', 'rooms.id')
        // ->select('bookings.id','bookings.firstname','bookings.middlename','bookings.lastname','bookings.tenant_quantity',
        // 'rooms.room_type','rooms.room_name','bookings.active')
        // ->get(); 

//        $activeTenants=Room::where('active',1)->get();
//        $inactiveTenants=Room::where('active',0 )->get();
        //  $tenants = Booking::find($id);
        //  $tenant=Booking::findOrFail($id);

        // dd($activeTenants);

        return view('admin.dashboard'); //joindatadeleted
    }

    
}
