@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">لیست مقالات</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
      <div class="row">
        <div class="col-sm-6">
          <div class="dataTables_length" id="example1_length">
            <label>Show
              <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
              </select>
               entries
             </label>
           </div>
         </div>
         <div class="col-sm-6">
           <div id="example1_filter" class="dataTables_filter">
             <label>Search:
               <input type="search" class="form-control input-sm" placeholder="" aria-controls="example1">
             </label>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 140.7px;" aria-sort="ascending" aria-label="نام محصول: activate to sort column descending">نام محصول</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="دسته‌بندی: activate to sort column ascending">دسته‌بندی</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="شرکت سازنده: activate to sort column ascending">شرکت سازنده</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="توضیحات: activate to sort column ascending">توضیحات</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 258.683px;" aria-label="قیمت: activate to sort column ascending">قیمت</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 68.7833px;" aria-label="تخفیف: activate to sort column ascending">تخفیف</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="موجودی: activate to sort column ascending">موجودی</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="وضعیت محصول: activate to sort column ascending">وضعیت محصول</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="تصویر: activate to sort column ascending">تصویر</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="گالری تصاویر: activate to sort column ascending">گالری تصاویر</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">ویرایش</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">حذف</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($products as $product): ?>
                <tr role="row" class="odd">
                  <td class="sorting_1">{{$product->name}}</td>
                  <td>
                    {{$product->category->title_fa}}
                  </td>
                  <td>
                    {{$product->brand->name}}
                  </td>
                  <td>{{$product->body}}</td>
                  <td>{{number_format($product->price)}}</td>
                  <td>{{$product->discount}}</td>
                  <td>{{$product->count}}</td>
                  <td>{{$product->status}}</td>
                  <td>
                    <img src="/{{$product->image}}" alt="تصویر محصول" style="width:50px; height:50px">
                  </td>
                  <td>
                      <a href="/admin/product/gallery?id={{$product->id}}" type="button" class="btn btn-block btn-info">گالری تصاویر</a>
                  </td>
                  <td>
                      <a href="{{route('product.edit', ['product'=>$product->id])}}" type="button" class="btn btn-block btn-warning">ویرایش</a>
                  </td>
                  <td>
                    <form class="" action="{{route('product.destroy', ['product'=>$product->id])}}" method="post">
                      {{csrf_field()}}
                      {{method_field('delete')}}
                      <button type="submit" class="btn btn-block btn-danger">حذف</button>
                    </form>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
           </table>
         </div>
       </div>
    </div>
  </div>
  {{$products->links()}}
  <!-- /.box-body -->
</div>
@endsection
