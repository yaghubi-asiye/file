@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">ویرایش {{$category->title_fa}}</h3>
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
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('category.update', ['category'=>$category->id])}}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">نام انگلیسی</label>
            <input name="en_name" type="text" class="form-control" id="exampleInputEmail1" value="{{$category->en_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">نام فارسی</label>
            <input name="fa_name" type="text" class="form-control" id="exampleInputPassword1" value="{{$category->fa_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">سرگروه</label>
             <select class="form-control" name="chid">
               <option value="0"></option>
               <?php foreach ($categories as $cat): ?>
                 <?php if ($cat->id == $category->chid): ?>
                   <option value="{{$cat->id}}" selected>{{$cat->fa_name}}</option>
                 <?php else: ?>
                   <option value="{{$cat->id}}">{{$cat->fa_name}}</option>
                 <?php endif; ?>

               <?php endforeach; ?>
             </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">تصویر</label>
            <div class="form-group">
              <img src="/{{$category->image}}" alt="{{$category->fa_name}}" style="height:100px; width:100px">
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
