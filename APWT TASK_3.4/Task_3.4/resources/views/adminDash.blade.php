@extends('layouts.app')
@section('content')

    @if(Session::get('user')) {{Session::get('user')}} 
    <h1>Admin Panel</h1>
    
<h2>Add User</h2>
<form action="{{route('adminDash')}}" class="form-group" method="post">
    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}"  class="form-control">
    </div>
    <br>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary" value="Add">
</form><br>
    <a class="btn btn-primary" href="{{route('customerProfile')}}">User List</a>

    <a class="btn btn-primary" href="{{route('userEdit')}}">Edit Profile </a>

       <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection 