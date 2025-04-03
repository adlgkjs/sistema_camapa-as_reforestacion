<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // Log::info('Datos del formulario recibidos:', $request->all());
        $validatedData = $request->validate([
            'id_campana' => 'required',
            'nombre' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
        ]);

        $inscripcion = new Inscripcion();
        $inscripcion->fill($validatedData);
        $inscripcion->save();

        return response()->json([
            'success' => true,
            'message' => 'Campaña creada con éxito'
        ], 200);    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
