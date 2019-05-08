<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // compact coloca en un arreglo todos los registros
        return view ('product', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


       if($request->hasFile('img')){

            $file = $request->file('img');
            $imagen = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$imagen);
    
        }

        $product = new Product();
        $product->product = $request->input('product');
        $product->slug = $request->input('product');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->img = $imagen;
        $product->save();
        return view('product.to_post');
        // $product = new Product();
        // $product->product = $request->input('product');
        // $product->save();

        // return 'Saved'; 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // (Product $product) Este es un método de implicit binding
    public function show(Product $product)
    {

        // Este es un método de eloquent hace lo mismo que implicit binding 
        // $product = Product::find($id);
        
        return view ('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view ('product.edit', compact('product'));
        // return $product;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->fill($request->except('img'));
        $product->slug = $request->input('product');

        if($request->hasFile('img')){

            $file = $request->file('img');
            $imagen = time().$file->getClientOriginalName();
              // Esto es para que se pueda actualizar la foto en nuestra base de datos
            $product->img = $imagen;

            $file->move(public_path().'/images/',$imagen);
        }

        $product->save();
        return view('product.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
