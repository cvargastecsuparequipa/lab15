<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Categoria extends Eloquent

{
    use HasFactory;

    public function articulos()
    {
        return $this->hasMany(Articulo::class, 'categoria_id', '_id');
    }
}
