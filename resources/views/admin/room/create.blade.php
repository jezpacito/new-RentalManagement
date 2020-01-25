@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
    <form method="POST" action="/addRoom">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Add Room</h4>
      

        {{csrf_field()}}
    
        <div class="form-group">
          <label for="">Room Name</label>
          <input type="text" class="form-control"  id="room_name" name="room_name" value="{{old('room_name')}}" placeholder="Enter Room Name">
          <div>{{ $errors->first('room_name')}}</div>
        </div>


        <div class="form-group">
          <label for="">Room Type</label>
          <select name="room_type" id="room_type"class="form-control" value="{{old('room_type')}}">
            <option value="Single">Single Type</option>
            <option value="Apartment">Apartment Type</option>
          </select>
         </div>

         <div class="form-group">
          <label for="">Room Price</label>
          <select name="price" id="price"class="form-control" value="{{old('price')}}">
            <option value="3000">3000</option>
            <option value="3500">3500</option>
          </select>
         </div>
{{-- 
         <div class="col-md-4 pr-1">
          <div class="form-group">
            <label>Status</label>
            <select name="active" id="active" class="form-control">
              <option value="" disabled>Customer Status</option>
              <option value="1">Occupied</option>
              <option value="0">Unoccupied</option>
            </select>
          </div> --}}
        </div>

          <div class="modal-footer">
            <a href="" type="button" class="btn btn-secondary">Close</a>
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>
</form>
</div> 
@endsection