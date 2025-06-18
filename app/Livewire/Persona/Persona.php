<?php

namespace App\Livewire\Persona;

use App\Models\Persona as ModelsPersona;
use Livewire\Component;
use Livewire\WithPagination;

class Persona extends Component
{
    use WithPagination;
    public $search;
    public $personas;
    public $personaId, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $dni, $telefono, $direccion, $sexo, $fecha_nacimiento;
    public $file;
    public function render()
    {
        //$personas = ModelsPersona::all();
        $listpersonas  = ModelsPersona::where('primer_nombre', 'like', '%'.$this->search.'%')->orderBy('id','DESC')->paginate(10);
        return view('livewire.persona.persona',['listpersonas' => $listpersonas]);
    }

    public function resetFields()
    {
        $this->personaId = null;
        $this->primer_nombre = '';
        $this->segundo_nombre = '';
        $this->primer_apellido = '';
        $this->segundo_apellido = '';
        $this->dni = '';
        $this->telefono = '';
        $this->direccion = '';
        $this->sexo = '';
        $this->fecha_nacimiento = '';
    }

    public function store()
    {
        $validatedDate  = $this->validate([
            'primer_nombre' => 'required',
            'segundo_nombre' => 'nullable',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'nullable',
            'dni' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'sexo' => 'required|in:M,F',
            'fecha_nacimiento' => 'required|date',
        ]);
        ModelsPersona::updateOrCreate(
            ['id' => $this->personaId],$validatedDate);

        $this->resetFields();
    }

    public function edit($id)
    {
        $p = ModelsPersona::findOrFail($id);
        $this->personaId = $p->id;
        $this->primer_nombre = $p->primer_nombre;
        $this->segundo_nombre = $p->segundo_nombre;
        $this->primer_apellido = $p->primer_apellido;
        $this->segundo_apellido = $p->segundo_apellido;
        $this->dni = $p->dni;
        $this->telefono = $p->telefono;
        $this->direccion = $p->direccion;
        $this->sexo = $p->sexo;
        $this->fecha_nacimiento = $p->fecha_nacimiento;
    }
    public function delete($id)
    {
        ModelsPersona::destroy($id );
    }

    
}
