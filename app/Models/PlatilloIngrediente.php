<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatilloIngrediente extends Model
{
    use HasFactory;

    protected $table = 'platillo_ingredientes';

    protected $fillable = ['platillo_id', 'ingrediente_id'];
}
