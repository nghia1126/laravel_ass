@extends('layout.master')

@section('title', 'Cart')
@section('title', 'Cart')
@section('content')
    <!-- ...:::: Start Cart Section:::... -->
    <!-- ...:::: End Cart Section:::... -->
    <!-- Start Footer Section -->

    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        .ui-w-40 {
            width: 40px !important;
            height: auto;
        }

        .card-header h2 {
            text-align: center;
            color: red;
            margin-top: 30px;
            font-size: 24px;
        }

        .card {
            box-shadow: 0 1px 15px 1px rgba(52, 40, 104, .08);
        }

        .ui-product-color {
            display: inline-block;
            overflow: hidden;
            margin: .144em;
            width: .875rem;
            height: .875rem;
            border-radius: 10rem;
            -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.15) inset;
            vertical-align: middle;
        }
    </style>
    <div class="container px-3 my-5 clearfix">
        <!-- Shopping cart table -->
        <div class="card">
            <div class="card-header">
                <h2>Shopping Cart</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered m-0">
                        <thead>
                            <tr>
                                <!-- Set columns width -->
                                <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                                <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                                <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                                <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#"
                                        class="shop-tooltip float-none text-light" title=""
                                        data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                            </tr>
                        </thead>
                        <tbody>

                            <!-- Start Cart Single Item-->
                            @foreach ($carts as $details)
                                <?php
                                $total = 0;
                                $total += $details['price'] * $details['quantity'];

                                ?>
                                <tr>


                                </tr>

                                <tr>
                                    <td class="p-4">
                                        <div class="media align-items-center">
                                            <img src="{{ asset($details['avatar']) }}"
                                                class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                            <div class="media-body">
                                                <a href="#" class="d-block text-dark">{{ $details['name'] }}</a>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-right font-weight-semibold align-middle p-4">
                                        {{ number_format($details['price']) }}đ</td>
                                    <td class="align-middle p-4"><label>Quantity</label> <input min="1"
                                            max="100" value="{{ $details['quantity'] }}" type="number"
                                            name="quantity"></td>
                                    <td class="text-right font-weight-semibold align-middle p-4">
                                        {{ number_format($total) }}đ</td>
                                    <p hidden>{{ $totalAll += $details['price'] * $details['quantity'] }}</p>
                                    <form action="{{ route('destroy', $details->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <td class="text-center align-middle px-0"><button type="submit"
                                                class="shop-tooltip close float-none text-danger" title=""
                                                data-original-title="Remove">×</button></td>

                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                            <div class="coupon_area">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-lg-6 col-md-6">
                                            <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                                                <h3>Cart Totals</h3>
                                                <div class="coupon_inner">
                                                    <div class="cart_subtotal">
                                                        <p>Subtotal</p>
                                                        <p class="cart_amount">${{ number_format($totalAll) }}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </tbody>
                    </table>
                </div>
                <!-- / Shopping cart table -->

                <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
                    <div class="mt-4">
                        <label class="text-muted font-weight-normal">Code sale</label>
                        <input type="text" placeholder="ABC" class="form-control">
                    </div>
                    <div class="d-flex">

                        <div class="text-right mt-4">
                            <label class="text-muted font-weight-normal m-0">Total price</label>
                            <div class="text-large"><strong>{{ number_format($totalAll) }}</strong></div>
                        </div>
                    </div>
                </div>

                <div class="float-right">
                    <a href="{{ route('product') }}"> <button class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to
                            shopping</button></a>
                    {{-- <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button> --}}
                    <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
                </div>

            </div>
        </div>
    </div>

@endsection
