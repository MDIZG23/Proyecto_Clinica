<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'nombre_de_tu_tabla'; 
    protected $primaryKey = 'ID_PRODUCTO'; 

    protected $fillable = [
        'NOM_PRODUCTO',
        'DES_PRODUCTO',
        'PRECIO',
        'ID_CATEGORIA',
        'ID_ESTADO',
    ];

   
}
