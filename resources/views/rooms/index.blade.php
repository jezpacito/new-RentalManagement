@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tenant Table </h4>
          {{-- <a href="/registerTenant" class="btn btn-primary">Add</a> --}}
         </div>

          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">

              <th class="text-center">Room</th>
                <th class="text-center">Room Type</th>
                <th class="text-center">Price</th>
                <th class="text-right">Action</th>
              </thead>
              <tbody>
                @foreach ($rooms as $room)

                <tr>
                <td>{{$room->room_name}}</td>
                  <td>{{$room->room_type}} </td>
                  <td>{{$room->price}}</td>
                        <td>
                            <a href={{url('/room-booked',$room->id)}}>
                                <button class="btn btn-primay">Booked</button>
                            </a>
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