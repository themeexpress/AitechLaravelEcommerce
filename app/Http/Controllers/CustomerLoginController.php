<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerLoginController extends Controller
{
    public function customerLogin(Request $request){
        $email_address=$request->input('email_address');
        $password=bcrypt($request->input('password'));
        
        $customerinfo=Customer::where('email_address', '=', $email_address)->where('password', '=', $password);
       if($customerinfo){
                return view('customer.customerprofile',['customerinfo'=>$customerinfo]);
                
            }else{
                echo 'No Match';
            }        
       
}
}