<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable=['empresa_nombre', 'empresa_tipo_de_industria', 'empresa_descripcion', 'empresa_correo_electronico', 'empresa_numero_de_telefono', 'empresa_direccion_de_sedes', 'empresa_requisitos_para_estudiantes_practicantes', 'empresa_area_de_pracicas', 'empresa_nombre_representante_encargado_de_PPP', 'empresa_cargo_representante_encargado_de_PPP', 'empresa_telefono_del_representante'];
    use HasFactory;
}
