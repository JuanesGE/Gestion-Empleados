<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;


class EmpleadoController extends Controller
{

    public function index()
    {
        return Empleado::with('cargo', 'pagos')->get();
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email',
            'estado'=> 'required|boolean',
            'cargo_id' =>'required|exist:cargos,id',
        ]);
    }


    public function show(string $id)
    {
        return Empleado::whit('cargo', 'pagos')->findOrFail($id);
    }


    public function update(Request $request, string $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->update($request->all());
        return $empleado;
    }


    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->delete();
        return response()->json(['mensaje' => 'Empleado eliminado']);
    }
}
