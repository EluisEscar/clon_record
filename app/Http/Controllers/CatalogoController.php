<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(Request $request)
    {
        $productos = Product::paginate(12);
        $totalProductos = Product::count();

        return view('catalogo.index', compact('productos', 'totalProductos'));
    }
}

