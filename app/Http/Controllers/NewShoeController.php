<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShoeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function create(Request $request){

        $request -> validate([
            'name' => 'required',
            'price' => 'required',
            'size' => 'required',
            'description' => 'required',
            'category' => 'required',
            'img' => 'required|mimes:jpeg,png'
        ]);

        $image = $request -> img;
        $imageFilename = time(). '.' . $image->extension();
        $image -> move(public_path('images'),$imageFilename);

        $shoeName = $request->name;
        $shoePrice = $request ->price;
        $shoeSize = $request -> size;
        $shoeDesc = $request -> description;
        $shoeCategory = $request -> category;
        $shoeImage = $request -> img;

        $myShoe = new Shoe;
        $myShoe->name = $shoeName;
        $myShoe->price = $shoePrice;
        $myShoe->size = $shoeSize;
        $myShoe->description = $shoeDesc;
        $myShoe->category = $shoeCategory;
        $myShoe->img = $shoeImage;
        $myShoe->save();


        return "Shoe added successfully";
        //return view('home');

        // $data['name'] = $request->name;
        // $data['size'] = $request->size;
        // $data['description'] = $request->description;
        // $data['category'] = $request->category;
        // $data['img'] = $request->img;

        //return $request;


    }
}
