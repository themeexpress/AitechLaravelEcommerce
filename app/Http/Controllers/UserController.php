<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function create_user() {
       $data = array();
       $data['top_menu'] = view('admin.includes.top_menu');
       $data['main_menu'] = view('admin.includes.main_menu');
       $data['main_content'] = view('admin.user.add_user_form');
       return view('admin.dashboard.master')->with($data);
    }
    public function save_user(Request $request) {
         //$this->validator($request->all())->validate();
         $user = new User();
         $user::create($request->all());
         return redirect('/create-user');
    }
}
