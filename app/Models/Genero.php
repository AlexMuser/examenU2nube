<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genero'; // Nombre de la tabla en la base de datos
    protected $fillable = ['nombre', 'status']; // Campos que se pueden llenar
}