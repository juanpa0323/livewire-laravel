<?php

namespace App\Livewire\Peliculas;

use App\Models\Pelicula;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Crear extends Component
{

    public Pelicula $movie;

    public function mount()
    {
        $this->movie = new Pelicula();
    }

    public function rules()
    {
        return [
            'movie.Nombre' => 'required|max:50|unique:movies,Nombre',
            'movie.Descripcion' => 'required|max:100',
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

    public function save()
    {
        $this->validate();
        $this->movie->save();
        $this->dispatch('refresh');
    }
}
