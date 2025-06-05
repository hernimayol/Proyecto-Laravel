<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTiketRequest;
use App\Models\Tiket;
use App\Models\Provincia;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$tikets = Tiket::all();
        $tikets = Tiket::with('provincia')->get();
        
        $tikets = $tikets->map(function($tiket){
            return [
                'id'=>$tiket->id,
                'nombre'=>$tiket->nombre,
                $tiket->provincia->nombre
                //'provincia'=> [
                //    'id'=>$tiket->provincia->id,
                //    'nombre'->$tiket->provincia->nombre
            ];
                //
            
        });

        return response()->json($tikets);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTiketRequest $request)
    {
        $tiket = Tiket::create([
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
        //    'estado'=>$request->estado,
            'provincia_id'=>$request->provincia_id,
        //    'usuario_id'=>$request->usuario_id,
        ]);
        return response()->json($tiket);
    }

    /**
     * Show muestra un archivo.
     */
    public function show(int $id)
    {
        $tiket = Tiket::find($id); //Genera una excepcion, busca un solo registro
        return response()->json($tiket);
    }

    /**
     * Edit edita un archivo.
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update actualiza un archivo.
     */
    public function update(Request $request, int $id)
    {
        $tiket = Tiket::find($id);
       // dd($request->titulo); //Es como una opcion de mostrar la variable
        $tiket->titulo = $request->titulo; //
        $tiket->descripcion = $request->descripcion;
        $tiket->provincia_id = $request->provincia_id;
        $tiket->save();
        return response()->json($tiket);
    }

    /**
     * Destroy destruye/elimina un archivo.
     */
    public function destroy(int $id)
    {
        $tiket = Tiket::find($id);
        $tiket->delete();
    }

}
