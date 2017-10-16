@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                   {!! Form::open(array('url'=>'/update-category', 'name' => 'edit_category_form', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                   <div class="form-group">
                       <label class="control-label col-lg-3">Category Name</label>
                       <div class="col-lg-9">
                           <input type="text" name="category_name" value="<?php echo $category_info->category_name; ?>" required class="form-control">
                           <input type="hidden" name="category_id" value="<?php echo $category_info->id; ?>" required class="form-control">
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Category Description</label>
                       <div class="col-lg-9">
                           <textarea class="form-control" name="category_description"><?php echo $category_info->category_description; ?></textarea>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Publication Status</label>
                       <div class="col-lg-9">
                           <select class="form-control" name="publication_status">
                               <option>---Select Publication Status---</option>
                               <option value="1">Published</option>
                               <option value="0">Unpublished</option>
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                       <div class="col-lg-9 col-lg-offset-3">
                           <input type="submit" name="btn" value="Update Category Info" class="btn btn-primary btn-block">
                       </div>
                   </div>
                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script>
    document.forms['edit_category_form'].elements['publication_status'].value='<?php echo $category_info->publication_status; ?>';
</script>
@stop