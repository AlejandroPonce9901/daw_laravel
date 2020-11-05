<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\compra;
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
        $modelo = compra::find($id);
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        $tableProveedor = proveedor::orderBy('name')->get()->pluck('name','id');
        return view('compra.edit', ["modelo" => $modelo, 'tablecProductos' => $tablecProductos,'tableProveedor' => $tableProveedor]);
    
    }

   
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cproducto_id' => 'required|exists:cproducto,id',
            'id_proveedor' => 'required|exists:proveedor,id',
            'name' => 'required|min:2|max:100',
            'costo' => 'required|numeric|min:0',
            'fecha' => 'required',
            
        ]);

        $mCompra = compra::find($id);
        $mCompra->name       = $request->name;
        $mCompra->cproducto_id       = $request->cproducto_id;
        $mCompra->id_proveedor       = $request->id_proveedor;
        $mCompra->costo       = $request->costo;
        $mCompra->fecha       = $request->fecha;
        
        $mCompra->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Compra actualizada!');
        $tableCompra = compra::orderBy('name')->get()->pluck('name','id');
        return view('compra.show', ["modelo" => $mCompra, 'tableCompra' => $tableCompra]);
    }

   
    public function destroy($id)
    {
        $mCompra = compra::find($id);
        $mCompra->delete();

        Session::flash('message', 'Compra eliminada!');
        return Redirect::to('compra');
    }
}
