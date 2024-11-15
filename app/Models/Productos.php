<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Productos extends Model
{
    use HasFactory;
    protected $table = 'producto'; // Nombre de la tabla
    protected $fillable = ['id', 'nombre', 'precio', 'fk_marca', 'fk_categoria'];

    public function categoria():HasOne {
        return $this->hasOne(Categorias::class,"id","fk_categoria");
    }

    public function marca():HasOne {
        return $this->hasOne(Marcas::class,"id","fk_marca");
    }
}
