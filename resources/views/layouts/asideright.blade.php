<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-right image">
        <img src="{{auth()->user()->image}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-right info">
        <p>{{auth()->user()->name}}</p>>
        <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="جستجو">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">منو</li>
      <li class="active treeview">
        <a href="{{route('home')}}">
          <i class="fa fa-home"></i>
            <span>خانه اصلی</span>
          </i>
        </a>
      </li>
      <?php
       ?>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت کاربران</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i>لیست کاربران</a></li>
          <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i>افزودن کاربر جدید</a></li>

          <!-- roles -->
          <li><a href="{{route('role.index')}}"><i class="fa fa-circle-o"></i>لیست نقش‌ها</a></li>
          <li><a href="{{route('role.create')}}"><i class="fa fa-circle-o"></i>افزودن نقش جدید</a></li>

          <!-- permissions -->
          <li><a href="{{route('permission.index')}}"><i class="fa fa-circle-o"></i>لیست دسترسی‌ها</a></li>
          <li><a href="{{route('permission.create')}}"><i class="fa fa-circle-o"></i>افزودن دسترسی جدید</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت محصول</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>لیست محصولات</a></li>
            <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>افزودن محصول جدید</a></li>
            <li><a href="{{route('category.index')}}"><i class="fa fa-circle-o"></i>لیست دسته‌بندی‌ها</a></li>
            <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o"></i>افزودن دسته‌بندی جدید</a></li>
            <li><a href="{{route('producer.index')}}"><i class="fa fa-circle-o"></i>لیست تولیدکننده‌ها</a></li>
            <li><a href="{{route('producer.create')}}"><i class="fa fa-circle-o"></i>افزودن تولیدکننده جدید</a></li>
        </ul>



      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت فیلتر</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('filter.index')}}"><i class="fa fa-circle-o"></i>لیست فیلترها</a></li>
            <li><a href="{{route('filter.create')}}"><i class="fa fa-circle-o"></i>افزودن فیلتر جدید</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت اسلایدشو</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('slider.index')}}"><i class="fa fa-circle-o"></i>لیست اسلایدرها</a></li>
            <li><a href="{{route('slider.create')}}"><i class="fa fa-circle-o"></i>افزودن اسلایدر جدید</a></li>
            <li><a href="{{route('sliderparent.index')}}"><i class="fa fa-circle-o"></i>لیست والدهای اسلایدرها</a></li>
            <li><a href="{{route('sliderparent.create')}}"><i class="fa fa-circle-o"></i>افزودن والد اسلایدر جدید</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>مدیریت برچسب ها</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-right pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('tag.index')}}"><i class="fa fa-circle-o"></i>لیست برچسب ها</a></li>
            <li><a href="{{route('tag.create')}}"><i class="fa fa-circle-o"></i>افزودن برچسب جدید</a></li>
        </ul>
      </li>



    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
