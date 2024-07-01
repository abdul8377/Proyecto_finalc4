<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return response()->json($products,Response::HTTP_OK);
    }

    public function store(Request $request){
        $product=Product::create($request->all());
        return response()->json([
            'message'=>"Registro creado satisfactoriamente",
            'product'=>$product
        ],Response::HTTP_CREATED);
    }

    public function update(Request $request,$product){
        $product=Product::find($product);
        $product->update($request->only('name','price','stock','category_id','supplier_id'));
        return response()->json([
            'message'=>"Registro actualizado satisfactoriamente",
            'product'=>$product
        ],Response::HTTP_CREATED);
    }

    public function destroy($product){
        $product=Product::find($product);
        $product->delete();
        return response()->json([
            'message'=>"Registro eliminado satisfactoriamente"
        ],Response::HTTP_OK);
    }
    public function productsByCategory($category_id)
    {
        $category = Category::findOrFail($category_id);
        $products = Product::where('category_id', $category_id)->paginate(6);

        return view('products.byCategory', compact('products', 'category'));
    }
}
