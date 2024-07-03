<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $products = $category->products;
        return view('categories.show', compact('category', 'products'));
    }


    public function apiIndex(){
        $categories=Category::all();
        return response()->json($categories,Response::HTTP_OK);
    }

    public function store(Request $request){
        $categories=Category::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'category'=>$categories
        ],Response::HTTP_CREATED);
    }

    public function update(Request $request,$category){
        $category=Category::find($category);
        $category->update($request->only('name'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'category'=>$category
        ],Response::HTTP_CREATED);
    }

    public function destroy($category){
        $category=Category::find($category);
        $category->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }

}
