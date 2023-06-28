<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibroConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro = Libro::all();
        return response()->json($libro,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newlibro = new Libro([
            'titulo'=> $request->get('titulo'),
            'isbn'=> $request->get('isbn')
        ]);
        $newlibro->save();
        return response()->json($newlibro,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showlibro = Libro::find($id);
        return response()->json($showlibro,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $uplibro = Libro::find($id);
        $uplibro->titulo=$request->get('titulo');
        $uplibro->isbn=$request->get('isbn');
        $uplibro->save();
        return response()->json($uplibro,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destroylibro = Libro::find($id);
        $destroylibro->delete();
        return response()->json($destroylibro,200);
    }
}
