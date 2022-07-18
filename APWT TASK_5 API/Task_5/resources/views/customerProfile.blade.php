@extends('layouts.app')
@section('content')

<h1>Profile</h1>
<h3>Name</h3>@if(Session::get('user')) {{Session::get('user')}} 

<img src="{{ URL::to('/images/Customer.png') }}" style="max-width:10%;">

<h2>Welcome to your profile</h2>
@endif 
@endsection