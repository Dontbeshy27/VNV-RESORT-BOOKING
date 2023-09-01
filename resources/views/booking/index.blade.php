<!DOCTYPE html>
<html>
<head>
    <title>Booking List</title>
</head>
<body>
    <h1>Booking List</h1>
    @foreach($bookings as $booking)
        <p>Full name: {{ $booking->full_name }}</p>
        <p>Contact: {{ $booking->contact_number }}</p>
        <p>Email: {{ $booking->email }}</p>
        <p>Gender: {{ $booking->gender }}</p>
        <p>Check-in: {{ $booking->check_in }}</p>
        <p>Check-out: {{ $booking->check_out }}</p>
        <hr>
    @endforeach

    <h2>Create Booking</h2>
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form method="post" action="{{ route('booking.store') }}">
        @csrf
        <label>Full Name:</label>
        <input type="text" name="name" required><br>
        <label>Contact Number:</label>
        <input type="number" name="cn" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Gender:</label>
        <input type="gender" name="name" required><br>
        <label>Check-in:</label>
        <input type="date" name="check_in" required><br>
        <label>Check-out:</label>
        <input type="date" name="check_out" required><br>
        <button type="submit">Book</button>
    </form>
</body>
</html>
