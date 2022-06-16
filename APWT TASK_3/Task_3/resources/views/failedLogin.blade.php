@extends('layouts.app')
@section('content')

<!-- Full screen modal -->
<div class="modal-dialog modal-fullscreen-sm-down">
<h1>Login Failed</h1>
<h2>Please enter valid information.</h1>
<a class="btn btn-light" href="{{route('ok')}}">OK</a>

</div>


@endsection