@extends('layouts.app')
@section('content')

<h1>Our Team Members</h1>

@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection
