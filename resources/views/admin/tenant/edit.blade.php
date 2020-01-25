@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
<div class="col-md-10">
    
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Update Tenant </h4>
      <form method="POST" action="/updatetenant/{{$tenants->id}}">
        {{csrf_field()}}
        {{ method_field ('PUT')}}
        
      <input type="hidden" name="id" value="{{$tenants->id}}">
        <div class="form-group">
          <label for="">First Name</label>
        <input type="text" class="form-control"  name="firstname" id="t_fname" value="{{$tenants->firstname}}" placeholder="Enter First Name">
        </div>

        <div class="form-group">
            <label for="">Middle Name</label>
            <input type="text" class="form-control"  name="middlename" id="middlename" value="{{$tenants->middlename}}" placeholder="Enter Middle Name">
          </div>

          <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control"  name="lastname" id="lastname" value="{{$tenants->lastname}}" placeholder="Enter Last Name">
          </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control"  name="email" id="email" value="{{$tenants->email}}" placeholder="Enter Email">
          </div>

          <div class="form-group">
            <label for="">Address</label>
            <input type="text" class="form-control"  name="address" id="address" value="{{$tenants->address}}" placeholder="Enter Address">
          </div>

          <div class="form-group">
            <label for="">Phone No.</label>
            <input type="text" class="form-control"  name="phone" id="phone" value="{{$tenants->phone}}" placeholder="Enter Phone No.">
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