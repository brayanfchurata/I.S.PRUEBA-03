<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        $Bus = Bus::all();
        return Inertia::render('Bus/Index', compact('Bus'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Bus/FormularioBus');
    }

    /**
     * Store a newly created Sresource in storage.
     */
    public function store(Request $request)
{
    // Validar los datos de la solicitud
    $data = $request->validate([
        'placa' => 'required|string',   // Campo requerido como texto
        'Marca' => 'required|string',   // Campo requerido como texto
        'Modelo' => 'required|string',  // Campo requerido como texto
        'Capacidad' => 'required|integer|min:1' // Entero positivo mínimo de 1
    ]);

    // Crear el registro en la base de datos
    Bus::create($data);

    return to_route('Bus.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bus $bus)
    {
        //
    }
}
