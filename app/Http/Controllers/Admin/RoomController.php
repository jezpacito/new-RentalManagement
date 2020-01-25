<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\Booking;

class RoomController extends Controller
{
    public function index()
    {
        $rooms=Room::all();
        return view('admin.room.index',compact('rooms'));
    }
    public function create()
    {
        return view ('admin.room.create');
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            'room_type'=> 'required',// room type
            'room_name'=> 'required',// room type
             'price'=> 'required',
        

         ]);
         $rooms=new Room();
         
         $rooms->room_type = $request->input('room_type');//room type
         $rooms->room_name = $request->input('room_name');//room type
         $rooms->price = $request->input('price');
         $rooms->status = 'vacant';
         $rooms->save();
         return redirect('/room');
    }

    public function edit($id)
    {
            $rooms = Room::findOrFail($id);
            // dd($rooms);
            return view('admin.room.edit')->with('rooms',$rooms);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            // 'room_type'=> 'required',//room type
            // 'room_name'=> 'required|unique:rooms',//room type
            // 'price'=> 'required',
            // 'active'=> 'required',
 

        ]);

        $rooms = Room::find($id);
        $rooms->room_type = $request->input('room_type');//room type
        $rooms->room_name = $request->input('room_name');//room type
        $rooms->price = $request->input('price');
        $rooms->active = $request->input('active');
     
        $rooms->save();
        return redirect('/room');
    }
    
}
