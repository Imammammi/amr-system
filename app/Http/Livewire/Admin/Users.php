<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public function render()
    {
        $this->users = User::all();
        return view('livewire.admin.users')->layout('layouts.admin-layout');
    }
}
