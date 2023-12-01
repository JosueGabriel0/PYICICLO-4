<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convocatoriappp extends Model
{
    protected $fillable=['convocatoria_nombre_empresa', 'convocatoria_descripcion', 'convocatoria_fecha_inicio', 'convocatoria_fecha_fin', 'convocatoria_contacto', 'convocatoria_informacion_empresa', 'convocatoria_requisitos_elegibilidad', 'convocatoria_remuneracion_empresa', 'convocatoria_tipo_moneda', 'convocatoria_remuneracion_empresa_monto', 'convocatoria_link_pagina_politicas_confidenciabilidad', 'convocatoria_beneficios_empresa', 'convocatoria_ubicacion_empresa', 'convocatoria_documentos_requeridos', 'convocatoria_imagen_convocatoria', 'empresa_id'];
    use HasFactory;
}
