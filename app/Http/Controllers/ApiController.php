<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return response()->json($product);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);

        $product = new Product([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
        ]);

        $product->save();
        return response()->json($product, 201);
    }


    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'name'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);

        $product = Product::find($product->id);
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->save();

        return response()->json($product);
    }


    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();

        return response()->json($product);
    }
}
