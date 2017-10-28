extends('customer.dashboard.master')
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
            <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Customer Info<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">                
                <li>
                    <a href="{{url('/profile')}}">Profile Info</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        <li>
            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Order History <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{url('/History')}}">Order History</a>
                </li>
                <li>
                    <a href="{{url('/Profile')}}">Profile</a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        
    </ul>
</div>
@stop