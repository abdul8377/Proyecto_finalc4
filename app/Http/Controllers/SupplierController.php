<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupplierController extends Controller
{
    public function index()
    {
        $suppilers = Supplier::all();
        return response()->json($suppilers, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $suppiler = Supplier::create($request->all());
        return response()->json([
            'message' => "Registro creado satisfactoriamente",
            'employee' => $suppiler
        ], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $suppiler = Supplier::find($id);
        $suppiler->update($request->only('name', 'contact', 'phone', 'email')); // Ajusta los campos según tu modelo Employee
        return response()->json([
            'message' => "Registro actualizado satisfactoriamente",
            'employee' => $suppiler
        ], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $suppiler = Supplier::find($id);
        $suppiler->delete();
        return response()->json([
            'message' => "Registro eliminado satisfactoriamente"
        ], Response::HTTP_OK);
    }
}
