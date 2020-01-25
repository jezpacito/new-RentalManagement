@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tenants List </h4>
          <a href="/user-create" class="btn btn-primary ">Add</a>
         </div>
      
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>First name</th>
                <th>Middle name</th>
                <th>Last name</th>
                <th class="text-center">Email</th>

                <th class="text-center">Phone no.</th>

              </thead>
              <tbody>
                @foreach ($tenants as $tenant)
               
                <tr>

                  <td>{{$tenant->fname}} </td>
                  <td>{{$tenant->mname}}</td>
                  <td>{{$tenant->lname}}</td>
                  <td class="text-center" >{{$tenant->email}}</td>
                  <td class="text-center">{{$tenant->phone_no}}</td>
              

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