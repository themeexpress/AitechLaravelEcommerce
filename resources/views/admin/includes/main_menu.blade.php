@extends('admin.dashboard.master')
@section('main_menu')
<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{URL::to('/home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Customer Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">                
                <li>
                    <a href="{{url('/manage-customer')}}">Manage Customer</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/add-category')}}">Add Category</a>
                </li>
                <li>
                    <a href="{{url('/manage-category')}}">Manage Category</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Manufacturer Info <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/add-manufacturer')}}">Add Manufacturer</a>
                </li>
                <li>
                    <a href="{{url('/manage-manufacturer')}}">Manage Manufacturer</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-life-ring"></i> Product Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/add-product')}}">Add Product</a>
                </li>
                <li>
                    <a href="{{url('/manage-product')}}">Manage Product</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Order Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/order-management')}}">Order Management</a>
                </li>
               
                
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-area-chart"></i> All Statistics<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="#"> User Statistics</a>
                </li>                
            </ul>
            <!-- /.nav-second-level -->
        </li>
    </ul>
</div>
@stop