<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
  public function orderManage(){
      $data = array();
        //$manufacturer_info = Manufacturer::all();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.order.manage_order_content');
        return view('admin.dashboard.master')->with($data);
  }
}
