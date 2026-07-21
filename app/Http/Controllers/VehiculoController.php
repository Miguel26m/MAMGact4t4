<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Http\Resources\VehiculoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehiculoController extends Controller
{
    // a) GET para listar (con paginación)
    public function index()
    {
        $vehiculos = Vehiculo::paginate(10); 
        return VehiculoResource::collection($vehiculos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer',
            'color' => 'required|string',
            'precio' => 'required|numeric'
        ]);

        $vehiculo = Vehiculo::create($request->all());

        return new VehiculoResource($vehiculo);
    }

    public function show(Vehiculo $vehiculo)
    {
        return new VehiculoResource($vehiculo);
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'marca' => 'sometimes|required|string|max:255',
            'modelo' => 'sometimes|required|string|max:255',
            'anio' => 'sometimes|required|integer',
            'color' => 'sometimes|required|string',
            'precio' => 'sometimes|required|numeric'
        ]);

        $vehiculo->update($request->all());

        return new VehiculoResource($vehiculo);
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();

        return response()->json([
            'message' => 'Vehículo eliminado correctamente'
        ], 200);
    }
}
