@extends('layouts.usersidebar')
                
@section('content')
<div class="sidebar-box ftco-animate col-9">
<!-- ............................................. -->


    <div class="container">

        <div class="row">
            <div class="col-md-12 ftco-animate">
                <h3  class="tit">مشخصات</h3>
            </div>
            <div class="col-md-12 ftco-animate titr">
            <h5 class="tit">نام</h5>
                <div class="info">
                {{auth::user()->name}}
                </div>
            </div>
            <div class="col-md-12 ftco-animate titr">
            <h5 class="tit">ایمیل</h5>
                <div class="info">
                {{auth::user()->email}}
                </div>
            </div>
        </div>
    </div>












<!-- ............................................. -->
</div>
@endsection
