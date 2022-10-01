<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;

class PlatilloController extends Controller
{
    public function ejemplo(){

        $nombre = 'Bernardo Bejarano';
        $numeros = [22,34,54,45,57,87,23,68];
        $peliculas = ['peli1', 'peli2', 'peli3', 'peli4'];
        return view('ejemplo', compact('nombre', 'numeros', 'peliculas'));
    }

    public function consultarPlatillos(){
        $platillos = Platillo::all();

        return view('menu', compact('platillos'));
    }
}
