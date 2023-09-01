<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\DB;

class BookingController extends RoutingController
{
    public function index()
    {
        $data = Booking::paginate(10);
        return view('booking.index', ['bookings' => $data]);
    }

    public function show(Booking $booking)
    {
        return view('booking.show')->with('booking', $booking);
    }

    public function edit(Booking $booking)
    {
        return view('booking.edit')->with('booking', $booking);
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('bookings.show', ['booking' => $booking->id]);
    }

    public function create()
    {
        return view("booking.create");
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('bookings.index');
    }

    public function destroy(Booking $booking)
    {
        Booking::destroy($booking->id);
        return redirect()->route('bookings.index');
    }
}
