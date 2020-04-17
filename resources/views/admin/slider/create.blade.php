@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">افزودن اسلایدر جدید</h3>
  </div>
  <!-- /.box-header -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">

      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('slider.store')}}">
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">عنوان</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{old('title')}}">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">والد</label>
            <select class="form-control" name="sliderparent_id">
              <?php foreach ($parents as $parent): ?>
                <option value="{{$parent->id}}">{{$parent->fa_name}}</option>
              <?php endforeach; ?>
            </select>

          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">لینک</label>
            <input name="url" type="text" class="form-control" id="exampleInputEmail1" value="{{old('url')}}">
          </div>

          <div class="form-group">
            <label for="exampleInputFile">تصویر اسلایدر</label>
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
