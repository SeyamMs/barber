<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Events\MyEvent;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;
class CustomerDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'code' => 'required|string|max:5',
            'phone' => 'required|string|max:20',
            'sms-reminder' => 'nullable|boolean',
            'message' => 'nullable|string',
            'service_duration' => 'required|integer',
            'service_name' => 'required|string|max:255',
            'service_price' => 'required|numeric',
            'service_currency' => 'required|string|max:10',
        ]);
    
        try {
                // Store the booking in the database
            $booking = Booking::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'code' => $request->input('code'),
                'phone' => $request->input('phone'),
                'sms_reminder' => $request->input('sms-reminder', false),
                'message' => $request->input('message'),
                'service_duration' => $request->input('service_duration'),
                'service_name' => $request->input('service_name'),
                'service_price' => $request->input('service_price'),
                'service_currency' => $request->input('service_currency'),
            ]);
    
            Mail::to($request->input('email'))->send(new BookingConfirmation($booking));

            return back()->with('success', 'Booking successfully created!');
    
        } catch (Exception $e) {
                // Handle any exceptions
                return redirect()->back()->with('error', 'An error occurred while creating the booking: ' . $e->getMessage());
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
