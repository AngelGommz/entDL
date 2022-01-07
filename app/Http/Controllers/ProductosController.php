<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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

    public function validate_pws(Request $credenciales){
        // $s_usuario = new User();

        // $d_usuario = User::where('email', $credenciales->usuario);

        // return $d_usuario;
        $c_prod = Product::paginate();
        return view('productos.index', compact('c_prod')); 
    }
}
