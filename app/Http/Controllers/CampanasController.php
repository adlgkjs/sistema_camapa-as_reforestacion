<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campana;
use App\Models\Inscripcion;
use Illuminate\Support\Facades\Auth;

class CampanasController extends Controller
{
    public function index()
    {
        $campanas = Campana::orderBy('fecha', 'asc')->get();
        return view('campañas', compact('campanas'));
    }

    public function ultimasCampanas()
    {
        $campanas = Campana::latest()->take(3)->get();
        return view('inicio', compact('campanas'));
    }

    public function show(string $id)
    {
        $campana = Campana::findOrFail($id);
        $personas = Inscripcion::where('id_campana', $id)->get();

        return view('detalleCampana', compact('campana', 'personas'));
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
