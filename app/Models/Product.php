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
        'category_id',       
        'subcategory_id',    
    ];

    // Casts automáticos para convertir arrays y JSON
    protected $casts = [
        'imagenes' => 'array',         // TEXT[] → array PHP
        'especificaciones' => 'array', // JSONB → array PHP
    ];

    // Un producto pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un producto pertenece a una subcategoría
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}
