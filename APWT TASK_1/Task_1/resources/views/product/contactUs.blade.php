@extends('layouts.app')
@section('content')
<h2>Contact Us</h2>
<form action="{{route('contactUs')}}" class="form-group" method="post">
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


    <div class="p-3">
    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    
    
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group ">
        <span>Your Massage</span>
        <input type="text" name="text" value="{{old('text')}}" class="form-control pb-5">
       
    </div>
    </div>
    <div class="p-3">
    <input type="submit" class="btn btn-success" value="Submit" > 
</div>                 
</form>
@endsection 