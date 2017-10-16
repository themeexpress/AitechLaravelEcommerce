<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerLoginController extends Controller
{
    public function customerLogin(Request $request){
        $email_address=$request->email_address;
       
        $customerData = Customer::all();        
       
        foreach ($customerData as $allcustomerinfo){
            $Customer_email_address=$allcustomerinfo->email_address;
            if($Customer_email_address==$email_address){
                echo 'Match';
                
            }else{
                echo 'No Match';
            }
        }
        ;
        
     
        
    }
}
