@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Room Details</h4>
          <a href="/insertRoom" class="btn btn-primary ">add</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Room Name</th>
                <th>Room Type</th>
                <th>Room Status</th>
                <th>Room Price</th>
                <th class="text-center">
                Action
                </th>
                {{-- <th class="text-right">
                    Delete
                </th> --}}
              </thead>
              <tbody>
                  @foreach ($rooms as $room)
                      
                  
                <tr>
                <td>{{$room->id}}</td>
                <td>{{$room->room_name}}</td>
                <td>{{$room->room_type}}</td>
                <td>{{$room->status}}</td>
                <td>{{$room->price}}</td>
        

                  <td class="text-center">
                    <a href="{{ url('editroom/'.$room->id)}}">
                      <button class="btn btn-warning btn-sm">Edit
                      </button>
                    </a>

                    <a href={{url('/room-booked',$room->id)}}>
                      @if($room->status === 'vacant')
                      
                      <button class="btn btn-info btn-sm">Book
                      
                      </button> 
                      
                    @else
                
                    @endif
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