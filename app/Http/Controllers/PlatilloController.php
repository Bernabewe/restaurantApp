<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Platillo;
use App\Models\Categoria;
use App\Models\Ingrediente;

class PlatilloController extends Controller
{
    public function ejemplo(){
        $platillo = PLatillo::with('ingredientes')->get();
        dd($platillo);
        
    }

    public function consultarPlatillos(){
        $platillos = Platillo::all();

        return view('menu', compact('platillos'));
    }
}
