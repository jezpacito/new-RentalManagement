@extends('layouts.master')

@section('title')
    Rental Management
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <form method="POST" action="">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Booking Form</h4>
            {{-- <button class="btn btn-primary"> CLICK THIS SHIT</button> --}}
           
            <div class="form-group">
                <label for="country">Select Country </label>
                <select name="country" id="country" class="form-control">
                    <option value="">Select country </option>

                    @foreach ($countries as $key => $value)
                         <option value="{{$key}}">{{"$value"}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="state">Select states </label>
                <select name="state" id="state" class="form-control">
                    <option value="">states </option>
                </select>
            </div>
   



            <script src="{{asset('js/jquery.js')}}"></script>
            <script>
            $(document).ready(function(){
                // console.log('IT WORKS ')
                $('select[name="country"]').on('change',function(){
                    var country_id=$(this).val();
                    if(country_id){
                        // console.log(country_id);

                        $.ajax({

                            url: '/getStates/'+country_id,
                            type: 'GET',
                            dataType: 'json',
                            success: function(data){
                                console.log(data);
                                $('select[name="state"]').empty();
                                $.each(data,function(key, value){
                                    
                                    $('select[name="state"]')
                                    .append('<option value="'+key+'">'+value+'</option>');

                                });

                            }
                        });
                    }else {
                        $('select[name="state"]').empty();

                    }
                });


            });
                </script>
    
    
    
            </div>
        </div>
    </div>
    </form>
    </div> 
    
@endsection