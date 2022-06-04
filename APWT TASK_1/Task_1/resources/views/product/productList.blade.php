@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>Action</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->name}}</td>
        <td>{{$product->id}}</td>
        <td><a class="text-decoration-none text-white bg-secondary p-1 m-3 rounded" href="/productEdit/{{$product->name}}/{{$product->id}}">Details</a></td>
    </tr>
    @endforeach

</table>
@endsection