@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Book Tenant </h4>
          <a href="/addBooking" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>Name</th>
                <th>Room Type</th>
                <th>Price</th>
                <th>Room Status</th>
                <th>Tenant Quantity</th>
                <th>Rent Started</th>
                <th>Rent Ended</th>

                <th>Tenant Quantity</th>
                <th class="text-center">
                Action
                </th>
                {{-- <th class="text-right">
                    Delete
                </th> --}}
              </thead>
              <tbody>
                  {{-- @foreach ($rooms as $room) --}}
                      
                  
                <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
          
                  <td><a href="#" class="btn btn-sucess">Update</a>
                    </td>  
                 {{-- <td>
                        <a href="#" class="btn btn-alert">Delete</a>
                  </td>   --}}

                </tr>
                {{-- @endforeach --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  </div>
    
@endsection