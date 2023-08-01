<?php

namespace App\Http\Livewire\Admin;

use App\Models\Device;
use Livewire\Component;

class Devices extends Component
{
    public function render()
    {
        $this->devices = Device::all();
        return view('livewire.admin.devices')->layout('layouts.admin-layout');
    }
}
