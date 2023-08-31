@extends('layouts.app')
@section('content')
<div class="container">
    <h1>BOOKING DETAIL</h1>
    <h3>Full Name: {{$booking -> full_name}}</h3>
    <h3>Contact Number : {{$booking -> contact_number}}</h3>
    <h3>Email: {{$booking -> email}}</h3>

    <p><a class="btn btn-primary" {{route('bookings.index')}}">Back to List</a></p>
    <p><a class="btn btn-primary" {{route('bookings.index')}}">Back to List</a></p>
    <form action="{{route('bookings.destroy', $booking->id)}}" method="POST">
        @method('DELETE')
        @csrf

        <input class="btn btn-danger" type="submit" value="Delete">
    </form>
</div>
@endsection