@extends('layouts.master')

@section('title')
    Rental Management
@section('content')
<div class="row">
<div class="col-md-12">
    <form method="POST" action="/addRoom">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Booking Form</h4>
      

        {{-- {{csrf_field()}} --}}

      
          {{Form::open(array('url'=>'','files'=>true))}}
          <div class="form-group">
            <label for="">Room Type</label>
            <select class="form-control input-sm" name="room" id="room">
              @foreach ($rooms as $room)
            <option value="{{$room->id}}"> {{$room->room_type}}</option>
              @endforeach
           
            </select>
          </div>


          <div class="form-group">
            <label for="">Room Names</label>
            <select class="form-control input-sm" name="room_name">
              <option value=""></option>
            </select>
          </div>
          {{Form::close()}}


          <div class="form-group">    
            <label class="label-control"> Rent Started</label>
                <div class="dates">
                  <div class="form-group">
                    <input type="date" style="width:200px;background-color:#aed6f1;"
                     class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                  </div>
              </div>


              
          </div>
        
          <form method="post">
            <div class="form-group"> <!-- Submit button -->
              <button class="btn btn-primary " name="submit" type="submit">Submit</button>
            </div>
           </form>



        </div>
    </div>
</div>
</form>
</div> 

<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
{{-- <script>
$('#room').on('change',function(e){
  console.log(e);

  var cat_id=e.target.value;

  //ajax
  $.get('/ajax-subcat?cat_id='+ cat_id, function(data){
    //success data
    $.each(data, function(index,subcatObj){
      $('#room_name').append('<option value="'+subcatObj.id+'"></option>');
    });
    
  });
}); 
</script> --}}




  <!--date picker-->
	{{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/bootstrap-datepicker.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datepicker.css')}}" >	 --}}

{{-- <script>

  $(function() {

  $('.dates #usr1').datepicker({
    'format': 'yyyy-mm-dd',
    'autoclose': true
  });


});
  </script> --}}
@endsection@endsection

@section('content')
<div class="row">
<div class="col-md-12">
    <form method="POST" action="/addRoom">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Booking Form</h4>
      

        {{-- {{csrf_field()}} --}}

      
          {{Form::open(array('url'=>'','files'=>true))}}
          <div class="form-group">
            <label for="">Room Type</label>
            <select class="form-control input-sm" name="room" id="room">
              @foreach ($rooms as $room)
            <option value="{{$room->id}}"> {{$room->room_type}}</option>
              @endforeach
           
            </select>
          </div>


          <div class="form-group">
            <label for="">Room Names</label>
            <select class="form-control input-sm" name="room_name">
              <option value=""></option>
            </select>
          </div>
          {{Form::close()}}


          <div class="form-group">    
            <label class="label-control"> Rent Started</label>
                <div class="dates">
                  <div class="form-group">
                    <input type="date" style="width:200px;background-color:#aed6f1;"
                     class="form-control" id="usr1" name="event_date" placeholder="YYYY-MM-DD" autocomplete="off" >
                  </div>
              </div>


              
          </div>
        
          <form method="post">
            <div class="form-group"> <!-- Submit button -->
              <button class="btn btn-primary " name="submit" type="submit">Submit</button>
            </div>
           </form>



        </div>
    </div>
</div>
</form>
</div> 

<script rel="javascript" type="text/javascript" href="js/jquery-1.11.3.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
{{-- <script>
$('#room').on('change',function(e){
  console.log(e);

  var cat_id=e.target.value;

  //ajax
  $.get('/ajax-subcat?cat_id='+ cat_id, function(data){
    //success data
    $.each(data, function(index,subcatObj){
      $('#room_name').append('<option value="'+subcatObj.id+'"></option>');
    });
    
  });
}); 
</script> --}}




  <!--date picker-->
	{{-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/bootstrap-datepicker.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datepicker.css')}}" >	 --}}

{{-- <script>

  $(function() {

  $('.dates #usr1').datepicker({
    'format': 'yyyy-mm-dd',
    'autoclose': true
  });


});
  </script> --}}
@endsection