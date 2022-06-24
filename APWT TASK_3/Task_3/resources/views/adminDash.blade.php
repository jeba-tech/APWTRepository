@extends('layouts.app')
@section('content')
<h1>Admin Panel</h1>
    
<h3>Admin Phone no:</h3> @if(Session::get('user')) {{Session::get('user')}} 
  <br> 
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
    <input type="submit" class="btn btn-primary mt-2" value="Add">

</form><br>
    <a class="btn btn-primary" href="{{route('userList')}}">User List</a>

    <a class="btn btn-primary" href="{{route('adminProfile')}}">Profile </a>

       <a class="btn btn-danger" href="{{route('adminLogout')}}">Log out </a>
    @endif 
@endsection 