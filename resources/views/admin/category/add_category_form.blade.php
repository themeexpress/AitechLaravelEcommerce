@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                   {!! Form::open(array('url'=>'/new-category', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                   <div class="form-group">
                       <label class="control-label col-lg-3">Category Name</label>
                       <div class="col-lg-9">
                           <input type="text" name="category_name" required class="form-control">
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Category Description</label>
                       <div class="col-lg-9">
                           <textarea class="form-control" name="category_description"></textarea>
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
                           <input type="submit" name="btn" value="Save Category Info" class="btn btn-primary btn-block">
                       </div>
                   </div>
                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop