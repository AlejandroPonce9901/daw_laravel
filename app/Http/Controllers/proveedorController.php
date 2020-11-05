<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\proveedor;

class proveedorController extends Controller
{
  
    public function index()
    {
        $tableProveedor = proveedor::all();
        return view('proveedor.index', ["tableProveedor" =>  $tableProveedor ]);
    }


    public function create()
    {
        return view('proveedor.create',[ ]);
        
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'apellidoPa' => 'required|min:2|max:10',
            'apellidoMa' => 'required|min:2|max:10',
            'empresa' => 'required|min:2|max:10',
            'telefono' => 'required',
            'rfc' => 'required|min:2|max:10',
            'email' => 'required|email',           
            
        ]);

        $mProveedor = new proveedor();
        $mProveedor->fill($request->all());
        $mProveedor->save();

        Session::flash('message', 'Nuevo Proveedor Registrado!');
        return Redirect::to('proveedor');
    }


    public function show($id)
    {
        $modelo = proveedor::find($id);
        return view('proveedor.show', ["modelo" => $modelo]);
    }


    public function edit($id)
    {
        $modelo = proveedor::find($id);
        return view('proveedor.edit', ["modelo" => $modelo]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'apellidoPa' => 'required|min:2|max:10',
            'apellidoMa' => 'required|min:2|max:10',
            'empresa' => 'required|min:2|max:10',
            'telefono' => 'required',
            'rfc' => 'required|min:2|max:10',
            'email' => 'required|email',           
            
        ]);

        $mProveedor = proveedor::find($id);
        $mProveedor->name       = $request->name;
        $mProveedor->apellidoPa       = $request->apellidoPa;
        $mProveedor->apellidoMa       = $request->apellidoMa;
        $mProveedor->telefono       = $request->telefono;
        $mProveedor->empresa       = $request->empresa;
        $mProveedor->rfc       = $request->rfc;
        $mProveedor->email      = $request->email;
        $mProveedor->updated_at = date('Y-m-d H:i:s');
        $mProveedor->save();
        Session::flash('message', 'Proveedor Actualizado!');
        $modelo = proveedor::find($id);
        return view('proveedor.show', ["modelo" => $modelo]);
    }

    


    public function destroy($id)
    {
        $mProveedor = proveedor::find($id);
        $mProveedor->delete();
        Session::flash('message', 'Proveedor mandado a chingar a su madre!');
        return Redirect::to('proveedor');
    }
}
