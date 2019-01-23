@extends('public.layouts.public')
@section('title', 'Home')
    @section('content')
        <!-- start banner Area -->
        <section class="banner-area">
            <div class="container">
                <div class="row fullscreen align-items-center justify-content-start">
                    <div class="col-lg-12">
                        <div class="active-banner-slider owl-carousel">
                            <!-- single-slide -->
                            <div class="row single-slide align-items-center d-flex">
                                <div class="col-lg-5 col-md-6">
                                    <div class="banner-content">
                                        <h1>Core Medical <br>Instruments!</h1>
                                        <p>We are the best medical instruments dealer all over Asia. Our 24 x 7 technical support and
                                        most hi-tech machine quality has brought us wonders.</p>
                                        <div class="add-bag d-flex align-items-center">
                                            {{--<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>--}}
                                            {{--<span class="add-text text-uppercase">Add to Bag</span>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-img">
                                        <img class="img-fluid" style="height: 600px; margin-top: 40px;" src="{{ asset('img/banner/banner1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single-slide -->
                            <div class="row single-slide align-items-center d-flex">
                                <div class="col-lg-5">
                                    <div class="banner-content">
                                        <h1>Core Medical <br>Accessories & Disposables!</h1>
                                        <p>We also serve high quality needs for every medical environments. We are on a mission
                                            to upgrade every medical environments as to increase comfort to patient and management.</p>
                                        <div class="add-bag d-flex align-items-center">
                                            {{--<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>--}}
                                            {{--<span class="add-text text-uppercase">Add to Bag</span>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-img">
                                        <img class="img-fluid" style="height: 500px; margin-top: 60px" src="{{ asset('img/banner/banner.gif') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- start features Area -->
        <section class="features-area section_gap">
            <div class="container">
                <div class="row features-inner">
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('img/features/f-icon1.png') }}" alt="">
                            </div>
                            <h6>Worldwide Shipping</h6>
                            <p>Shipping on all order</p>
                        </div>
                    </div>
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('img/features/f-icon2.png') }}" alt="">
                            </div>
                            <h6>Technical Services</h6>
                            <p>Best technical team to assist you.</p>
                        </div>
                    </div>
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('img/features/f-icon3.png') }}" alt="">
                            </div>
                            <h6>24/7 Support</h6>
                            <p>We are happy to talk to you</p>
                        </div>
                    </div>
                    <!-- single features -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-features">
                            <div class="f-icon">
                                <img src="{{ asset('img/features/f-icon4.png') }}" alt="">
                            </div>
                            <h6>Secure Payment</h6>
                            <p>We accept every digital payments</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end features Area -->

        <!-- Start category Area -->
        <section class="category-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('img/category/c1.jpg') }}" alt="">
                                    <a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">OT Room Instruments</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('img/category/c2.jpg') }}" alt="">
                                    <a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Radiology</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('img/category/c3.png') }}" alt="">
                                    <a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Accessories & Disposables</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="single-deal">
                                    <div class="overlay"></div>
                                    <img class="img-fluid w-100" src="{{ asset('img/category/c4.jpg') }}" alt="">
                                    <a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
                                        <div class="deal-details">
                                            <h6 class="deal-title">Medical Furnitures</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-deal">
                            <div class="overlay"></div>
                            <img class="img-fluid w-100" src="{{ asset('img/category/c5.jpg') }}" alt="">
                            <a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
                                <div class="deal-details">
                                    <h6 class="deal-title">Neurology</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End category Area -->

        <!-- start product Area -->
        <section class="owl-carousel active-product-area section_gap">
            <!-- single product slide -->
            <div class="single-product-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h1>Latest Products</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- single product -->
                        @foreach($products as $product)
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="{{ Storage::url($product->img_1) }}" height="200px" width="350px" alt="">
                                    <div class="product-details">
                                        <h6>{{ $product->name }}</h6>
                                        <div class="price">
                                            @if($product->price !=0)
                                                <h6>{{ $product->price }}</h6>
                                                <h6 class="l-through">@php echo ($product->price + ($product->price * 1/5)) @endphp</h6>
                                            @else
                                                <h6 style="font-size: 13px; font-family:'Archivo Narrow'">Contact for Price</h6>
                                            @endif
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="{{ Storage::url($product->brochure) }}" class="social-info">
                                                <span class="lnr lnr-sync"></span>
                                                <p class="hover-text">Brochure</p>
                                            </a>
                                            <a href="/shop/{{ $product->slug }}" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">Details</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($loop->iteration == 8)
                                @break
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- single product slide -->
            <div class="single-product-slider">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <div class="section-title">
                                <h1>Latest Products</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore
                                    magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- single product -->
                        @foreach($products as $product)
                            @if($loop->iteration < 9)
                                @continue
                            @endif
                            <div class="col-lg-3 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="{{ Storage::url($product->img_1) }}" height="200px" width="350px" alt="">
                                    <div class="product-details">
                                        <h6>{{ $product->name }}</h6>
                                        <div class="price">
                                            @if($product->price !=0)
                                                <h6>{{ $product->price }}</h6>
                                                <h6 class="l-through">@php echo ($product->price + ($product->price * 1/5)) @endphp</h6>
                                            @else
                                                <h6 style="font-size: 13px; font-family:'Archivo Narrow'">Contact for Price</h6>
                                            @endif
                                        </div>
                                        <div class="prd-bottom">
                                            <a href="" class="social-info">
                                                <span class="lnr lnr-sync"></span>
                                                <p class="hover-text">compare</p>
                                            </a>
                                            <a href="" class="social-info">
                                                <span class="lnr lnr-move"></span>
                                                <p class="hover-text">view more</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- end product Area -->

    @endsection