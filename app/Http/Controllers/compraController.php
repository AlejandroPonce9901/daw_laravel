<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\compra;
use App\Models\user;
use App\Models\proveedor;
use App\Models\cProducto;

class compraController extends Controller
{
    
    public function index()
    {
        
        $tableCompra = compra::all();
        return view('compra.index', ["tableCompra" =>  $tableCompra ]);
    }

    
    public function create()
    {
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        return view('compra.create', [ 'tablecProductos' => $tablecProductos], ['tableProveedor' => $tableProveedor]);
    }

 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cproducto_id' => 'required|exists:cproducto,id',
            'id_proveedor' => 'required|exists:proveedor,id',
            'name' => 'required|min:2|max:100',
            'costo' => 'required|numeric|min:0',
            'fecha' => 'required',
            
        ]);

        $mCompra = new compra($request->all());
        $mCompra->save();
        Session::flash('message', 'Compra Registrada!');
        return Redirect::to('compra');
    }

  
    public function show($id)
    {
        $modelo = compra::find($id);
        return view('compra.show', ["modelo" => $modelo]);
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
