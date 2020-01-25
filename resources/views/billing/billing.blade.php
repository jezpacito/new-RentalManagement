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
                    <h3 class="text-danger">Currently No Bookings</h3>
                    </div>
                  
        
{{-- 
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <th >Month</th>
                        <th>status</th>
                        <th>price</th>
                        <th>Date Paid</th>

                        </thead>
                        <tbody>
                        <tr>
                        </tr>
                        </tbody>
                    </table>
                </div> --}}
            </div>
        </div>
    </div>

    </div>

@endsection