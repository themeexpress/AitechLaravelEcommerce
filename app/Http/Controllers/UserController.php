<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Customer;
class UserController extends Controller
{
     public function manageCustomer(){
         $allcustomer=Customer::all();
      $data = array();
        //$manufacturer_info = Manufacturer::all();
        $data['top_menu'] = view('admin.includes.top_menu');
        $data['main_menu'] = view('admin.includes.main_menu');
        $data['main_content'] = view('admin.customer.manage_customer_content',['allcustomer'=>$allcustomer]);
        return view('admin.dashboard.master')->with($data);
  }
  public function deleteCustomer($id){
      $customers=Customer::find($id);
      $customers->delete();
      return redirect('/manage-customer')->with('message', 'Customer info delete successfully');      
  }
}
