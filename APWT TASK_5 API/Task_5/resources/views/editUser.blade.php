@extends('layouts.app')
@section('content')
<h2>Edit Profile</h2>
<form action="{{route('editUser')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-4 form-group">
        <span>ID</span>
        <input type="text" name="id" value="{{$customer->id}}" class="form-control">
        @error('id')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$customer->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="email" name="email" value="{{$customer->email}}"class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{$customer->phone}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{$customer->password}}"class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    <input type="submit" class="btn btn-success" value="Update" >                  
</form>
@endsection 