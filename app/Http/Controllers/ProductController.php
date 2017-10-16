<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;

class ProductController extends Controller {

    public function create_product() {
        $category_info = Category::where('publication_status', 1)->get();
        $manufacturer_info = Manufacturer::where('publication_status', 1)->get();

        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.product.add_product_form', ['all_published_category' => $category_info, 'all_published_manufacturer' => $manufacturer_info]);
        return view('admin.dashboard.master')->with($data);
    }

    public function save_product(Request $request) {
        $this->validate($request, [
            'product_name' => 'required',
            'product_image' => 'required'
        ]);
        $product_image = $request->file('product_image');
        $image_name = $product_image->getClientOriginalName();
        $image_path = 'product_image/';
        $image_url = $image_path . $image_name;
        $product_image->move($image_path, $image_name);
        $product_info = new Product;
        $product_info->product_name = $request->product_name;
        $product_info->category_id = $request->category_id;
        $product_info->manufacturer_id = $request->manufacturer_id;
        $product_info->product_price = $request->product_price;
        $product_info->product_quantity = $request->product_quantity;
        $product_info->product_short_description = $request->product_short_description;
        $product_info->product_long_description = $request->product_long_description;
        $product_info->product_image = $image_url;
        $product_info->publication_status = $request->publication_status;
        $product_info->save();
        return redirect('/add-product')->with('message', 'Product info create successfully');
    }

      public function manageProduct() {
        $allproducts = Product::all();
        //$manufacturer_info = Manufacturer::where('publication_status', 1)->get();
        //['all_published_category' => $category_info, 'all_published_manufacturer' => $manufacturer_info]

        $data = array();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.product.manageproduct',['allproducts'=>$allproducts]);
        return view('admin.dashboard.master')->with($data);
    }
    public function deleteProduct($id){
        $products = Product::find($id);
        $products->delete();
        return redirect('/manage-product')->with('message', 'Product deleted successfully');
        
    }

}
