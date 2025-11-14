<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $productos = Product::paginate(12);
        $totalProductos = Product::count();

        $categorias = Category::with('subcategories')->get();

        return view('catalogo.index', compact('productos', 'totalProductos', 'categorias'));
    }
}
