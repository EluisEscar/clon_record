<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';

    protected $fillable = [
        'category_id',
        'nombre',
    ];

    // Subcategoría pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Subcategoría puede tener muchos productos
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
