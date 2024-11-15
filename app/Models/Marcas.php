<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marcas extends Model
{
    use HasFactory;
    protected $table = 'marcas';// Nombre de la tabla
    protected $fillable = ['id', 'nombre']; 
}
