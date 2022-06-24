@extends('layouts.app')
@section('content')

<h1>Profile</h1>

<div>
<h1 >Phone number:  @if(Session::get('user')) {{Session::get('user')}} 
@endif</h1><br>

</h1><br>


</div>


<img src="{{ URL::to('/images/Customer.png') }}" style="max-width:10%;">

<h2>Hellow admin .Welcome to your profile</h2>

@endsection