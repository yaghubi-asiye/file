@extends('layouts.mastermain')

@section('content')


<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{$post->title}}</h2>
                <p> 
                </p>
                <p>
                    <img src="{{$post->image}}" alt="" class="img-fluid">
                </p>
                <p>
                    {{ $post->description }}
                </p>
               

              
                <div class="about-author d-flex p-4 bg-light">
                    <div class="bio align-self-md-center ml-4">
                        <img src="/pics/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
                    </div>
                    <div class="desc align-self-md-center">
                        <h3>{{$post->user->name}}</h3>
                        <p>
                            {{ Verta::instance($post->created_at)->format('%B %d، %Y') }}
                            {{ substr(strip_tags($post->description),0,200) }}{{strlen($post->description)>300 ? "..." : ""}}
                        </p>
                    </div>
                </div>
              
            </div> <!-- .col-md-8 -->

           <!-- Sidebar-->
           <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
                <form action="#" class="search-form">
                    <div class="form-group">
                        <span class="icon ion-ios-search"></span>
                        <input type="text" class="form-control" placeholder="جست و جو...">
                    </div>
                </form>
            </div>

         
            <div class="sidebar-box ftco-animate">
                <h3 class="heading">محصولات</h3>
                <ul class="categories">
                    <?php foreach ($cats as $category): ?>
                    <li><a href="{{ route('cat.show',['cat'=>$category->id]) }}">{{$category->fa_name}}</a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="sidebar-box ftco-animate">
                <h3 class="heading">آخرین پست ها</h3>
                @foreach ($latest as $item)
                <div class="block-21 mb-4 d-flex">
                    <a href="{{route('post.show',['post'=>$item->id])}}" class="blog-img ml-4" style="background-image: url({{$item->image}});"></a>
                    <div class="text">
                        <h3 class="heading-1">
                            <a href="#">
                           {{$item->title}}
                        </a>
                        </h3>
                        <div class="meta">
                            <div><a href="#"><span class="icon-calendar"></span>{{ Verta::instance($item->created_at)->format('%B %d، %Y') }}</a></div>
                            <div><a href="#"><span class="icon-person"></span> {{$item->user->name}}</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
               
               
            </div>

           
         
        </div>

        </div>
    </div>
</section> <!-- End section -->


@endsection