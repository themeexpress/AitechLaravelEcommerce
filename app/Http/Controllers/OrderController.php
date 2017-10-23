<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetails;

class OrderController extends Controller
{
  public function orderManage(){
      $orderdetails=OrderDetails::all();
      $data = array();
        //$manufacturer_info = Manufacturer::all();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.order.manage_order_content',['orderdetails'=>$orderdetails]);
        return view('admin.dashboard.master')->with($data);
  }
  public function deleteOrder($id){
      $orderdetails= OrderDetails::find($id);
       $orderdetails->delete();
       return redirect('/order-management')->with('message', 'Order Info delete successfully');
  }
}
