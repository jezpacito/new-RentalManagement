@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="/user-store">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Register Tenant </h4>

                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" class="form-control"  name="firstname" value="{{old('firstname')}}" placeholder="Enter First Name">
                            <div>{{ $errors->first('firstname')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="">Middle Name</label>
                            <input type="text" class="form-control"  name="middlename" value="{{old('middlename')}}" placeholder="Enter Middle Name">
                            <div>{{ $errors->first('middlename')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control"  name="lastname"  value="{{old('lastname')}}"  placeholder="Enter Last Name">
                            <div>{{ $errors->first('lastname')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control"  name="email" value="{{old('email')}}" placeholder="Enter Email">
                            <div>{{ $errors->first('email')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control"  name="password" value="{{old('email')}}" placeholder="Enter Password">
                            <div>{{ $errors->first('email')}}</div>
                        </div>

                        <div class="form-group">
                            <label for="">Type</label>
                           <select class="form-control" name="type">
                               @foreach($type as $types)
                                   <option value="{{$types->id}}">{{$types->type}}</option>
                                   @endforeach
                           </select>
                        </div>

                        <div class="form-group">
                            <label for="">Phone No.</label>
                            <input type="text" class="form-control"  name="phone" value="{{old('phone')}}" placeholder="Enter Phone No.">
                            <div>{{ $errors->first('phone')}}</div>
                        </div>
                        


                        <div class="modal-footer">
                            <a href="" type="button" class="btn btn-secondary">Close</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection