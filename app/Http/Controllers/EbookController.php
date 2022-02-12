<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ebook;
use App\Models\Order;

class EbookController extends Controller
{
   public function show($ebook_id){
    $ebook = Ebook::where('ebook_id', $ebook_id)->first();

    return view('ebook.ebook', [
        'title' => 'Ebook Page',
        'ebook' => $ebook
    ]);
   }

   public function add_to_cart($ebook_id){
       $cart = new Order();

       $cart->account_id = auth()->user()->account_id;

       $cart->ebook_id = $ebook_id;
       $cart->order_date = now();

       $cart->save();

       return back()->with('SuccessAddToCart', 'Add to Cart Success');
   }


}

