
@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Products and Information</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="btn-success text-center">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Quantity</th>                 
                            <th class="text-center">Image</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($allproducts as $allproducts)
                        <tr class="odd gradeX">
                            <td class="text-center">{{$allproducts->product_name}}</td>
                       <td class="text-center">{{$allproducts->product_price}}</td>
                       <td class="text-center">{{$allproducts->product_quantity}}</td>                                           
                       <td class="text-center"><img style="height: 200px;width: 200px" src="{{asset($allproducts->product_image)}}"></td>
                       <td class="text-center">{{$allproducts->publication_status}}</td>
                       <td class="text-center">
                           <a href="{{url('delete-product/'.$allproducts->id)}}" class="btn btn-danger" title="Delete" onclick="return check_delete();"><span class="glyphicon glyphicon-trash"></span></a> 
                           <a href="{{url('edit-product/'.$allproducts->id)}}" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                       </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop