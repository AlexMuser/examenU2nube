<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;
use App\Models\Genero;
use App\Models\Clasificacion;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Peliculas::where('status', 1)->orderBy('id')->get();
        return view('Peliculas.index', compact('peliculas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::where('status', 1)->pluck('nombre', 'id');
        $clasificaciones = Clasificacion::where('status', 1)->pluck('nombre', 'id');
        return view('Peliculas.create', compact('generos', 'clasificaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->all();

        // Maneja la carga de archivos
        if ($request->hasFile('foto')) {
            $imagen = $request->file('foto');
            $nombreArchivo = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('uploads/peliculas'), $nombreArchivo);
            $datos['foto'] = $nombreArchivo;
        }

        $datos['status'] = 1;
        Peliculas::create($datos);
        return redirect('/peliculas');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelicula = Peliculas::find($id);
        return view('Peliculas.read', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelicula = Peliculas::find($id);
        $generos = Genero::where('status', 1)->pluck('nombre', 'id');
        $clasificaciones = Clasificacion::where('status', 1)->pluck('nombre', 'id');
        return view('Peliculas.edit', compact('pelicula', 'generos', 'clasificaciones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $pelicula = Peliculas::find($id);

        // Maneja la carga de archivos
        if ($request->hasFile('foto')) {
            $imagen = $request->file('foto');
            $nombreArchivo = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('uploads/peliculas'), $nombreArchivo);
            $datos['foto'] = $nombreArchivo;
        }

        $pelicula->update($datos);
        return redirect('/peliculas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelicula = Peliculas::find($id);
        $pelicula->status = 0;
        $pelicula->save();
        return redirect('/peliculas');
    }
}