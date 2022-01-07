<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {   
        $c_prod = Product::paginate();
        return view('productos.index', compact('c_prod'));        
    }

    public function create()
    {
        return view('productos.create');
    }

    public function show($producto)
    {
        return view('productos.show', compact('producto'));
    }
}
