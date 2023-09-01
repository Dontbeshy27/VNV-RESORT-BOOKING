<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings'));
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
        return redirect()->route('booking.show', ['booking' => $booking->id]);
    }

    public function create()
    {
        return view("booking.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string',
            'contact' => 'required|bigInteger',
            'email' => 'required|string',
            'gender' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);
    
        Booking::create($validatedData);
    
        return redirect()->route('booking.show')->with('success', 'Booking created successfully.');
    }
    

    public function destroy(Booking $booking)
    {
        Booking::destroy($booking->id);
        return redirect()->route('bookings.index');
    }
}
