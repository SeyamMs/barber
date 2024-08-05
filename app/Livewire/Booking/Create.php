<?php

namespace App\Livewire\Booking;

use App\Models\Day;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Create extends Component
{
    public $today;
    public $month;
    public $selectedDay;
    public $selectedTime;

    public Service $service;
    public $allTimes;

    public function mount(Service $service): void
    {
        $this->today = today()->toImmutable();
        $this->month = $this->today->month;

        $this->service = $service;
        $this->allTimes = Day::all();
    }

    public function render()
    {
        return view('livewire.booking.create');
    }

    public function previousMonth(): void
    {
        $this->month--;
    }

    public function nextMonth(): void
    {
        $this->month++;
    }

    public function selectDay($date): void
    {
        $date = Carbon::parse($date);

        $this->month = $date->month;
        $this->selectedDay = $date;

        $this->selectedTime = null;
    }

    public function selectTime(Day $time): void
    {
        $this->selectedTime = $time;
    }

    public function goToDetails()
    {
        session()->put('service', $this->service);
        session()->put('selectedDataTime', $this->selectedDataTime);

        return to_route('bookings.details');
    }

    public function test(): void
    {
        dd($this->selectedDataTime);
    }

    #[Computed]
    public function weeks(): Collection
    {
        $startOfMonth = today()->month($this->month)->toImmutable()->startOfMonth();
        $endOfMonth = today()->month($this->month)->toImmutable()->endOfMonth();
        $startOfWeek = $startOfMonth->startOfWeek(Carbon::MONDAY);
        $endOfWeek = $endOfMonth->endOfWeek(Carbon::SUNDAY);

        return collect($startOfWeek->toPeriod($endOfWeek)->toArray())
            ->map(fn ($date) => [
                'date' => $date,
                'withinMonth' => $date->between($startOfMonth, $endOfMonth),
            ])
            ->chunk(7);
    }

    #[Computed]
    public function times(): Collection
    {
        if (!$this->allTimes) {
            return collect();
        }

        if (!$this->selectedDay) {
            return collect();
        }

        return $this->allTimes->where('name', $this->selectedDay->englishDayOfWeek);
    }

    #[Computed]
    public function selectedDataTime(): ?Carbon
    {
        if (!$this->selectedDay) {
            return null;
        }

        if (!$this->selectedTime) {
            return null;
        }

        return $this->selectedDay->setTimeFromTimeString($this->selectedTime->time);
    }
}
