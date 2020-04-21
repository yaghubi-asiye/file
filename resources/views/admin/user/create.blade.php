@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">افزودن سطح دسترسی جدید</h3>
  </div>
  <!-- /.box-header -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">

      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" enctype="multipart/form-data" action="{{route('role.store')}}">
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">نام سطح دسترسی</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{old('name')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">عنوان سطح دسترسی</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{old('title')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">دسترسی‌ها</label>
             <select class="form-control" name="permission_id[]" multiple>
               <?php foreach ($permissions as $permission): ?>
                 <option value="{{$permission->id}}">{{$permission->title}}</option>
               <?php endforeach; ?>
             </select>
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
