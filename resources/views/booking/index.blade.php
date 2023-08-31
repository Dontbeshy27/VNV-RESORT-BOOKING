@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Booking</h1>

    
    @if (Auth::user())
    <a href="{{route('bookings.create')}}">Create booking</a>
    @endif


    <table class="table">
        <tr>
            <th>Full Name</th>
            <th>Contact Number</th>
            <th>Email</th>


        </tr>

        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking -> first_name }}</td>
            <td>{{ $booking -> contact_number}}</td>
            <td>{{ $booking -> email }}</td>
            <td><a class="btn btn-primary" href="{{route('bookings.show', ['booking' => $booking -> id])}}">View</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $bookings->links() }}
</div>

@endsection