<?php

namespace App\Livewire\Navbar;

use Livewire\Component;

class Navbar extends Component
{
    public function render()
    {
        //$permisos = $user->permission;
        return view('livewire.navbar.navbar');
    }
}
