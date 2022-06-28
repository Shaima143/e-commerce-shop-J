<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoe;
use Alert;
use App\product;

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
            //'size' => 'required',
            'description' => 'required',
            'category' => 'required',
            'gallery' => 'required|mimes:jpeg,png'
        ]);

        $gallery = $request -> gallery;
        $imageFilename = time(). '.' . $gallery->extension();
        $gallery -> move(public_path('img'),$imageFilename);

        $shoeName = $request->name;
        $shoePrice = $request ->price;
        //$shoeSize = $request -> size;
        $shoeDesc = $request -> description;
        $shoeCategory = $request -> category;
        $shoeImage = $request -> gallery;

        $myShoe = new product;
        $myShoe->name = $shoeName;
        $myShoe->price = $shoePrice;
        //$myShoe->size = $shoeSize;
        $myShoe->description = $shoeDesc;
        $myShoe->category = $shoeCategory;
        $myShoe->gallery = $shoeImage;
        $myShoe->save();


        //return "Shoe added successfully";
        Alert::success('New Shoe Added Successfully', 'Stock updated');
        return back();
        //return view('index');


        // $data['name'] = $request->name;
        // $data['size'] = $request->size;
        // $data['description'] = $request->description;
        // $data['category'] = $request->category;
        // $data['img'] = $request->img;

        //return $request;


    }
}
