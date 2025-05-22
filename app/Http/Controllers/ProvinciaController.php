<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource. Se usa para listar
    
     */
    public function index()
    {
      //  $provincias = Provincia::all(); //SELECT * FROM provincias;
        $provincias = Provincia::select('id','nombre')->get();

      //  $provinciasMapeadas = $provincias->map(function($provincia){
      //      return [
      //          'id'=>$provincia->id,
      //          'nombre'=>$provincia->nombre,
      //      ];
      //  });
        return response()->json($provincias); //Retorna los parametros en tipo Json
        //y de resultado me traerá todo lo de provincias
    }

    /**
     * Show the form for creating a new resource. Se usa para mostrar un formulario por HTML
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. Funcion por defecto para guardar datos en la BD
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. Mostrar un registro especifico
     */
    public function show(Provincia $provincia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. Mostrar formulario de edicion
     */
    public function edit(Provincia $provincia)
    {
        //
    }

    /**
     * Update the specified resource in storage. Actualizar registro
     */
    public function update(Request $request, Provincia $provincia)
    {
        //
    }

    /**
     * Remove the specified resource from storage. Para eliminarlo
     */
    public function destroy(Provincia $provincia)
    {
        //
    }
}
