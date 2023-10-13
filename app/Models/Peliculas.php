<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peliculas extends Model
{
    protected $table = 'peliculas';
    protected $fillable = ['titulo', 'foto', 'id_genero', 'id_clasific', 'status'];

    // Relación uno a uno con la tabla Genero
    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id');
    }

    // Relación uno a uno con la tabla Clasificacion
    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::class, 'id_clasific', 'id');
    }
}