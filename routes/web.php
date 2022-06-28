<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\product;
use App\Shoe;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

//add a new shoe
Route::view('/addShoes', 'shoes.add-shoe');

//add new shoe controller
Route::post('/newShoes', 'NewShoeController@create');



//show the home page
route::view('index','index');

//show the products page (all)
Route::get('/index/products', function () {

    $data = DB::table('products')->get();

    return view('products', ['data' => $data]);
});

//show the details of clicked product (all)
Route::get('/index/products/{id}', function ($id) {
    $data =  product::find($id);
    return view('description', ['data' => $data]);
});

//show women products category
Route::get('/index/women', function () {

    $data = product::select()->where('category','women')->get();

    return view('women', ['data' => $data]);
});

//show men products category
Route::get('/index/men', function () {

    $data = product::select()->where('category','men')->get();

    return view('men', ['data' => $data]);
});

