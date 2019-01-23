@extends('public.layouts.public')
@section('title', $product->name)
    @section('content')
        <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Product Details Page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="/shop">Shop<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">{{ $product->name }}</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->

        <!--================Single Product Area =================-->
        <div class="product_image_area">
            <div class="container">
                <div class="row s_product_inner">
                    <div class="col-lg-6">
                        <div class="s_Product_carousel">
                            <div class="single-prd-item">
                                <img class="img-fluid" src="{{ Storage::url($product->img_1) }}" style="height: 350px; width: 450px;" alt="">
                            </div>
                            <div class="single-prd-item">
                                <img class="img-fluid"
                                     @if($product->img_2 != NULL)
                                        src="{{ Storage::url($product->img_2) }}"
                                     @else
                                        src="{{ asset('images/no.jpg') }}"
                                     @endif
                                style="height: 350px; width: 450px;" alt="">
                            </div>
                            <div class="single-prd-item">
                                <img class="img-fluid"
                                     @if($product->img_3 != NULL)
                                     src="{{ Storage::url($product->img_3) }}"
                                     @else
                                     src="{{ asset('images/no.jpg') }}"
                                     @endif
                                     style="height: 350px; width: 450px;" alt="">                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="s_product_text">
                            <h3>{{ $product->name }}</h3>
                            @if($product->price != 0)
                                <h2>INR. {{ $product->price }}</h2>
                            @else
                                <h2>Contact for Price</h2>
                            @endif
                                <ul class="list">
                                <li><a class="active" href="/shop/category/{{ $categories->where('id', $product->category_id)->first()->id }}"><span>Category</span> : {{ $categories->where('id', $product->category_id)->first()->category }}</a></li>
                                <li><a href="/shop/company/{{ $companies->where('id', $product->company_id)->first()->id }}"><span>Company</span> : {{ $companies->where('id', $product->company_id)->first()->company }}</a></li>
                            </ul>
                            <div class="card_area d-flex align-items-center" style="margin-top: 40px">
                                <a class="primary-btn" href="{{ Storage::url($product->brochure) }}">Brochure</a>
                                <a class="icon_btn" onclick="toggler()"><i class="lnr lnr lnr-diamond"></i></a>
                                <script>
                                    function toggler() {
                                        var x = document.getElementById("MyForm");
                                        if (x.style.display === "none") {
                                            x.style.display = "block";
                                        } else {
                                            x.style.display = "none";
                                        }
                                    }
                                </script>
                            </div>
                            <form id="MyForm" action="/contact" method="post" style="display: none; padding: 20px">
                                @csrf
                                <input type="hidden" name="product" value="{{ $product->name }}">
                                <div class="form-group">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control" name="name" id=""
                                           aria-describedby="helpId" placeholder="Type your name">
                                    <small id="helpId" class="form-text text-muted">Just a name to call you.</small>
                                </div>
                                <div class="form-group">
                                    <label for="">E-Mail</label>
                                    <input type="email" class="form-control" name="email" id=""
                                           aria-describedby="helpId" placeholder="Type your email id">
                                    <small id="helpId" class="form-text text-muted">So that we could mail you important things</small>
                                </div>
                                <div class="form-group">
                                    <label for="">Phone No.</label>
                                    <input type="text" class="form-control" name="phone" id=""
                                           aria-describedby="helpId" placeholder="Type your contact number">
                                    <small id="helpId" class="form-text text-muted">So that we could explain you in details</small>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">DONE !</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->

        <!--================Product Description Area =================-->
        <section class="product_description_area">
            <div class="container">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Description Area =================-->

    @endsection