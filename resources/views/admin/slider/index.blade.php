@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">لیست اسلایدرها</h3>
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
           <!-- <div id="example1_filter" class="dataTables_filter">
             <form class="" action="">
               <label>Search:
                 <input type="search" class="form-control input-sm" name="name" placeholder="" aria-controls="example1">
                 <input class="btn btn-primary btn-sm" type="submit" name="" value="جستجو">
               </label>
             </form>

           </div> -->
         </div>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="عنوان: activate to sort column ascending">عنوان</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="والد: activate to sort column ascending">والد</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="آدرس لینک: activate to sort column ascending">آدرس لینک</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="تصویر: activate to sort column ascending">تصویر</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">ویرایش</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">حذف</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($sliders as $slider): ?>
                <tr role="row" class="odd">
                  <td class="sorting_1">{{$slider->title}}</td>
                  <td>{{$slider->sliderparent->fa_name}}</td>
                  <td>{{$slider->url}}</td>
                  <td>
                    <img src="/{{$slider->image}}" alt="تصویر اسلاید" style="width:50px; height:50px">
                  </td>
                  <td>
                      <a href="{{route('slider.edit', ['slider'=>$slider->id])}}" type="button" class="btn btn-block btn-warning">ویرایش</a>
                  </td>
                  <td>


                    <form class="" action="{{route('slider.destroy', ['slider'=>$slider->id])}}" method="post">
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
  {{$sliders->links()}}
  <!-- /.box-body -->
</div>
@endsection
