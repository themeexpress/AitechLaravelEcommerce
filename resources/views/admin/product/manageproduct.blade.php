@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <hr/>
        <h3 class="btn-success text-center">{{Session::get('message')}}</h3>
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center text-success"></h1>
                <table class="table-bordered table-responsive"> 
                   <tr class="text-center">
                    <th class="text-center">Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Quantity</th>                 
                    <th class="text-center">Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                   </tr>
                   @foreach($allproducts as $allproducts)
                   <tr class="old gradeX">
                       <td class="text-center">{{$allproducts->product_name}}</td>
                       <td class="text-center">{{$allproducts->product_price}}</td>
                       <td class="text-center">{{$allproducts->product_quantity}}</td>                                           
                       <td class="text-center"><img style="height: 200px;width: 200px" src="{{asset($allproducts->product_image)}}"></td>
                       <td class="text-center">{{$allproducts->publication_status}}</td>
                       <td class="text-center">
                           <a href="{{url('delete-product/'.$allproducts->id)}}" class="btn btn-danger" title="Delete" onclick="return check_delete(); ""><span class="glyphicon glyphicon-trash" style="padding:10px;"></span></a> 
                           <a href="{{url('edit-product/'.$allproducts->id)}}" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"style="padding:10px;"></span></a>
                       </td>
                   </tr>
                   @endforeach
            </div>
        </div>
    </div>
</div>
@stop