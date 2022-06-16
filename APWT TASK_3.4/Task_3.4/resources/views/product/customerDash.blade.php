@extends('layouts.app')
@section('content')

    @if(Session::get('user')) {{Session::get('user')}} 
    <h1>Welcome to teamX</h1>
    <a class="btn btn-primary" href="{{route('customerProfile')}}">Profile </a>
    <a class="btn btn-primary" href="{{route('userEdit')}}">Edit Profile </a>

       <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection 