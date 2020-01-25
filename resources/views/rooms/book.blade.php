@extends('layouts.master')

@section('title')
    Booked Room
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Room Information </h4>
          {{-- <a href="/registerTenant" class="btn btn-primary">Add</a> --}}
         </div>
      
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th >Room</th>
                <th>Room Type</th>
                <th>Price</th>        
                <th class="text-center">Tenant</th>
                <th class="text-left">Action</th>
              </thead>
              <tbody>
                
                <form action="{{url('/store-booked')}}" method="POST">
                    @csrf
                <tr>
                <td>{{$room->room_name}}</td>
                  <td>{{$room->room_type}} </td>
                  <td>{{$room->price}}</td>
                  <td class="text-center">
                      <select name="user" class="btn btn-info btn-sm dropdown-toggle">
                        @foreach($tenant as $user)
                                <option value={{$user->id}}>
                                  {{$user->fname}} {{$user->lname}} 
                                </option>
                                @endforeach
                            </select>


                        
                    </td>

                    <td>
                    <input type="hidden" name="room_id" value="{{$room->id}}">
                    <input type="hidden" name="price" value="{{$room->price}}">
                       <input type="submit" value="Book" class="btn btn-info btn-sm">
                    
                  </form>
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