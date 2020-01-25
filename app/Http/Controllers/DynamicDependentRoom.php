<?php

//DynamicDepdendent.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Room;

class DynamicDependentRoom extends Controller
{
    //this is for dynamic dropdown using AJAX
    function indexAjax()
    {
     $rooms = DB::table('rooms')
         ->groupBy('room_type')
         ->get();
         
     return view('dynamic_dependentroom')->with('rooms', $rooms);

    }


function fetch(Request $request)//method
    {
     $select = $request->get('select');
     $value = $request->get('value');
     $dependent = $request->get('dependent');
     $data = DB::table('rooms')
       ->where($select, $value)
       ->groupBy($dependent)
       ->get();
     $output = '<option value="">Select '.ucfirst($dependent).'</option>';
     foreach($data as $row)
     {
      $output .= '<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
     }
     echo $output;
    }
    //end


    public function index()
    {
        $rooms=Room::all();
        return view('admin.dynamicroom.index',compact('rooms'));
    }

    public function store(Request $request)
    {
         $this->validate($request, [
            // 'room_type'=> 'required',// room type
            'room_name'=> 'required|unique:rooms',// room type
            //  'price'=> 'required',

         ]);
         $rooms=new Room();
         
         $rooms->room_type = $request->input('room_type');//room type
         $rooms->room_name = $request->input('room_name');//room type
         $rooms->price = $request->input('price');
         $rooms->save();
         return redirect('/room');
    }
   

}
?>