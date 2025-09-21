<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $created = Product::create($request->all());

        if ($created) {
            return redirect()->route('products.index')->with('success', 'Produto cadastrado com sucesso');
        }

        return redirect()->back()->with('error', 'Falha ao cadastrar produto')->withInput();
    }

    public function show(Product $products)
    {
        
    }

    public function edit($id)
    {   
        $product = Product::findOrFail($id);

        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {

       $product = Product::findorfail($id);
       $updated = $product->update($request->all()); 

        if ($updated) {
            return redirect()->route('products.index')->with('success', 'Produto atualizado com sucesso!');
        }
        else {
            return redirect()->back()->with('error', 'Falha ao atualizar produto');
        } 
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        if ($product) 
            {
            return redirect()->route('products.index')->with('success', 'Produto deletado com sucesso!');
            }
        else {
            return redirect()->back()->with('error', 'Falha ao deletar produto.');
        }
}
}