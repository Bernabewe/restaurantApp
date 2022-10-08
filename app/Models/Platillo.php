<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Platillo extends Model
{
    use HasFactory;

    protected $table = 'platillos';
    
    protected $fillable =['categoria_id', 'nombre', 'precio'];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
    public function Ingredientes() {
        return $this->belongsToMany(Ingrediente::class, 'platillo_ingredientes');
    }
}
