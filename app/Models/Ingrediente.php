<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Ingrediente extends Model
{
    use HasFactory;
    public function pizzas()
    {
        return $this->belongsToMany(Pizza::class,'pizzas_ingredientes','id_ingrediente','id_pizza');
    }
}
