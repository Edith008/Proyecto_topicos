<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Http\Requests\StoreEventoRequest;
use App\Http\Requests\UpdateEventoRequest;
use Illuminate\Http\Request;


class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Evento = Evento::all();
        return view('eventos.index')->with('eventos',$Evento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $evento = new Evento();
        $evento->Nombre = $request->Nombre;
        $evento->Descripcion = $request->Descripcion;
        $evento->Estado = $request->Estado;
        $evento->Categoria = $request->Categoria;

        $evento->save(); */


        $evento = new Evento();
        $evento->Nombre = $request->get('Nombre');
        $evento->Descripcion = $request->get('Descripcion');
        $evento->Estado = $request->get('Estado');
        $evento->Categoria = $request->get('Categoria');

        $evento->save();
        
        return redirect('/evento');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Evento = Evento::find($id);
        return view('eventos.edit')->with('Evento',$Evento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $evento = Evento::find($id);

        $evento->Nombre = $request->get('Nombre');
        $evento->Descripcion = $request->get('Descripcion');
        $evento->Estado = $request->get('Estado');
        $evento->Categoria = $request->get('Categoria');

        $evento->save();
        
        return redirect('/evento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect('/evento');
    }
}
