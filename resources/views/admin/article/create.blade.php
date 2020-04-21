@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">افزودن محصول</h3>
  </div>
  <!-- /.box-header -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">

      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">نام محصول</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">دسته‌بندی محصول</label>
             <select class="form-control" name="category">
               <?php foreach ($categories as $category): ?>
                 <option value="{{$category->id}}">{{$category->title_fa}}</option>
               <?php endforeach; ?>
             </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">شرکت سازنده</label>
             <select class="form-control" name="brand">
               <?php foreach ($brands as $brand): ?>
                 <option value="{{$brand->id}}">{{$brand->name}}</option>
               <?php endforeach; ?>
             </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">قیمت محصول</label>
            <input name="price" type="text" class="form-control" id="exampleInputPassword1"  value="{{old('price')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">تخفیف</label>
            <input name="discount" type="text" class="form-control" id="exampleInputPassword1"  value="{{old('discount')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">تعداد موجودی</label>
            <input name="count" type="text" class="form-control" id="exampleInputPassword1"  value="{{old('count')}}">
          </div>
          <label for="exampleInputPassword1">وضعیت محصول</label>
          <div class="form-group">
            <input name="status" type="checkbox" id="exampleInputPassword1"  value="1" checked>موجود
          </div>
          <div class="form-group">
            <label for="exampleInputFile">تصویر محصول</label>
            <input name="image" type="file" id="exampleInputFile">

          </div>
          <div class="form-group">
            <label for="exampleInputFile">توضیحات محصول</label>
          </div>
          <textarea name="body" id ="body" rows="8" cols="140" class="ckeditor">{{old('body')}}</textarea>
          <script type="text/javascript">
            CKEDITOR.replace( 'body' );
         </script>

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
