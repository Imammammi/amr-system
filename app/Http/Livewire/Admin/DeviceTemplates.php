<?php

namespace App\Http\Livewire\Admin;

use App\Models\DeviceTemplate;
use Livewire\Component;

class DeviceTemplates extends Component
{
    public function render()
    {
        $this->device_templates = DeviceTemplate::all();

        return view('livewire.admin.device-templates')->layout('layouts.admin-layout');
    }
}
