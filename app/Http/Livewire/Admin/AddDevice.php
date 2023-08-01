<?php

namespace App\Http\Livewire\Admin;

use App\Models\Device;
use Livewire\Component;

class AddDevice extends Component
{
    public $type, $manufacturer, $name, $interface, $authentication, $password, $media, $wait_time, $resend_count, $trace_level, $host_name, $port, $protocol;

    public function saveDevice()
    {
        $this->validate([
            'type' => ['required'],
            'manufacturer' => ['required'],
            'name' => ['required'],
            'interface' => ['required'],
            'authentication' => ['required'],
            'password' => ['required'],
            'media' => ['required'],
            'wait_time' => ['required'],
            'resend_count' => ['required'],
            'trace_level' => ['required'],
            'host_name' => ['required'],
            'port' => ['required'],
            'protocol' => ['required'],
        ]);

        Device::create([
            'type' => $this->type,
            'manufacturer' => $this->manufacturer,
            'name' => $this->name,
            'interface' => $this->interface,
            'authentication' => $this->authentication,
            'password' => $this->password,
            'media' => $this->media,
            'wait_time' => $this->wait_time,
            'resend_count' => $this->resend_count,
            'trace_level' => $this->trace_level,
            'host_name' => $this->host_name,
            'port' => $this->port,
            'protocol' => $this->protocol,
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
        return view('livewire.admin.add-device')->layout('layouts.admin-layout');
    }
}
