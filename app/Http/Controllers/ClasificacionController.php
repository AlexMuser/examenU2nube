<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clasificacion;

class ClasificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clasificaciones = Clasificacion::where('status', 1)->orderBy('id')->get();
        return view('Clasificacion.index')->with('clasificaciones', $clasificaciones);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clasificacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $datos['status'] = 1;
        Clasificacion::create($datos);
        return redirect('/clasificacion');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clasificacion = Clasificacion::find($id);
        return view('Clasificacion.read')->with('clasificacion', $clasificacion);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clasificacion = Clasificacion::find($id);
        return view('Clasificacion.edit')->with('clasificacion', $clasificacion);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $clasificacion = Clasificacion::find($id);
        $clasificacion->update($datos);
        return redirect('/clasificacion');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clasificacion = Clasificacion::find($id);
        $clasificacion->status = 0;
        $clasificacion->save();
        return redirect('/clasificacion');
    }
}