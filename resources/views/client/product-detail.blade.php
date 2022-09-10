@extends('layout.master')
@section('title', ' Chi tiết sản phẩm')

@section('content')

<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >

        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">


 <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- title of site -->
        <title>Furniture</title>

        <!-- For favicon png -->
		<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!--linear icon css-->
		<link rel="stylesheet" href="assets/css/linearicons.css">

		<!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css">

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css" >

        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css">


<style>
            .pd-wrap {
        padding: 40px 0;
        font-family: 'Poppins', sans-serif;
        }
        .heading-section {
        text-align: center;
        margin-bottom: 20px;
        }
        .sub-heading {
        font-family: 'Poppins', sans-serif;
            font-size: 12px;
            display: block;
            font-weight: 600;
            color: #2e9ca1;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .heading-section h2 {
        font-size: 32px;
            font-weight: 500;
            padding-top: 10px;
            padding-bottom: 15px;
        font-family: 'Poppins', sans-serif;
        }
        .user-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            position: relative;
        min-width: 80px;
        background-size: 100%;
        }
        .carousel-testimonial .item {
        padding: 30px 10px;
        }
        .quote {
        position: absolute;
            top: -23px;
            color: #2e9da1;
            font-size: 27px;
        }
        .name {
        margin-bottom: 0;
            line-height: 14px;
            font-size: 17px;
            font-weight: 500;
        }
        .position {
        color: #adadad;
        font-size: 14px;
        }
        .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        outline: none;
        height: 25px;
        }
        .owl-nav button svg {
        width: 25px;
        height: 25px;
        }
        .owl-nav button.owl-prev {
        left: 25px;
        }
        .owl-nav button.owl-next {
        right: 25px;
        }
        .owl-nav button span {
        font-size: 45px;
        }
        .product-thumb .item img {
        height: 100px;
        }
        .product-name {
        font-size: 22px;
        font-weight: 500;
        line-height: 22px;
        margin-bottom: 4px;
        }
        .product-price-discount {
        font-size: 22px;
            font-weight: 400;
            padding: 10px 0;
            clear: both;
        }
        .product-price-discount span.line-through {
        text-decoration: line-through;
            margin-left: 10px;
            font-size: 14px;
            vertical-align: middle;
            color: #a5a5a5;
        }
        .display-flex {
        display: flex;
        }
        .align-center {
        align-items: center;
        }
        .product-info {
        width: 100%;
        }
        .reviews-counter {
            font-size: 13px;
        }
        .reviews-counter span {
        vertical-align: -2px;
        }
        .rate {
            float: left;
            padding: 0 10px 0 0;
        }
        .rate:not(:checked) > input {
            position:absolute;
            top:-9999px;
        }
        .rate:not(:checked) > label {
            float: right;
            width: 15px;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 21px;
            color:#ccc;
        margin-bottom: 0;
        line-height: 21px;
        }
        .rate:not(:checked) > label:before {
            content: '\2605';
        }
        .rate > input:checked ~ label {
            color: #ffc700;
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
        .product-dtl p {
        font-size: 14px;
        line-height: 24px;
        color: #7a7a7a;
        }
        .product-dtl .form-control {
        font-size: 15px;
        }
        .product-dtl label {
        line-height: 16px;
        font-size: 15px;
        }
        .form-control:focus {
        outline: none;
        box-shadow: none;
        }
        .product-count {
        margin-top: 15px;
        }
        .product-count .qtyminus,
        .product-count .qtyplus {
        width: 34px;
            height: 34px;
            background: #212529;
            text-align: center;
            font-size: 19px;
            line-height: 36px;
            color: #fff;
            cursor: pointer;
        }
        .product-count .qtyminus {
        border-radius: 3px 0 0 3px;
        }
        .product-count .qtyplus {
        border-radius: 0 3px 3px 0;
        }
        .product-count .qty {
        width: 60px;
        text-align: center;
        }
        .round-black-btn {
        border-radius: 4px;
            background: #212529;
            color: #fff;
            padding: 7px 45px;
            display: inline-block;
            margin-top: 20px;
            border: solid 2px #212529;
            transition: all 0.5s ease-in-out 0s;
        }
        .round-black-btn:hover,
        .round-black-btn:focus {
        background: transparent;
        color: #212529;
        text-decoration: none;
        }

        .product-info-tabs {
        margin-top: 25px;
        }
        .product-info-tabs .nav-tabs {
        border-bottom: 2px solid #d8d8d8;
        }
        .product-info-tabs .nav-tabs .nav-item {
        margin-bottom: 0;
        }
        .product-info-tabs .nav-tabs .nav-link {
        border: none;
        border-bottom: 2px solid transparent;
        color: #323232;
        }
        .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
        border: none;
        }
        .product-info-tabs .nav-tabs .nav-item.show .nav-link,
        .product-info-tabs .nav-tabs .nav-link.active,
        .product-info-tabs .nav-tabs .nav-link.active:hover {
        border: none;
        border-bottom: 2px solid #d8d8d8;
        font-weight: bold;
        }
        .product-info-tabs .tab-content .tab-pane {
        padding: 30px 20px;
        font-size: 15px;
        line-height: 24px;
        color: #7a7a7a;
        }
        .review-form .form-group {
        clear: both;
        }
        .mb-20 {
        margin-bottom: 20px;
        }

        .review-form .rate {
        float: none;
        display: inline-block;
        }
        .review-heading {
        font-size: 24px;
            font-weight: 600;
            line-height: 24px;
            margin-bottom: 6px;
            text-transform: uppercase;
            color: #000;
        }
        .review-form .form-control {
        font-size: 14px;
        }
        .review-form input.form-control {
        height: 40px;
        }
        .review-form textarea.form-control {
        resize: none;
        }
        .review-form .round-black-btn {
        text-transform: uppercase;
        cursor: pointer;
        }
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"><div class="pd-wrap">
    {{-- <div class="container">
          <div class="heading-section">
              <h2>Product Details</h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div id="slider" class="owl-carousel product-slider">
            <div class="item">
                <img src="{{asset($product->avatar)}}" />            </div>

          </div>
          <div id="thumb" class="owl-carousel product-thumb">

          </div>
            </div>
            <div class="col-md-6">
              <div class="product-dtl">
                <div class="product-info">
                  <div class="product-name">{{$product->name}}</div>
                  <div class="reviews-counter">
                <div class="rate">
                    <input type="radio" id="star5" name="rate" value="5" checked />
                    <label for="star5" title="text">5 stars</label>
                    <input type="radio" id="star4" name="rate" value="4" checked />
                    <label for="star4" title="text">4 stars</label>
                    <input type="radio" id="star3" name="rate" value="3" checked />
                    <label for="star3" title="text">3 stars</label>
                    <input type="radio" id="star2" name="rate" value="2" />
                    <label for="star2" title="text">2 stars</label>
                    <input type="radio" id="star1" name="rate" value="1" />
                    <label for="star1" title="text">1 star</label>
                  </div>
                <span>3 Reviews</span>
              </div>
                  <div class="product-price-discount"><span>{{$product->price}}</span><span class="line-through">$29.00</span></div>
                </div>
                <p>{{$product->desc}}</p>
                <div class="row">
                  <div class="col-md-6">
                    <label for="size">Size</label>
                <select id="size" name="size" class="form-control">
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
                  </div>
                  <div class="col-md-6">
                    <label for="color">Color</label>
                <select id="color" name="color" class="form-control">
                  <option>Blue</option>
                  <option>Green</option>
                  <option>Red</option>
                </select>
                  </div>
                </div>
                <div class="product-count">
                  <label for="size">Quantity</label>
                  <form action="#" class="display-flex">
                  <div class="qtyminus">-</div>
                  <input type="text" name="quantity" value="1" class="qty">
                  <div class="qtyplus">+</div>
              </form>
              <a href="#" class="round-black-btn">Add to Cart</a>
                </div>
              </div>
            </div>
          </div>
          <div class="product-info-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (0)</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
             <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
              <div class="review-heading">REVIEWS</div>
              <p class="mb-20">There are no reviews yet.</p>
              <form class="review-form">
                  <div class="form-group">
                    <label>Your rating</label>
                    <div class="reviews-counter">
                  <div class="rate">
                      <input type="radio" id="star5" name="rate" value="5" />
                      <label for="star5" title="text">5 stars</label>
                      <input type="radio" id="star4" name="rate" value="4" />
                      <label for="star4" title="text">4 stars</label>
                      <input type="radio" id="star3" name="rate" value="3" />
                      <label for="star3" title="text">3 stars</label>
                      <input type="radio" id="star2" name="rate" value="2" />
                      <label for="star2" title="text">2 stars</label>
                      <input type="radio" id="star1" name="rate" value="1" />
                      <label for="star1" title="text">1 star</label>
                  </div>
                </div>
              </div>
                  <div class="form-group">
                    <label>Your message</label>
                    <textarea class="form-control" rows="10"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Name*">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="" class="form-control" placeholder="Email Id*">
                      </div>
                    </div>
                  </div>
                  <button class="round-black-btn">Submit Review</button>
                </form>
            </div>
        </div>
      </div>

    </div> --}}
  </div>






<html lang="en">

<head>
  <title>Harvest vase</title>
  <link href="https://fonts.googleapis.com/css?family=Bentham|Playfair+Display|Raleway:400,500|Suranna|Trocchi" rel="stylesheet">
</head>
<style>
            body {
        background-color: #fdf1ec;
        }

        .wrapper {
        height: 420px;
        width: 654px;
        margin: 50px auto;
        border-radius: 7px 7px 7px 7px;
        /* VIA CSS MATIC https://goo.gl/cIbnS */
        -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        }

        .product-img {
        float: left;
        height: 420px;
        width: 327px;
        }

        .product-img img {
        border-radius: 7px 0 0 7px;
        }

        .product-info {
        float: left;
        height: 420px;
        width: 327px;
        border-radius: 0 7px 10px 7px;
        background-color: #ffffff;
        }

        .product-text {
        height: 300px;
        width: 327px;
        }

        .product-text h1 {
        margin: 0 0 0 38px;
        padding-top: 52px;
        font-size: 34px;
        color: #474747;
        }

        .product-text h1,
        .product-price-btn p {
        font-family: 'Bentham', serif;
        }

        .product-text h2 {
        margin: 0 0 47px 38px;
        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
        letter-spacing: 0.2em;
        }

        .product-text p {
        height: 125px;
        margin: 0 0 0 38px;
        font-family: 'Playfair Display', serif;
        color: #8d8d8d;
        line-height: 1.7em;
        font-size: 15px;
        font-weight: lighter;
        overflow: hidden;
        }

        .product-price-btn {
        height: 103px;
        width: 327px;
        margin-top: 17px;
        position: relative;
        }

        .product-price-btn p {
        display: inline-block;
        position: absolute;
        top: -13px;
        height: 50px;
        font-family: 'Trocchi', serif;
        margin: 0 0 0 38px;
        font-size: 28px;
        font-weight: lighter;
        color: #474747;
        }

        span {
        display: inline-block;
        height: 50px;
        font-family: 'Suranna', serif;
        font-size: 34px;
        }

        .product-price-btn button {
        float: right;
        display: inline-block;
        height: 50px;
        width: 176px;
        margin: 0 40px 0 16px;
        box-sizing: border-box;
        border: transparent;
        border-radius: 60px;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #ffffff;
        background-color: #9cebd5;
        cursor: pointer;
        outline: none;
        }

        .product-price-btn button:hover {
        background-color: #79b0a1;
        }
</style>

<body>
  <div class="wrapper">
    <div class="product-img">
      <img src="{{asset($product->avatar)}}" style="width: 100%"  >
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>{{$product->name}}</h1>
        <h2>{{$product->category_id}}</h2>
        <p>{{$product->desc}}</p>
      </div>
      <div class="product-price-btn">
        <p><span>{{$product->price}}</span>đ</p>
        <br>
        <form action="{{route('cart')}}" method="POST">
            @csrf
            <div  class="product-count" style="margin-left: 30px">
                @if(Auth::check())
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            @endif
                <input type="text" value="{{$product->id}}" name="product_id" hidden>
                <form action="#" class="display-flex">
                    <input min="1"
                    max="100" value="{{ $product['quantity'] }}" type="number"
                    name="quantity"></td>
            </div>


            <button type="submit">buy now</button>
        </form>

      </div>
    </div>

  </div>

</body>

</html>

@endsection
