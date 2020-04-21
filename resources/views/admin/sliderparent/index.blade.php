@extends('layouts.admin')
@section('content')
<div class="box">
  <div class="box-header">
    <h3 class="box-title">لیست شرک‌های سازنده</h3>
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
             <!-- <input type="search" class="form-control input-sm" name="name" placeholder="" aria-controls="example1"> -->
             <form class="" action="">
               <label>Search:
                 <input type="search" class="form-control input-sm" name="name" placeholder="" aria-controls="example1">
                 <input class="btn btn-primary btn-sm" type="submit" name="" value="جستجو">
               </label>
             </form>

           </div>
         </div>
       </div>
       <div class="row">
         <div class="col-sm-12">
           <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
              <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="نام: activate to sort column ascending">نام</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 269.483px;" aria-label="نام انگلیسی: activate to sort column ascending">نام انگلیسی</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">ویرایش</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 73.35px;" aria-label="حذف: activate to sort column ascending">حذف</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($parents as $parent): ?>
                <tr role="row" class="odd">
                  <td class="sorting_1">{{$parent->fa_name}}</td>
                  <td class="sorting_1">{{$parent->en_name}}</td>
                  <td>
                      <a href="{{route('sliderparent.edit', ['sliderparent'=>$parent->id])}}" type="button" class="btn btn-block btn-warning">ویرایش</a>
                  </td>
                  <td>


                    <form class="" action="{{route('sliderparent.destroy', ['sliderparent'=>$parent->id])}}" method="post">
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
  {{$parents->links()}}
  <!-- /.box-body -->
</div>
@endsection
