<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contactos;

class contactosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tablecontactos = contactos::all();
        return view('contactos.index', ["tablecontactos" =>  $tablecontactos ]); 

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('contactos.create',[ ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'asunto' => 'required|min:2|max:100',
            'mensaje' => 'required|min:2|max:500',  
            'email' => 'required|email',           
            
        ]);

        $mcontactos = new contactos();
        $mcontactos->fill($request->all());
        $mcontactos->save();

         $validatedData = $request->validate([
            'nombre' => 'required|min:2|max:100',
            'status' => 'required|numeric|min:0',

        ]);
 
        $mcontactos = new contactos($request->all());
        if($request->status){
            $mcontactos->status = true; 
        } else {
            $mcontactos->status = false;
        }

        $mcontactos->save();

        Session::flash('message', 'Nuevo mensaje registrado');
        return Redirect::to('contactos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($id)
    {
        $modelo = contactos::find($id);
        return view('contactos.show', ["modelo" => $modelo]);
    }


    public function edit($id)
    {
        $modelo = contactos::find($id);
        return view('contactos.edit', ["modelo" => $modelo]);
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
        $validatedData = $request->validate([
            'name' => 'required|min:2|max:25',
            'asunto' => 'required|min:5|max:150',
            'mensaje' => 'required|min:5|max:150',
            'email' => 'required|email', 
            'status' => 'required|numeric|min:0',          
            
        ]);   

        $mcontactos = contactos::find($id);
        $mcontactos->fill($request->all());
        if($request->status){
            $mcontactos->status = true; 
        } else {
            $mcontactos->status = false;
        }

        $mcontactos->save(); 

          $mcontactos = contactos::find($id);
        $mcontactos->name       = $request->name;
        $mcontactos->asunto       = $request->asunto;
        $mcontactos->mensaje       = $request->mensaje;
        $mcontactos->email      = $request->email;
        $mcontactos->updated_at = date('Y-m-d H:i:s');
        $mcontactos->save();
        Session::flash('message', 'mensaje Actualizado!');
        $modelo = contactos::find($id);
        return view('contactos.show', ["modelo" => $modelo]);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mcontactos = contactos::find($id);
        $mcontactos->delete();
        Session::flash('message', 'Proveedor mandado a chingar a su madre!');
        return Redirect::to('contactos');    }
}
