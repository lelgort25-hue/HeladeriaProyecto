<?php

namespace App\Http\Controllers;

class HeladeriaController extends Controller
{
    public function index()
    {
        $nombreHeladeria = 'Heladería Dulce Sabor';
        $administrador = 'Santiago Concha';
        $ciudad = 'Pasto';
        $edad = 17;
        $dia = 'martes';

        $sabores = [
            ['nombre' => 'Vainilla', 'precio' => 1500, 'imagen' => 'vainilla.jpg'],
            ['nombre' => 'Chocolate', 'precio' => 1700, 'imagen' => 'chocolate.jpg'],
            ['nombre' => 'Fresa', 'precio' => 1600, 'imagen' => 'fresa.jpg'],
            ['nombre' => 'Oreo', 'precio' => 1800, 'imagen' => 'oreo.jpg'],
        ];

        return view('heladeria', compact(
            'nombreHeladeria',
            'administrador',
            'ciudad',
            'edad',
            'dia',
            'sabores'
        ));
    }
}