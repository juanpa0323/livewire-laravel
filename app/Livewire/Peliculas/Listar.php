<?php

namespace App\Livewire\Peliculas;

use Livewire\Component;
use App\Models\Pelicula;

class Listar extends Component
{
    public function render()
    {
        $peliculas = Pelicula::all();
        return view('livewire.peliculas.listar', [
            'peliculas' => $peliculas
        ])
            ->extends('layouts.app')
            ->section('contenido');
    }
}
