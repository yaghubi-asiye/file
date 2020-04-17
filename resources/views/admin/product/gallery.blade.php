@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">گالری محصول {{$product->name}}</h3>
  </div>

  <div class="col-md-12">

    <div class="box box-primary">

      <form role="form" method="post" enctype="multipart/form-data" action="{{url('admin/product/upload?id='.$product->id)}}">
        {{csrf_field()}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputFile">تصاویر گالری</label>
            <input type="file" name="file[]" multiple />
          </div>
        </div>


        <div class="box-footer">
          <button type="submit" class="btn btn-primary">ارسال</button>
        </div>
      </form>
    </div>


  </div>

</div>
@endsection

@section('script')

<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
@endsection
