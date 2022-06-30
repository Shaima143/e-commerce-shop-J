<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\order;
use App\OrderItem;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class cartController extends Controller
{
    function addToCart(Request $request){
        
        $myCart = new Cart;
        
        if (Auth::check()) {
            $user = Auth::user();
            $id = Auth::id();
            $myCart->user_id = $id;
            $myCart->product_id=$request->productId;
            $myCart->save();
            return redirect()->back();
        }
        else{
            return redirect('/home');
        }
    }
    
    function showCart(){
       $userID = Auth::id();
       $selections=DB::table('cart')->join('products','products.id','=','cart.product_id')->where('cart.user_id',$userID)->select('products.*','cart.id as itemID')->get();
       return view('cartList',['selections'=>$selections]);
    }

    function checkout(){
        $userID = Auth::id();
       $total=$selections=DB::table('cart')->join('products','products.id','=','cart.product_id')->where('cart.user_id',$userID)->select('products.*')->sum('products.price');
       return view('checkout',['total'=>$total]);
    }

    static function cartCount(){
        $userID = Auth::id();
        return Cart::where('user_id',$userID)->count();
    }

    function placeOrder(Request $request){
        $user = auth()->user();
        $email=$user->email;
        $userID = Auth::id();

        $myOrder = new Order;
        $myOrder->user_id=$userID;
        $myOrder->email=$email;
        $myOrder->phoneNo = $request->phone;
        $myOrder->trackingNo=$userID .rand(1111,9999);
        $myOrder->address=$request->address;
        $myOrder->ord_status='placed';
        $myOrder->save();

        $all=Cart::where('user_id',$userID)->get();
        foreach ($all as $item) {
            $orderItem = new OrderItem;
            $orderItem->order_id=$myOrder->id;;
            $orderItem->product_id=$item['product_id'];
            $orderItem->save();
            Cart::where('product_id',$item['product_id'])->delete();
        }
       
        return view('placedOrder');
    }

    function removeItem($id){
        Cart::destroy($id);
        return redirect('cartList');
    }

    function prevOrders(){
        $userID = Auth::id();
        $all=Order::where('user_id',$userID)->get();
        return view('ordersList',compact('all'));
    }
}
