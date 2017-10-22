
@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Order Information</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="btn-success text-center"></h3>
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
                       
                        <tr class="odd gradeX">
                            <td class="text-center"></td>
                       <td class="text-center"></td>
                       <td class="text-center"></td>                                           
                       <td class="text-center"></td>
                       <td class="text-center"</td>
                       <td class="text-center">
                           <a href="#" class="btn btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></a> 
                           <a href="#" class="btn btn-success" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                       </td>
                        </tr>
                        
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
