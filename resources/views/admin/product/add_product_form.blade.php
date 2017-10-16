@extends('admin.dashboard.master')
@section('main_content')
<div class="row">
    <div class="col-lg-12">
        <hr/>
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center text-success"><?php echo Session::get('message'); ?></h1>
                   {!! Form::open(array('url'=>'/new-product', 'role'=>'form', 'method'=>'POST', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data')) !!}
                   <div class="form-group">
                       <label class="control-label col-lg-3">Product Name</label>
                       <div class="col-lg-9">
                           <input type="text" name="product_name" required class="form-control">
                           <span><?php if($errors->has('product_name')) { echo $errors->first('product_name'); }?></span>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Category Name</label>
                       <div class="col-lg-9">
                           <select name="category_id" class="form-control">
                               <option>---Select Product Category---</option>
                               <?php foreach ($all_published_category as $value) { ?>
                               <option value="<?php echo $value->id; ?>"><?php echo $value->category_name; ?></option>
                               <?php } ?>
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Manufacturer Name</label>
                       <div class="col-lg-9">
                           <select name="manufacturer_id" class="form-control">
                               <option>---Select Product Manufacturer---</option>
                               <?php foreach ($all_published_manufacturer as $published_manufacturer) { ?>
                               <option value="<?php echo $published_manufacturer->id; ?>"><?php echo $published_manufacturer->manufacturer_name; ?></option>
                               <?php } ?>
                           </select>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Product Price</label>
                       <div class="col-lg-9">
                           <input type="number" name="product_price" class="form-control"/>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Product Quantity</label>
                       <div class="col-lg-9">
                           <input type="number" name="product_quantity" class="form-control"/>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Product Short Description</label>
                       <div class="col-lg-9">
                           <textarea class="form-control" name="product_short_description" rows="8"></textarea>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Product Long Description</label>
                       <div class="col-lg-9">
                           <textarea class="form-control" name="product_long_description" rows="8"></textarea>
                       </div>
                   </div>
                   <div class="form-group">
                       <label class="control-label col-lg-3">Product Image</label>
                       <div class="col-lg-9">
                           <input type="file" name="product_image"/>
                           <span><?php if($errors->has('product_image')) { echo $errors->first('product_image'); }?></span>
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
                           <input type="submit" name="btn" value="Save Product Info" class="btn btn-primary btn-block">
                       </div>
                   </div>
                   {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop