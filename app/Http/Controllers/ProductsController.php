<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        //validate fields
        $request -> validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image_path' => 'required|mimes:jpeg,png'
        ]);


        $record = new Product;
        $record -> name = $request->name;
        $record -> price = $request->price;
        $record -> category_id = $request->category_id;

        //upload image
        if($request->hasFile('image')){
            $photo = $request->file('image');
            $path = 'uploads/products/' .time().'.'.$photo->extension();
            $photo->move(public_path('uploads/products/'), $path);
            $record->image_path = $path;
        }

        $record->save();
        Alert::success('New Product Added Successfully', 'Stock updated');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['products'] = Product::findOrFail($id);
        return view('products.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['products'] = Product::findOrFail($id);
        $record->delete;

        return back();
    }
}
