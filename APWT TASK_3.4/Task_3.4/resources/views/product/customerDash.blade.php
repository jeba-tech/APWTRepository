@extends('layouts.app')
@section('content')

    @if(Session::get('user')) {{Session::get('user')}} 
    <h1>Welcome to teamX</h1>
       <a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
    @endif 
@endsection 