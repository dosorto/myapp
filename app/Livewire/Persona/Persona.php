<?php

namespace App\Livewire\Persona;

use App\Models\Persona as ModelsPersona;
use Livewire\Component;

class Persona extends Component
{
    public $search;
    public function render()
    {
        //$personas = ModelsPersona::all();
        $personas  = ModelsPersona::where('primer_nombre', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(10);
        return view('livewire.persona.persona',['personas' => $personas]);
    }
}
