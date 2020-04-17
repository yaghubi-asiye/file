@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">ویرایش {{$slider->title}}</h3>
  </div>
  <!-- /.box-header -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">مثال ساده</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('slider.update', ['slider'=>$slider->id])}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">عنوان</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$slider->title}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">والد</label>
             <select class="form-control" name="slider_parent_id">
               <?php foreach ($parents as $parent): ?>
                 <?php if ($slider->slider_parent->en_name == $parent->en_name): ?>
                   <option value="{{$parent->id}}" selected>{{$parent->name}}</option>
                 <?php else: ?>
                   <option value="{{$parent->id}}">{{$parent->name}}</option>
                 <?php endif; ?>
               <?php endforeach; ?>
             </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">آدرس لینک</label>
            <input name="url" type="text" class="form-control" id="exampleInputEmail1" value="{{$slider->url}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">تصویر</label>
            <div class="form-group">
              <img src="{{$slider->image}}" alt="تصویر اسلاید" style="height:100px">
            </div>

            <input class="form-control" name="image" type="file" id="exampleInputFile">
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form>
    </div>
    <!-- /.box -->

    <!-- Form Element sizes -->

    <!-- /.box -->


    <!-- /.box -->

    <!-- Input addon -->

    <!-- /.box -->

  </div>
  <!-- /.box-body -->
</div>
@endsection
