@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                   {!! Form::open(array('url'=>'/new-manufacturer', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal')) !!}
                   <h2 class="text-center"><?php echo Session::get('message'); ?></h2>
                   <hr/>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Manufacturer Name</label>
                       <div class="col-lg-9">
                           <input type="text" name="manufacturer_name" class="form-control">
                           <span><?php if($errors->has('manufacturer_name')) { echo $errors->first('manufacturer_name'); }?></span>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Manufacturer Description</label>
                       <div class="col-lg-9">
                           <textarea class="form-control" name="manufacturer_description"></textarea>
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
                           <input type="submit" name="btn" value="Save Manufacturer Info" class="btn btn-primary btn-block">
                       </div>
                   </div>
                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop