<?php

namespace App\Http\Controllers;
use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\proveedor;

class proveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        $mProveedor->password = bcrypt($mUser->password);
        $mProveedor->save();

        Session::flash('message', 'Nuevo Proveedor Registrado!');
        return Redirect::to('proveedor');
    }

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
