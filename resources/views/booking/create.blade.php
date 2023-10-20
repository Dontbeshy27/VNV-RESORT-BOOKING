

@extends('layouts.app')
@section('content')
<div class="container">

    <H1>Create Booking</H1>
    <form action="{{route('bookings.store')}}" method="POST">
    @csrf
    <div class="mb-3 col-md-4">
        <label class="form-label">Full Name</label>
        <input type="text" name="full_name">
    </div>
    <div class="mb-3 col-md-4">
        <label class="form-label">Contact Number</label>
        <input type="number" name="contactnumber">
    </div>
    <div class="mb-3 col-md-4">
        <label class="form-label">Email</label>
        <input type="email" name="email">
    </div>
    <div class="mb-3 col-md-4">
    <label for="checkInDate">Check-in Date</label>
          <input type="checkInDate" name="checkInDate"> 
    </div>

    <div class="mb-3 col-md-4">
    <label for="checkOutDate">Check-out Date</label>
          <input type="checkOutDate" name="checkOutDate">
    </div>

    <input class="btn btn-primary" type="submit" value="Save">
    <a class="btn btn-secondary" href="{{url()->previous()}}">Cancel</a>
    
    </form>
    @include('partials.error-list-footer')
    </div>
@endsection