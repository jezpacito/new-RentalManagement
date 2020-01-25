@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Tenant </h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Phone No.</th>
                <th class="text-right">
                Edit
                </th>
                <th class="text-right">
                    Delete
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Jon Porter </td>
                  <td>Jon Porter </td>
                  <td>Jon Porter </td>
                  <td>Jon Porter </td>
                  <td>Jon Porter </td>
                  <td>Jon Porter </td>
                  <td>
                        <a href="#" class="btn btn-sucess">Edit</a>
                    </td>  
                 <td>
                        <a href="#" class="btn btn-alert">Delete</a>
                  </td>  

                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  </div>
    
@endsection