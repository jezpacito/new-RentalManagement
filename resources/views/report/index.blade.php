@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
<div class="col-md-12">
    <form method="POST" action="/date-range-result">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Generate Reports</h4>
      

        {{csrf_field()}}
    
        <div class="form-group">
          {{-- <label for="">Room Name</label> --}}
          <input type="month" class="form-control"  id="" name="date" value="{{old('room_name')}}" placeholder="Enter Room Name">
          <div>{{ $errors->first('room_name')}}</div>
        </div>

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