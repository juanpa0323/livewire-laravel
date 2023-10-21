<?php

namespace App\Livewire\Peliculas;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Pelicula;

class Listar extends Component
{
    //protected $listeners = ['render' => 'render'];

    #[On('refresh')]
     #[Layout('layouts.app')]
    public function render()
    {
        $peliculas = Pelicula::all();
        return view('livewire.peliculas.listar', [
            'peliculas' => $peliculas,
        ])->extends('components.layouts.app');
    }
}
