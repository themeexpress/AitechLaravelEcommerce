<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $data=array();
        $data['top_menu']=view('admin.includes.top_menu');
        $data['main_menu']=view('admin.includes.main_menu');
        $data['main_content']=view('admin.dashboard.home_content');
        return view('admin.dashboard.master')->with($data);
    }
}
