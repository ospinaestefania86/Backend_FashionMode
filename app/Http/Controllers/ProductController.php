<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }
        return response()->json($product);
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'descripcion' => 'required|string',
                'precio' => 'required|numeric',
                'stock' => 'integer',
                'categoria_id' => 'integer',
                'imagen_url' => 'url',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }

        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $validatedData = $request->validate([
            'nombre' => 'string|max:255',
            'descripcion' => 'string',
            'precio' => 'numeric',
            'stock' => 'integer',
            'categoria_id' => 'integer',
            'imagen_url' => 'url',
        ]);

        $product->update($validatedData);
        return response()->json($product);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Product deleted successfully']);
    }
}
