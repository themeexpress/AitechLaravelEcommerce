@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Customer Information</h1>
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
                            <th class="text-center">First Name</th>
                            <th class="text-center">last Name</th>
                            <th class="text-center">Email Address</th>                 
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">District</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>  
                        @foreach($allcustomer as $allcustomer)
                        <tr class="odd gradeX">
                            <td class="text-center">{{$allcustomer->first_name}}</td>
                            <td class="text-center">{{$allcustomer->last_name}}</td>
                            <td class="text-center">{{$allcustomer->email_address}}</td>                                           
                            <td class="text-center">{{$allcustomer->phone_number}}</td>
                            <td class="text-center">{{$allcustomer->address}}</td>
                            <td class="text-center">{{$allcustomer->district_name}}</td>
                            <td class="text-center">
                                <a href="{{url('delete-customer/'.$allcustomer->id)}}" class="btn btn-danger" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>                                
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

                            