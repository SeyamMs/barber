<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Day;
use App\Models\Booking;


class HomeController extends Controller
{
    public function show(){
        $services = Service::all();
        return view('index',compact('services'));
    }
    public function formDetails(Request $request)
    {
        $selected_time = $request->selected_time;
        $selected_date = $request->selected_date;
        $service_name = $request->service_name;
        $service_duration = $request->service_duration;
        $service_price = $request->service_price;
        $service_currency = $request->service_currency;
        
        return view('customer_details',compact('selected_time','selected_date','service_name','service_duration','service_price','service_currency'));
    }

    public function update(Booking $booking)
    {
        $days = Day::all();
           
        return view('updateBooking', [
            'booking' => $booking,
            'days' => $days,
        ]);
    }
}
