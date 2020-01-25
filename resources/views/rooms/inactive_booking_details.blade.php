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
            {{-- <h4 class="card-title text-primary">Bookings History From Room</h4> --}}
            <h4 class="card-title text-primary">Booking Details{{$booking->room()->first()->room_name}} Room</h4>
            <h4> </h4>



            <div class="card-collapse text-left text-primary">
              {{-- <div class="card-header">
               
              </div> --}}
              <div class="card-body">
                <p class="card-text"> {{$booking->user()->first()->fname }} {{$booking->user()->first()->lname}}</p>
                <p class="card-text">Date Started: {{date('F d Y',strtotime($booking->created_at))}}</p>
                <p class="card-text">Date Leave: {{date('F d Y',strtotime($booking->updated_at))}}</p>
          
               </div>
            </div>

      
        </div>
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
            
                 <th>Month</th>
                <th>Status</th>
                
       
      

              </thead>
              <tbody>
                  @foreach($billing as $bill)
              <td> {{date('F', strtotime($bill->month))}}</td>
              <td> {{$bill->status}}</td>
                        @endforeach

            
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   
  </div>
    
@endsection