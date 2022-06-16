@extends('layouts.app')
@section('content')
<h1>Welcome </h1>
<h3>Name</h3>@if(Session::get('user')) {{Session::get('user')}} 
<br><br>
   
    <a class="btn btn-primary" href="{{route('customerProfile')}}">Profile </a>
    <a class="btn btn-primary" href="{{route('userEdit')}}">Edit Profile </a>

       <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection 