<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Articulo extends Eloquent
{
    use HasFactory;
    protected $fillable = [
       'descripcion',
       'email'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id', '_id');
    }
}
