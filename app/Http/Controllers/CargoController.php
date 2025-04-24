<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Empleado;
use Illuminate\Http\Request;

class CargoController extends Controller
{

    public function index()
    {
        return Cargo::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255'
        ]);
    }


    public function show(string $id)
    {
        return Cargo::findOrFail($id);
    }


    public function update(Request $request, string $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->update($request->all());
        return $cargo;
    }


    public function destroy($id)
    {
        $empleado = Empleado::FindOrFail($id);
        $empleado->delete();
        return response()->json(['mensaje' => 'Empleado eliminado']);
    }
}
