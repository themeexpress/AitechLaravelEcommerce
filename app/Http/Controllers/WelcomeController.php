<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use App\Product;

class WelcomeController extends Controller {

    public function index() {
        $product_info = Product::where('publication_status', 1)->take(12)->get();
        return view('front_end.home.home_content', ['all_published_product' => $product_info]);
    }

    public function view_ctegory($id) {
        $category_product = Product::where('category_id', $id)->get();
        return view('front_end.category.category_content', ['category_product' => $category_product]);
    }

    public function product_details($id) {
        $product_info = Product::where('id', $id)->first();
        $category_id = $product_info->category_id;
        $category_product = Product::where('category_id', $category_id)->get();
        return view('front_end.product.product_details', [
            'product_info' => $product_info, 
            'category_product' => $category_product,
        ]);
    }

}
