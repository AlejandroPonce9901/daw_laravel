<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\venta;
use App\Models\producto;
use App\Models\clientes;


class ventaController extends Controller
{
    
    
    public function index()
    {
        $tableVenta = venta::all();
        return view('venta.index', ["tableVenta" =>  $tableVenta ]);
    }

   
    public function create()
    {
        $tableClientes = clientes::orderBy('id')->get()->pluck('id','id');
        $tableProducto = Producto::orderBy('id')->get()->pluck('id','id');
        return view('venta.create', [ 'tableClientes' => $tableClientes], ['tableProducto' => $tableProducto]);
    
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_clientes' => 'required|exists:clientes,id',
            'id_producto' => 'required|exists:Producto,id',
            'costo' => 'required|numeric|min:0',
            'fecha' => 'required',
            
        ]);

        $mVenta = new venta($request->all());
        $mVenta->save();
        Session::flash('message', 'Venta Registrada!');
        return Redirect::to('venta');
    }
    

  
    public function show($id)
    {
        $modelo = venta::find($id);
        return view('venta.show', ["modelo" => $modelo]);
    }

   
    public function edit($id)
    {
        $modelo = venta::find($id);
        $tableClientes = clientes::orderBy('id')->get()->pluck('id','id');
        $tableProducto = Producto::orderBy('id')->get()->pluck('id','id');
        return view('venta.edit', ["modelo" => $modelo, 'tableClientes' => $tableClientes,'tableProducto' => $tableProducto]);
    
    }

    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_clientes' => 'required|exists:clientes,id',
            'id_producto' => 'required|exists:Producto,id',
            'costo' => 'required|numeric|min:0',
            'fecha' => 'required',
            
        ]);

        $mVenta = venta::find($id);
        $mVenta->id_clientes       = $request->id_clientes;
        $mVenta->id_producto       = $request->id_producto;
        $mVenta->costo       = $request->costo;
        $mVenta->fecha       = $request->fecha;
        
        $mVenta->save();

        // Regresa a lista de usuario
        Session::flash('message', 'venta actualizada!');
        $tableVenta = venta::orderBy('name')->get()->pluck('name','id');
        return view('venta.show', ["modelo" => $mVenta, 'tableVenta' => $tableVenta]);
    }

 
    public function destroy($id)
    {
        $mVenta = venta::find($id);
        $mVenta->delete();

        Session::flash('message', 'Venta eliminada!');
        return Redirect::to('venta');
    }
}
