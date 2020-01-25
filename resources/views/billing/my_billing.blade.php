@extends('layouts.master')

@section('title')
    Rental Management
@endsection

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
                    <h5 class="card-title text-primary">Billing Details</h5>
                 
                    </div>       
                      <div class="card-collapse text-left">
                        {{-- <div class="card-header">
                         
                        </div> --}}
                        <div class="card-body">
                        
                          <p class="card-text">Room Name: {{$booking->room()->first()->room_name}} </p>
                          <p class="card-text">Room Type: {{$booking->room()->first()->room_type}} </p>
                    
                         </div>
                      </div>
                      
                      
                   
           
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th >Month</th>
                        <th>status</th>
                        <th>price</th>
                        <th>Date Paid</th>

                        </thead>
                        <tbody>
                        @foreach ($billings as $b)

                            <tr>
                                <td>{{date('F',strtotime($b->month))}} </td>
                                <td>{{$b->status}} </td>
                                <td>{{$b->price}} </td>
                                <td>
                                        @if($b->status === 'paid')
                                    {{date('F d Y',strtotime($b->updated_at))}}
                                            @else
                                        Not Paid
                                            @endif

                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                  
                </div>
                
                  <div class="card-collapse text-right">
                    {{-- <div class="card-header">
                     
                    </div> --}}
                    <div class="card-body">
                      {{-- <h5 class="card-title">Billing Details</h5> --}}
                      <p class="card-text">Totat: </p>
                      <p class="card-text">Current Balance: </p>
                
                     </div>
                  </div>
            </div>
        </div>
    </div>

    </div>

@endsection