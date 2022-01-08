<?php

namespace App\Http\Controllers;

use App\Models\DB_Products;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){   
        $c_prod = DB_Products::where('deleted_at', NULL)->orderby('id','desc')->paginate();
        return view('productos.index', compact('c_prod'));        
    }

    public function create(Request $d_alt){
        // return $d_alt;

        $d_alt->validate([
            'frmalt_name' => 'required',
            'frmalt_price' => 'required',
            'frmalt_qty' => 'required',
        ]);

        $r_alt = new DB_Products();

        $r_alt->name = $d_alt->frmalt_name;
        $r_alt->price = $d_alt->frmalt_price;
        $r_alt->qty = $d_alt->frmalt_qty;

        $r_alt->save();

        return redirect()->route('u_prod.index'); 
    }

    public function update(Request $f_upd){
        // return $f_upd;
        $f_upd->validate([
            'frm_name' => 'required',
            'frm_price' => 'required',
            'frm_qty' => 'required',
        ]);

        $r_prod = DB_Products::find($f_upd->frm_id);

        $r_prod->name = $f_upd->frm_name;
        $r_prod->price = $f_upd->frm_price;
        $r_prod->qty = $f_upd->frm_qty;

        $r_prod->save();

        return redirect()->route('u_prod.index'); 
    }

    public function validate_pws(Request $credenciales){
        // $s_usuario = new User();

        // $d_usuario = User::where('email', $credenciales->usuario);

        // return $d_usuario;
        $c_prod = DB_Products::paginate();
        return view('productos.index', compact('c_prod')); 
    }
}
