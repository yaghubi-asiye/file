@extends('layouts.usersidebar')
                
@section('content')
<div class="sidebar-box ftco-animate col-9">
<!-- ............................................. -->


    <div class="container">
        <div class="col-md-12 ftco-animate">
                <h3  class="tit">مشخصات</h3>
        </div>
            <div class="row">
                <form action="#" class="bg-white p-5 contact-form">
                @csrf
            <div class="col-md-12 ftco-animate titr">
            <h5 class="tit">نام</h5>
              <div class="form-group">
                <input name="name" type="text" class="form-control" value="{{auth::user()->name}}">
              </div>
            </div>
            <div class="col-md-12 ftco-animate titr">
            <h5 class="tit">ایمیل</h5>
            <div class="form-group">
                <input name="email" type="text" class="form-control" value="{{auth::user()->email}}">
              </div>
                </form>
            </div>
        </div>
    </div>












<!-- ............................................. -->
</div>
@endsection
