<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'nombre'
    ];

    // Relación: una categoría tiene muchas subcategorías
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    // Relación: una categoría tiene muchos productos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
