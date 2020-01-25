@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Edit {{ $user->name }}</div>

                <div class="card-body">
                <form action="{{ route ('admin.users.update', $user) }}" method="POST">

                    <div class="form-group row">
                        <label for="fname" class="col-md-2 col-form-label text-md-right">First Name</label>

                        <div class="col-md-6">
                            <input id="fname" type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ $user->fname }}" required autocomplete="email" autofocus>

                            @error('fname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="mname" class="col-md-2 col-form-label text-md-right">Middle Name</label>

                        <div class="col-md-6">
                            <input id="mname" type="text" class="form-control @error('mname') is-invalid @enderror" name="mname" value="{{ $user->mname }}" required autocomplete="email" autofocus>

                            @error('mname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label text-md-right">Last Name</label>

                        <div class="col-md-6">
                            <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ $user->lname }}" required autocomplete="email" autofocus>

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email}}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    
                    
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="roles" class="col-md-2 col-form-label text-md-right">Role</label>
                        <div class="col-md-6">
                    @foreach ($roles as $role)
                    <div class="form-check">
                        <input type="checkbox" name="roles[]" value="{{ $role->id}}"
                        @if($user ->roles->pluck('id')->contains($role->id)) checked @endif>
                        <label> {{ $role->name }}</label>
                    </div>  
                    @endforeach
                </div>
            </div>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </form>
                </div>  
            </div>
        </div>
    </div>
</div>
@endsection
