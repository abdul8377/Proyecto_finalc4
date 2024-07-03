<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return response()->json($employees, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $employee = Employee::create($request->all());
        return response()->json([
            'message' => "Registro creado satisfactoriamente",
            'employee' => $employee
        ], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update($request->only('name','lasname', 'dni', 'phone', 'email', 'brithdate')); // Ajusta los campos según tu modelo Employee
        return response()->json([
            'message' => "Registro actualizado satisfactoriamente",
            'employee' => $employee
        ], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return response()->json([
            'message' => "Registro eliminado satisfactoriamente"
        ], Response::HTTP_OK);
    }
}
