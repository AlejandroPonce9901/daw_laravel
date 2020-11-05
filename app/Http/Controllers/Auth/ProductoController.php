<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\cProducto;
use App\Models\compra;

class ProductoController extends Controller
{
    public function index(){

        $tableUsers = DB::table('producto')
        ->join('cproducto', 'producto.cproducto_id', '=', 'cproducto.id')
        ->select('producto.*', 'cproducto.nombre as categoria_producto')
        ->get();

        return view('productos.index', ["tableProductos" =>  $tableUsers ]);
    }

    public function create()
    {
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        $tableCompra = compra::orderBy('id')->get()->pluck('id', 'id');
        return view('productos.create',[ 'tablecProductos' => $tablecProductos, 'tableCompra' => $tableCompra]);
    }

    public function store(Request $request)
    {

        // De forma automática regresa a la pantalla de origen creando una variable llamada $errors
        // la cual contiene las validaciones realizadas
        $validatedData = $request->validate([
            'nombre' => 'required|min:1|max:100',
            'cproducto_id' => 'required|exists:cproducto,id',
            'id_compra' => 'required',
            'descripcion' => 'required|min:1|max:200',
            'precio' => 'required|numeric|min:0',
            'marca' => 'required|min:1|max:100',
            'modelo' => 'required|min:1|max:100',
            'venta' => 'required',
            
            
        ]);
 
        $mProducto = new Producto($request->all());
        $mProducto->save();

        // Regresa a lista de productos
        Session::flash('message', 'Producto creado!');
        return Redirect::to('productos');
    }

    public function show($id)
    {
        $modelo = Producto::find($id);
        return view('productos.show', ["modelo" => $modelo]);
    }

    public function edit($id)
    {
        $modelo = Producto::find($id);
        $tablecProductos = cProducto::orderBy('nombre')->get()->pluck('nombre','id');
        $tableCompra = compra::orderBy('id')->get()->pluck('id', 'id');
        return view('productos.edit', ["modelo" => $modelo, 'tablecProductos' => $tablecProductos,'tableCompra' => $tableCompra]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:1|max:100',
            'cproducto_id' => 'required|exists:cproducto,id',
            'id_compra' => 'required|exists:compra,id',
            'descripcion' => 'required|min:1|max:200',
            'precio' => 'required|numeric|min:0',
            'marca' => 'required|min:1|max:100',
            'modelo' => 'required|min:1|max:100',
            'venta' => 'required',
            

    
            
        ]);

        $mProducto = Producto::find($id);
        $mProducto->nombre       = $request->nombre;
        $mProducto->cproducto_id       = $request->cproducto_id;
        $mProducto->id_compra       = $request->id_compra;
        $mProducto->descripcion       = $request->descripcion;
        $mProducto->precio       = $request->precio;
        $mProducto->marca       = $request->marca;
        $mProducto->modelo       = $request->modelo;
        $mProducto->venta       = $request->venta;


        $mProducto->save();

        Session::flash('message', 'Producto actualizado!');
        return Redirect::to('productos');
        
    }

    public function destroy($id)
    {
        $mProducto = Producto::find($id);
        $mProducto->delete();
        Session::flash('message', 'Producto eliminado!');
        return Redirect::to('productos');
    }

}
