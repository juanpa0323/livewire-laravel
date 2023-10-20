<?php

namespace App\Livewire\Peliculas;

use App\Models\Pelicula;
use Livewire\Component;

class Crear extends Component
{
    /**
     * Summary of pelicula
     * @var Pelicula
     */
    public Pelicula $pelicula;
    public $Nombre;
    public $Descripcion;
    
    public function mount()
    {
        $this->pelicula = new Pelicula();

    }
    

    protected function rules()
    {
        return [
            'Nombre' => 'required|max:50',
            'Descripcion' => 'required|max:100',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.peliculas.crear');
    }

    public function guardar()
    {
        $this->validate();
        $this->pelicula->save();
       


    }

}

