@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
 <form method="POST" action="/addRoom">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Room</h4>
                </div>
         <div class="card-body">
          {{ csrf_field() }}
                <div class="form-group">
                <select name="room_type" id="room_type" class="form-control input-lg dynamic" data-dependent="price">
                 <option value="">Select Room Type</option>
                 @foreach($rooms as $room)
                 <option value="{{ $room->room_type}}">{{ $room->room_type }}</option>
                 @endforeach
                </select>
                 </div>

               <div class="form-group">
                {{-- <label for="">Room Type</label> --}}
                <input type="text" class="form-control"  id="room_name" name="room_name" value="{{old('room_name')}}" placeholder="Enter Room Name">
                <div>{{ $errors->first('room_name')}}</div>
              </div>

              <div class="form-group">
                <select name="price" id="price" class="form-control input-lg">
                 <option value="">Price</option>
                </select>
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
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
      url:"{{ route('dynamicdependentroom.fetch') }}",
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
  </script>


    
@endsection