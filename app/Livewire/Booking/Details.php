<?php

namespace App\Livewire\Booking;

use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Service;
use Livewire\Component;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;

class Details extends Component
{
    public Carbon $selectedDateTime;
    public Service $service;

    public $name;
    public $email;
    public $code;
    public $phone;
    public $sms_reminder = false;
    public $message;

    public function mount(): void
    {
        $this->service = session('service');
        $this->selectedDateTime = session('selectedDataTime');

        abort_if(is_null($this->service), 404);
        abort_if(is_null($this->selectedDateTime), 404);

        $this->code = '+32';
    }

    public function render()
    {
        return view('livewire.booking.details');
    }

    public function submit(): void
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'code' => 'required|string|max:5',
            'phone' => 'required|string|max:20',
            'sms_reminder' => 'nullable|boolean',
            'message' => 'nullable|string',
        ]);

        $booking = Booking::create([
            'name' => $this->name,
            'email' => $this->email,
            'code' => $this->code,
            'phone' => $this->phone,
            'sms_reminder' => $this->sms_reminder,
            'message' => $this->message,

            'service_duration' => $this->service->duration,
            'service_name' => $this->service->name,
            'service_price' => $this->service->price,
            'service_currency' => $this->service->currency,
        ]);

        Mail::to($booking->email)->send(new BookingConfirmation($booking));

        session()->flash('success', 'Booking successfully created!');

        $this->resetExcept('selectedDateTime', 'service');
    }
}
