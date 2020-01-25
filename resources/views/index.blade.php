@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Booking Form</h4>
            {{-- <button class="btn btn-primary"> CLICK THIS SHIT</button> --}}
           
            <div class="form-group">
                <label for="room_type">Select Room Type </label>
                <select name="room_type" id="room_type" class="form-control">
                    <option value="">Select Room type</option>

                    @foreach ($rooms as $key => $value)
                         <option value="{{$key}}">{{"$value"}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="room_name">Select Rooms </label>
                <select name="room_name" id="room_name" class="form-control">
                    <option value="">Select Available Room </option>
                </select>
            </div>
   



            <script src="{{asset('js/jquery.js')}}"></script>
            <script>
            $(document).ready(function(){
                // console.log('IT WORKS ')

                $('select[name="room_type"]').on('change', function(){
                    // console.log('IT'S WOKING ') 
                    var room_id = $(this).val();
                    if(room_id){
                        $.ajax({
                            url: '/reservations/getRoomTypes/'+room_id,
                            type: 'GET',
                            dataType: 'text',
                            success: function(data){
                                console.log(data);
                            }
                        });
                        // console.log(room_id);
                      
                    }

                });
            });
                </script>
    
    
    
            </div>
        </div>
    </div>
    </form>
    </div> 
    
@endsection