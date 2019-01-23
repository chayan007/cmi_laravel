@extends('public.layouts.public')
@section('title', 'Product')
    @section('content')
        <!-- Start Banner Area -->
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Product Details Page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                            <a href="single-product.html">product-details</a>
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
                                <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                            </div>
                            <div class="single-prd-item">
                                <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                            </div>
                            <div class="single-prd-item">
                                <img class="img-fluid" src="img/category/s-p1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="s_product_text">
                            <h3>Faded SkyBlu Denim Jeans</h3>
                            <h2>INR. 149.99</h2>
                            <ul class="list">
                                <li><a class="active" href="#"><span>Category</span> : Household</a></li>
                                <li><a href="#"><span>Company</span> : In Stock</a></li>
                            </ul>
                            <div class="card_area d-flex align-items-center" style="margin-top: 40px">
                                <a class="primary-btn" href="#">Brochure</a>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
                                <a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
                            </div>
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
                        <p>Beryl Cook is one of Britain’s most talented and amusing artists .Beryl’s pictures feature women of all shapes
                            and sizes enjoying themselves .Born between the two world wars, Beryl Cook eventually left Kendrick School in
                            Reading at the age of 15, where she went to secretarial school and then into an insurance office. After moving to
                            London and then Hampton, she eventually married her next door neighbour from Reading, John Cook. He was an
                            officer in the Merchant Navy and after he left the sea in 1956, they bought a pub for a year before John took a
                            job in Southern Rhodesia with a motor company. Beryl bought their young son a box of watercolours, and when
                            showing him how to use it, she decided that she herself quite enjoyed painting. John subsequently bought her a
                            child’s painting set for her birthday and it was with this that she produced her first significant work, a
                            half-length portrait of a dark-skinned lady with a vacant expression and large drooping breasts. It was aptly
                            named ‘Hangover’ by Beryl’s husband and</p>
                        <p>It is often frustrating to attempt to plan meals that are designed for one. Despite this fact, we are seeing
                            more and more recipe books and Internet websites that are dedicated to the act of cooking for one. Divorce and
                            the death of spouses or grown children leaving for college are all reasons that someone accustomed to cooking for
                            more than one would suddenly need to learn how to adjust all the cooking practices utilized before into a
                            streamlined plan of cooking that is more efficient for one person creating less</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Product Description Area =================-->

    @endsection