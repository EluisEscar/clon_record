<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'cod_producto',
        'cod_sku',
        'titulo',
        'precio_regular',
        'stock',
        'imagen_principal',
        'imagenes',
        'caracteristicas',
        'tipo_cocina',
        'modelo',
        'tamano',
        'capacidad',
        'especificaciones',
        'estado',
    ];

    // Casts automáticos para convertir arrays y JSON
    protected $casts = [
        'imagenes' => 'array',        // convierte TEXT[] en array PHP
        'especificaciones' => 'array' // convierte JSONB en array PHP
    ];
}
