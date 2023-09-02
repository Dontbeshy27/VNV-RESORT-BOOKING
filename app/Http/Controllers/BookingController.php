<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
     
        return view('booking');
    }

    public function index()
    {
        return view('/index');
    }

    public function contact()
    {
        return view('/contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullName' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'checkInDate' => 'required',
            'checkOutDate' => 'required',
        ]);
    
        Booking::create($validatedData);

        return redirect()->route('booking.create')->with(['message' => 'Booking successful!']);

    }
   
    
}

