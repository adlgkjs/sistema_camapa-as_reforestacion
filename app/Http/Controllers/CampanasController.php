<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campana;
use Illuminate\Support\Facades\Auth;

class CampanasController extends Controller
{
    public function index()
    {
        $campanas = Campana::all();
        return response()->json($campanas);
        // return view('campanas.index', compact('campanas'));
    }

    public function ultimasCampanas()
    {
        $campanas = Campana::latest()->take(3)->get();
        return view('inicio', compact('campanas'));
    }

    public function create() {}

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'descripcion' => 'nullable',
            'ubicacion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
        ]);
        $campana = new Campana();

        $campana->fill($validatedData);
        $campana->id_user = Auth::id();
        $campana->save();

        return response()->json([
            'success' => true,
            'message' => 'Campaña creada con exito'
        ]);
    }

    public function show(string $id)
    {
        $campana = Campana::findOrFail($id);
        return response()->json($campana);

        //return view('campanas.show', compact('campana'));
    }

    public function edit(string $id) {}

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'descripcion' => 'nullable',
            'ubicacion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
        ]);

        $campana = Campana::findOrFail($id);
        $campana->fill($validatedData);
        $campana->save();

        return redirect()->route('campanas.index')->with('success', 'Campaña actualizada correctamente.');
    }

    public function destroy(string $id)
    {
        $campana = Campana::findOrFail($id);
        $campana->delete();
        return redirect()->route('campanas.index')->with('success', 'Campaña eliminada correctamente.');
    }
}
