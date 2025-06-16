<?php

namespace App\Livewire;

use App\Models\Persona as ModelsPersona;
use Livewire\Component;

class Persona extends Component
{
    public function render()
    {
        $personas = ModelsPersona::all();
        return view('livewire.persona',['personas' => $personas]);
    }
}
