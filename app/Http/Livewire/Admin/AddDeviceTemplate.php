<?php

namespace App\Http\Livewire\Admin;

use App\Models\DeviceTemplate;
use Livewire\Component;

class AddDeviceTemplate extends Component
{
    public $name, $wait_time, $resend_count;

    public function saveDeviceTemplate()
    {
        $this->validate([
            'name' => ['required'],
            'wait_time'  => ['required'],
            'resend_count'  => ['required'],
        ]);

        DeviceTemplate::create([
            'name'        => $this->name,
            'wait_time'         => $this->wait_time,
            'resend_count'         => $this->resend_count,
            'created_by'   => 1,
        ]);

        $this->emit('created', [
            'name'        => 'Added successfully!',
            'icon'         => 'success',
            'iconColor'    => 'green',
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.add-device-template')->layout('layouts.admin-layout');
    }
}
