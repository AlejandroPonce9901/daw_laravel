<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;
use App\Models\cProducto;

class cproductoController extends Controller
{
    
    public function index() {
        
        $tableCproducto = cproducto::all();
        return view('cproducto.index', ["tableCproducto" =>  $tableCproducto ]);
     } // Tabla de Registros

    public function create(){ 
        return view('cproducto.create',[ ]);
    }// Formulario de Registros
    public function store(Request $request){

        // De forma automática regresa a la pantalla de origen creando una variable llamada $errors
        // la cual contiene las validaciones realizadas
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'status' => 'required|numeric|min:0',

        ]);
 
        $mCproducto = new cproducto($request->all());
        if($request->status){
            $mCproducto->status = true; 
        } else {
            $mcProducto->status = false;
        }

        $mCproducto->save();

        // Regresa a lista de productos
        Session::flash('message', 'Categoría de Producto Creado');
        return Redirect::to('cproducto');

     } //Guardar la informació

    public function show($id){
        $modelo = cproducto::find($id);
        return view('cproducto.show', ["modelo" => $modelo]);
     } //Mostrar eldetalle

    public function edit($id){ 
        $modelo = cproducto::find($id);
        return view('cproducto.edit', ["modelo" => $modelo]);

    } //Mostrar el formulaio de actualización

    public function update(Request $request, $id){ 
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'status' => 'required|numeric|min:0',
        ]);

        $mCproducto = cproducto::find($id);
        $mCproducto->fill($request->all());
        if($request->status){
            $mProducto->status = true; 
        } else {
            $mProducto->status = false;
        }

        $mCproducto->save();

        Session::flash('message', 'Categoría de Producto Actualizado!');
        return Redirect::to('cproducto');
    } //Actualizar la información
    public function destroy($id){
        $mCproducto = cproducto::find($id);
        $mCproducto->delete();
        Session::flash('message', 'Categoría de Producto Eliminado!');
        return Redirect::to('cproducto');
     } //Eliminar
}
