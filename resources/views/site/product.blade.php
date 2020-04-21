@extends('layouts.mastermain')

@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('/pics/product.jpg');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">خانه</a></span> </p>
        <h1 class="mb-0 bread">محصولات تکی</h1>
      </div>
    </div>
  </div>
</div>

{{-- ========================flash message ========================== --}}
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $message }}</strong>
</div>
@endif
@if ($errors->any()))
@foreach ($errors->all() as $item)
<div class="alert alert-danger alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{ $item }}</strong>
</div>
@endforeach
@endif

<section class="ftco-section">
  <div class="container">
    <div class="row">

      <div class="col-lg-6 mb-5 ftco-animate">
        <a href="" class="image-popup"><img src="/{{$pro->image}}" class="img-fluid" alt="{{$pro->name}}"></a>
      </div>
      <div class="col-lg-6 product-details pl-md-5 ftco-animate">
        <h3>{{$pro->name}}</h3>
        <div class="rating d-flex">
          <p class="text-left mr-4">
            <a href="#" class="mr-2">5.0</a>
            <a href="#"><span class="ion-ios-star-outline"></span></a>
            <a href="#"><span class="ion-ios-star-outline"></span></a>
            <a href="#"><span class="ion-ios-star-outline"></span></a>
            <a href="#"><span class="ion-ios-star-outline"></span></a>
            <a href="#"><span class="ion-ios-star-outline"></span></a>
          </p>
          <p class="text-left mr-4">
            <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">رای</span></a>
          </p>
          <p class="text-left">
            <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">فروخته شده</span></a>
          </p>
        </div>
        <?php if ($pro->discount != 0): ?>
        <div class="text py-3 pb-4 px-3 text-center">
          <div class="d-flex">
            <div class="pricing">
              <p class="price">
                <s class="text-danger ">
                  <del>
                    <span class="mr-2 price-dc text-danger small"><small>{{$pro->price}}</small></span>
                    <span class="price-dc text-danger"><small>تومان</small> <br></span>
                  </del>
                </s>
                <span class="price-sale ">{{(1-($pro->discount)/100)*$pro->price}}</span>
                <span class="price-sale"> تومان</span>
              </p>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div class="text py-3 pb-4 px-3 text-center">
          <div class="d-flex">
            <div class="pricing">
              <p class="price">
                <span class="price-sale ">{{$pro->price}}</span>
                <span class="price-sale"> تومان</span>
              </p>
            </div>
          </div>
        </div>
        <?php endif; ?>

        <p>{{$pro->body}}</p>
        <div class="row mt-4">
          <div class="col-md-6">
            <div class="form-group d-flex">
              <div class="select-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="" id="" class="form-control">
                  <option value="">کوچک</option>
                  <option value="">متوسط</option>
                  <option value="">بزرگ</option>
                  <option value="">خیلی بزرگ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="w-100"></div>
          <div class="input-group col-md-6 d-flex mb-3">
            <span class="input-group-btn mr-2">
              <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                <i class="ion-ios-remove"></i>
              </button>
            </span>
            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1"
              max="100">
            <span class="input-group-btn ml-2">
              <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                <i class="ion-ios-add"></i>
              </button>
            </span>
          </div>
          <div class="w-100"></div>
          <div class="col-md-12">
            <p style="color: #000;">موجودی 600 کیلوگرم</p>
          </div>
        </div>
        <p><a class="btn btn-black py-3 px-5 add-to-cart" data-id="{{$pro->id}}">اضافه به سبد خرید </a></p>
      </div>
      
      <section class="contact-section bg-light" >

        <?php  $comment = $pro->comments->where('status','0'); ?>
        نظرات ({{count($comment)}})
        @foreach ($comment as $item)
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td style="width: 50%;"><strong><span>{{ $item->user->name }}</span></strong></td>
              <td class="text-right"><span>{{ $item->created_at }}</span></td>
            </tr>
            <tr>
              <td colspan="2">
                <p>
                  {{ $item->comment }}
                </p>

                <div class="rating">
                  <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5"
                    data-step="0.1" value="{{ $pro->UseraverageRating }}" data-size="s" disabled="">

                </div>

              </td>
            </tr>
          </tbody>
        </table>
        @endforeach

        <div class="row block-9" >
          @if(Auth::check())
          <div class="col-md-12 order-md-last d-flex">

            <form action="{{route('commen.store') }}" method="POST" class="bg-white p-5 contact-form">
              @csrf

              <div class="form-group">
                <h2>نظرخودرادررابطه بااین محصول بنویسید</h2>
              </div>
              <div class="form-group">

                <h6>میتونید نظربدون امتیاز بدهید امانمیتونید امتیازبدون نظربدهید</h6>

              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="پیام"></textarea>
              </div>

              <div class="form-group">
                <label class="control-label">رتبه</label>
                <input id="input-1" name="rate" class="rating rating-loading" data-min="0" data-max="5" data-step="1"
                  value="" data-size="xs">
              </div>

              <input type="text" value="{{ $pro->id }}" name="product_id" hidden>
              <input type="text" value="{{ auth()->user()->id }}" name="user_id" hidden>

              <div class="form-group">
                <input type="submit" value="ارسال پیام" class="btn btn-primary py-3 px-5">
              </div>

            </form>

          </div>

          @else
          <h2 class="text-danger">برای ثبت نظرخودابتدالاگین کنید</h2>
          @endif
        </div>
      </section>

    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">محصولات</span>
        <h2 class="mb-4">محصولات مشابه</h2>
        <p>سلامتی خود را تضمین کنید</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">

      @foreach ($mortabet as $key)
      @foreach ($key as $item)
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="product">
          <a href="#" class="img-prod"><img class="img-fluid" style="width:253px;height:290px;" src="/{{$item->image}}" alt="Colorlib Template">
            <span class="status">{{$item->discount}}%</span>
            <div class="overlay"></div>
          </a>
          <div class="text py-3 pb-4 px-3 text-center">
          <h3><a href="#">{{ $item->name }}</a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="price"><span class="mr-2 price-dc">{{$item->price}} تومان</span><span class="price-sale">{{$item->price}}
                    تومان</span></p>
              </div>
            </div>
            <div class="bottom-area d-flex px-3">
              <div class="m-auto d-flex">
                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                  <span><i class="ion-ios-menu"></i></span>
                </a>
                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                  <span><i class="ion-ios-cart"></i></span>
                </a>
                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                  <span><i class="ion-ios-heart"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      @endforeach
      

   

    </div>
  </div>
</section>

@endsection