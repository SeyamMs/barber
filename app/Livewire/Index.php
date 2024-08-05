<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public $services;

    public function mount(): void
    {
        $this->services = Service::all();
    }

    public function render()
    {
        return view('livewire.index');
    }
}
