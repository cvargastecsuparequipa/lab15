<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class PizzaIngrediente extends Model
{
    use HasFactory;
    protected $table = 'pizzas_ingredientes';

    public function ingredientes()
    {
        return $this->hasMany(Ingrediente::class, '_id', 'ingrediente_id');
    }
}
