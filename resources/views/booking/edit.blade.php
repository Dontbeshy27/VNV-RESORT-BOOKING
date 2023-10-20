@extends('layouts.app')
@section('content')
<div class="container">
    <H1>EDIT</H1>
    <form action="{{route('bookings.update', $booking -> id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="mb-3 col-md-4">
            <label class="form-label">Full name</label>
            <input class="form-control" type="text" name="full_name" value="{{$booking->full_name}}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Contact number</label>
            <input class="form-control" type="number" name="contactnumber" value="{{$booking->last_name}}">
        </div>
        <div class="mb-3 col-md-4">
            <label class="form-label">Email</label>
            <input class="form-control" type="email" name="email" value="{{$booking->email}}">
        </div>
        <div class="mb-3 col-md-4">
        <label for="checkInDate">Check-in Date</label>
          <input type="checkInDate" id="checkInDate" name="checkInDate" value="{{$booking->check-in date}}">
        </div>
        <div class="mb-3 col-md-4">
        <label for="checkInDate">Check-out Date</label>
          <input type="checkOutDate" id="checkOutDate" name="checkOutDate" value="{{$booking->check-out date}}">
        </div>



    <div class="mb-3 col-md-4">
            <input class="btn btn-primary" type="submit" value="Update">
            <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>
        </div>

    </form>
    @include('partials.error-list-footer')
    </div>
@endsection