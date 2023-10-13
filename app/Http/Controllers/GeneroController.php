<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Genero::where('status', 1)->orderBy('id')->get();
        return view('Genero.index')->with('generos', $generos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Genero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        $datos['status'] = 1;
        Genero::create($datos);
        return redirect('/genero');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genero = Genero::find($id);
        return view('Genero.read')->with('genero', $genero);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genero = Genero::find($id);
        return view('Genero.edit')->with('genero', $genero);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datos = $request->all();
        $genero = Genero::find($id);
        $genero->update($datos);
        return redirect('/genero');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genero = Genero::find($id);
        $genero->status = 0;
        $genero->save();
        return redirect('/genero');
    }
}