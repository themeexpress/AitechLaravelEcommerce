<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request) {
        $product_id=$request->input('product_id');
        $product_info=Product::where('id', $product_id)->first();
        Cart::add([
            'id' => $product_id,
            'name' => $product_info->product_name,
            'price' => $product_info->product_price,
            'qty' => $request->input('qty'),
            'image' => $product_info->product_image,
        ]);
        return redirect('/show-cart');
    }
    public function show_cart() {
        $cart_prodicts=Cart::content();
        return view('front_end.cart.show_cart', ['cart_products'=>$cart_prodicts] );
    }
    public function deleteCartProduct($id){
        Cart::remove($id);
        return redirect('/show-cart')->with('meassage', 'Cart Product info delete successfully');
    }
    
}
