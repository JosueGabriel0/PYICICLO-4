<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinadorpppep extends Model
{
    protected $fillable=['coord_ep', 'coord_codigo', 'coord_grado_academico', 'coord_especializacion', 'coord_cargo', 'coord_horario_disponibilidad', 'coord_funciones_especificas_de_rol'];
    use HasFactory;
}
