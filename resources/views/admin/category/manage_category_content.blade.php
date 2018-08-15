@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">All Category Info goes here</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="text-center"><?php echo Session::get('message'); ?></h2>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_category as $v_category) {  ?>
                        <tr class="odd gradeX">
                            <td><?php echo $v_category->category_name; ?></td>
                            <td><?php echo str_limit($v_category->category_description, 50,'...'); ?></td>
                            <td><?php 
                                if ($v_category->publication_status == 1) {
                                    echo 'Published';
                                }  else { echo "Unpublished"; }
                            ?></td>
                            <td class="center">
                                <?php if ($v_category->publication_status == 1) { ?>
                                <a href="{{url('/unpublished-category/'.$v_category->id)}}" class="btn btn-info" title="Unpublished">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                <?php } else  { ?>
                                <a href="{{url('/published-category/'.$v_category->id)}}" class="btn btn-danger" title="Published">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                <?php } ?>
                                <a href="{{url('edit-category/'.$v_category->id)}}" class="btn btn-primary" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('delete-category/'.$v_category->id)}}" class="btn btn-danger" title="Delete" onclick="return check_delete(); ">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
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