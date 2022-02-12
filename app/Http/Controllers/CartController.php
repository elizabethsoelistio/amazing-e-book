<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function show(){
        $cart = Order::where('account_id', auth()->user()->account_id)->get();

        return view('cart.cart', [
            'title'=> 'Cart',
            'cart' => $cart
        ]);

    }

    public function delete(Request $request){
        Order::where('order_id', $request->order_id)->delete();

        return back()->with('DeleteSuccess', 'Book Removed from Cart');

    }

    public function deleteAll(){
        Order::where('account_id', auth()->account_id)->delete();
        
        return view('/deleteAll', [
            'title' => 'Thank you for Renting',
            'message' => 'Thank you for Renting!'
        ]);


    }


}
