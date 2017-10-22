<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomeController extends Controller {

    public function index() {
        //echo 'Hello Laravel';
        $category_info = Category::where('publication_status', 1)->get();
        $product_info = Product::where('publication_status', 1)->get();
        $data = array();
        $data['header_content'] = view('front_end.includes.header');
        $data['main_menu'] = view('front_end.includes.main_menu', ['all_published_category' => $category_info]);
        //$data['slider'] = view('front_end.slider.home_slider');
        $data['main_content'] = view('front_end.home.home_content', ['all_published_product' => $product_info]);
        $data['footer'] = view('front_end.includes.footer');
        return view('front_end.master')->with($data);
    }

    public function view_ctegory($id) {
        $data = array();
        $category_info = Category::where('publication_status', 1)->get();
        $category_product = Product::where('id', $id)->get();
        $data['header_content'] = view('front_end.includes.header');
        $data['main_menu'] = view('front_end.includes.main_menu', ['all_published_category' => $category_info]);
        $data['slider'] = view('front_end.slider.home_slider');
        $data['main_content'] = view('front_end.category.category_content', ['category_product' => $category_product]);
        $data['footer'] = view('front_end.includes.footer');
        return view('front_end.master')->with($data);
    }

    public function product_details() {
        $data = array();
        $data['header_content'] = view('front_end.includes.header');
        $data['main_menu'] = view('front_end.includes.main_menu');
        $data['slider'] = view('front_end.slider.home_slider');
        $data['main_content'] = view('front_end.product.product_details_content');
        $data['footer'] = view('front_end.includes.footer');
        return view('front_end.master')->with($data);
    }

}
