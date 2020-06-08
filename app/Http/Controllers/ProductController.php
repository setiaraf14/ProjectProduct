<?php

namespace App\Http\Controllers;

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
        //
        return view('pages_product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages_product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData=$request->validate([
            'nama_product'=>'required|min:3|max:25',
            'jenis_product'=>'required|in:x,x',
            'keluar_product'=>'required',
            'masuk_product'=>'required',
            'nama_pengelola'=>'required|min:3|max:25',
            'nik_pengelola'=>'required|max:4',
            'alamat_pengelola'=>''
        ]);
        Product::create($validateData);
        return view('');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('pages_product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('pages_product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $validateData=$request->validate([
            'nama_product'=>'required|min:3|max:25',
            'jenis_product'=>'required|in:x,x',
            'keluar_product'=>'required',
            'masuk_product'=>'required',
            'nama_pengelola'=>'required|min:3|max:25',
            'nik_pengelola'=>'required|max:4',
            'alamat_pengelola'=>''
        ]);
        $product->update($validateData);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
    }
}
