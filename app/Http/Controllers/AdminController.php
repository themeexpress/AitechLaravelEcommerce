<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        return view('admin.login.login');
    }
        public function admin_login_check(Request $request) {
            $email_address = $request->input('email_address');
            $password = md5($request->input('password'));
            $admin_info =DB::table('tbl_admin')->where('email_address', $email_address)
                                            ->where('password', $password)
                                            ->first();
           if($admin_info) {
               return Redirect::to('/dashboard');
           } else {
               return Redirect::to('/admin');
           }
                                                
            
        }
}
