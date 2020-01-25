@extends('layouts.master')


@section('title')
    Rental Management
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        @include('partials.alerts')
        <div class="card-header">
          <h4 class="card-title"> User Management Table</h4>
          @include('partials.alerts')
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                 <th class="text-center">Email</th>
                <th>Role</th>
                <th class="text-center">
                  Action
                </th>
              </thead>

              <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">
                  </td>{{ $user->id }}</th>
                  <td>{{ $user->fname}}</td>
                  <td>{{ $user->mname}}</td>
                  <td>{{ $user->lname}}</td>
                  <td class="text-center">{{ $user->email}}</td>
                  
                  <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                  <td>
                      @can('edit-users')

                      
                  <a href="{{ route ('admin.users.edit', $user->id) }}">
                    <button type="button" class="btn btn-primary float-left"  data-toggle="modal" >Edit</button>
                  </a>
                  
                  @endcan
                  @can('delete-users')
                  <form action="{{ route ('admin.users.destroy', $user)}}" method="POST" class="float-left">
                      @csrf
                      {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-warning">Delete</button></a>
                   </form> 
                   @endcan
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



@section('scripts')
    
@endsection