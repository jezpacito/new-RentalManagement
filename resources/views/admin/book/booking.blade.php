@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
 <form method="POST" action="/addtenant">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Booked Tenant</h4>
         
            
                </div>
         <div class="card-body">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-5 pr-1">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" value="{{old('firstname')}}">
                <div>{{ $errors->first('firstname')}}</div>
              </div>
            </div>
            <div class="col-md-3 px-1">
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="middlename" placeholder="Enter Middle Name" value="{{old('middlename')}}">
                <div>{{ $errors->first('middlename')}}</div>
              </div>
            </div>
            <div class="col-md-4 pl-1">
              <div class="form-group">
                <label for="">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" value="{{old('lastname')}}">
                <div>{{ $errors->first('lastname')}}</div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email Address" value="{{old('email')}}">
                <div>{{ $errors->first('email')}}</div>
              </div>
            </div>
            <div class="col-md-6 pl-1">
              <div class="form-group">
                <label>Home Address</label>
                <input type="text" class="form-control"  name="address" placeholder="Enter Home Address" value="{{old('address')}}">
                <div>{{ $errors->first('address')}}</div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Phone No.</label>
                <input type="text" class="form-control" name="phone"  placeholder="Enter Phone No" value="{{old('phone')}}">
                <div>{{ $errors->first('phone')}}</div>
              </div>
            </div>
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Tenant Quantity</label>
                <input type="text" class="form-control" name="tenant_quantity" placeholder="Enter No. of Tenant" value="{{old('tenant_quantity')}}">
                <div>{{ $errors->first('tenant_quantity')}}</div>
              </div>
            </div>

            <div class="col-md-4 pl-1">
              <div class="form-group">
                <label>Rent Started</label>
                 <div class="input-group">
                    <input type="date" class="form-control" name="rent_started" id="rent_started" placeholder="mm/dd/yyyy">
                         <div class="input-group-append">
                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                  </div>
               </div>
             </div>
            </div>
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Status</label>
                <select name="active" id="active" class="form-control">
                  <option value="" disabled>Customer Status</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>
            </div>
                


          </div>
         
        </div>
          
          <div>______________________________________________________________________________________________________________________</div>
    

          <div class="row">
            <div class="col-md-4 pr-1">
                <div class="form-group">
                  <label for="">Room Types</label>
                <select name="room_type" id="room_type" class="form-control input-lg dynamic" data-dependent="room_name">
                 <option value="">Select Room Type</option>
                 {{-- @foreach($rooms as $room)
                 <option value="{{ $room->room_type}}">{{ $room->room_type }}</option>
                 @endforeach --}}
                </select>
                 </div>
                </div>

                <div class="col-md-4 pr-1">
                 <div class="form-group">
                  <label for="">List Of Rooms</label>
                  <select name="room_name" id="room_name"class="form-control input-lg dynamic" data-dependent="price">
                    <option value="">Select Room Name</option>
                  </select>
                 </div>
                </div>

              <div class="col-md-4 pl-1">
              <div class="form-group">
                <label for="">Room Price</label>
                <select name="price" id="price" class="form-control input-lg">
                 <option value="">Price</option>
                </select>
               </div>
            </div>
          </div>

          
  
        
  

            
            
            <div class="modal-footer">
                <a href="" type="button" class="btn btn-secondary">Close</a>
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </div>


          
                </div>
            </div>
            </div>
          
        </div>
    </form>

    {{-- <!--date picker-->
    <script src="{{asset('bt4/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href=".{{asset ('bt4/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
 --}}


    <!--end of datepicker-->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
{{-- 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

  <script>
  $(document).ready(function(){

  $('.dynamic').change(function(){
  if($(this).val() != '')
  {
  var select = $(this).attr("id");
  var value = $(this).val();
  var dependent = $(this).data('dependent');
  var _token = $('input[name="_token"]').val();
  $.ajax({
      url:"{{ route('booked.fetch') }}",
      method:"POST",
      data:{select:select, value:value, _token:_token, dependent:dependent},
      success:function(result)
      {
      $('#'+dependent).html(result);
      }

  })
  }
  });

  $('#room_type').change(function(){
  $('#room_name').val('');
  $('#price').val('');
  });

  $('#room_name').change(function(){
  $('#price').val('');
  });
  

  });

        //   /*datwpicker*/
        //   $('.mydatepicker').datepicker();
        // $('#datepicker-autoclose').datepicker({
        //     autoclose: true,
        //     todayHighlight: true
        // });
  </script>


    
@endsection