@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
            <div class="card-collapse text-center text-black mb-3">
              <div class="card" style="width: 20rem;">
                <img class="card-img-overlay" src="{{asset('assets/img/marie-logo.png')}}" alt="Card image cap">
               
              </div>
            <div class="card-body">
                    <div class="card-body">
               </div>
                {{-- <h4 class="card-title">Marie's Rental Management System</h4> --}}
           
               
                <p class="card-text text-white">   ..</p>
                <p class="card-title">Corner Pres. Quirino Avenue, Santol St. General Santos City</p>
                <p class="card-text ">marierental@gmail.com</p>
            </div>
            <h4 class="card-title text-primary">Booking Details</h4> 
            </div>
     

       
        
        <div class="text">
          <!--billing details-->  
          <h5> {{$room->user()->first()->fname}} {{$room->user()->first()->lname}}</h5>
          {{-- <h5>{{$room->user()->first()->address}}</h5> --}}
            <p>Room: {{$room->room()->first()->room_name}} - {{$room->room()->first()->room_type}} room</p>
        </div>

        <div class="card-collapse text-left">
          {{-- <div class="card-header">
           
          </div> --}}
        
        </div>
        
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
            
                 <th>Month</th>
                <th>Payment Status</th>
                <th>Price</th>
                <th>Action<th>

              </thead>
              <tbody>


              @foreach ($billings as $bill)
                  <tr>
                <td>{{date('F',strtotime($bill->month))}}</td>
                  {{--<td>{{$bill->month}} </td>--}}
                  <td>{{$bill->status}}</td>
                  <td>{{$bill->price}}</td>
                    <td >
                        @if($bill->status === 'paid')
                            <h6>Paid</h6>
                            @else
                            <a href="{{url('pay-billing',$bill->id)}}">
                                <button class="btn btn-primary">Mark as Paid </button>
                            </a>
                            @endif
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