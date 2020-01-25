@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
<div class="col-md-8">
    
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Update Room </h4>
      <form method="POST" action="/updateroom/{{$rooms->id}}">
        {{csrf_field()}}
        {{ method_field ('PUT')}}
        
      <input type="hidden" name="id" value="{{$rooms->id}}">
        <div class="form-group">
          <label for="">Room Name</label>
        <input type="text" class="form-control"  name="room_name" id="room_name" value="{{$rooms->room_name}}" placeholder="Enter Room Type">
        </div>

          {{-- <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control"  name="price" id="price" value="{{$rooms->price}}" placeholder="Enter Price">
          </div> --}}

          {{-- <div class="form-group">
            <label for="">Room Type</label>
          <input type="text" class="form-control"  name="room_type" id="room_name" value="{{$rooms->room_type}}" placeholder="Enter Room Name">
          </div> --}}
          
          <div class="form-group">
            <label for="">Room Price</label>
            <select class="form-control" name="price" id="price" >
            <option value="3000">3000</option>
              <option value="3500">3500</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Room Type</label>
            <select class="form-control" name="room_type" id="room_type" >
            <option value="Single Room">Single Room</option>
              <option value="Apartment Room">Apartment Room</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Room Status</label>
            <select class="form-control" name="active" id="active" >
            <option value="1">Occupied</option>
              <option value="0">Unoccupied</option>
            </select>
          </div>

         
          <div class="form-group">
              <a href="" type="button" class="btn btn-secondary">Close</a>
              <button type="submit" name="submit" class="btn btn-primary">Update  </button>
          </div>
    </div>
</div>
</form>
</div> 
@endsection