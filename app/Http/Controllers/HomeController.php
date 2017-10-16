<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('home');
        $data=array();
        $data['top_menu']=view('admin.includes.top_menu');
        $data['main_menu']=view('admin.includes.main_menu');
        $data['main_content']=view('admin.dashboard.home_content');
        return view('admin.dashboard.master')->with($data);
    }
}
