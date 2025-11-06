<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(Request $request)
    {
        try {
            $productos = Product::all();
            return view('catalogo', ['productos' => $productos]);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
