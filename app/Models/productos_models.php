<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos_models extends Model
{



    protected $table = 'productos'; // nombre de la tabla de la base de datos

    protected $fillable = [
   
        'nombre',
        'precio',
        'descrpcion',
    ];
    use HasFactory;
}
