@extends('layouts.app')
@section('content')

<table class="table table-border">
    <tr>
        <th class="fs-4">Name</th>
        <th class="fs-4">Phone</th>
        <th class="fs-4">Email</th>
        <th class="fs-4">id</th>
    </tr>
    @foreach($customers as $customer)
        <tr >
            <td ><a class="text-decoration-none text-dark fs-4" href="/{{$customer->id}}">{{$customer->name}}</a></td>
            <td class="fs-4">{{$customer->phone}}</td>
            <td class="fs-4">{{$customer->email}}</td>
            <td class="fs-4">{{$customer->id}}</td>
            <td><a class="text-decoration-none text-white bg-success p-1 m-3 rounded" href="/userEdit/{{$customer->id}}">Edit</a></td>
            <td><a class="text-decoration-none text-white bg-dark p-1 m-3 rounded" href="/userDelete/{{$customer->id}}">Delete</a></td>

        </tr>
    @endforeach
</table>


@endsection