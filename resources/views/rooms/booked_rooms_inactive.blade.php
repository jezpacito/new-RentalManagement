@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Booking's History</h4>

         </div>

          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

                 <th>Room</th>
                <th>Room Type</th>
                <th>Price</th>
                 <th>Status</th>
                <th> Tenant<th>
                {{-- <th>Action<th> --}}

              </thead>
              <tbody>


              @foreach ($booked as $room)
                  <tr>
                <td>{{$room->room()->first()->room_name}}</td>
                  <td>{{$room->room()->first()->room_type}} </td>
                  <td>{{$room->room()->first()->price}}</td>
                  <td>{{$room->status}}</td>
                  <td>{{$room->user()->first()->fname}} {{$room->user()->first()->lname}} </td>
                    <td>
                        <a href="{{url('/booking-inactive-billings',$room->id)}}">
                            <button class="btn btn-success btn-sm">Details</button>
                        </td>
                  

                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection