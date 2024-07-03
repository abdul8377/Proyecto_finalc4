<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json([
            'message' => "Registro creado satisfactoriamente",
            'customer' => $customer
        ], Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->only('name','lasname','dni'. 'email', 'phone', 'address')); // Ajusta los campos según tu modelo Customer
        return response()->json([
            'message' => "Registro actualizado satisfactoriamente",
            'customer' => $customer
        ], Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json([
            'message' => "Registro eliminado satisfactoriamente"
        ], Response::HTTP_OK);
    }
}
