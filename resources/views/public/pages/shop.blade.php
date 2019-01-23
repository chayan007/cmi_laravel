@extends('public.layouts.public')
@section('title', 'Shop')
    @section('content')
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Shop Category page</h1>
                        <nav class="d-flex align-items-center">
                            <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Shop<span class="lnr lnr-arrow-right"></span></a>
                            <a href="category.html">Fashon Category</a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Banner Area -->
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-filter mt-50">
                        <div class="top-filter-head">Product Filters</div>
                        <div class="common-filter">
                            <div class="head">Brands</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Color</div>
                            <form action="#">
                                <ul>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
                                            Leather<span>(29)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
                                            with red<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
                                    <li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <!-- Start Best Seller -->
                    <section class="lattest-product-area pb-40 category-list">
                        <div class="row">
                            <!-- single product -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-product">
                                    <img class="img-fluid" src="img/product/p1.jpg" alt="">
                                    <div class="product-details">
                                        <h6>addidas New Hammer sole
                                            for Sports person</h6>
                                        <div class="price">
                                            <h6>$150.00</h6>
                                            <h6 class="l-through">$210.00</h6>
                                        </div>
                                        <div class="prd-bottom">

                                            <a href="" class="social-info">
                                                <span class="ti-bag"></span>
                                                <p class="hover-text">add to bag</p>
                                            </a>
                                            <a href="" class="social-info">
                                                <span class="lnr lnr-heart"></span>
                                                <p class="hover-text">Wishlist</p>
                                            </a>
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
                        </div>
                    </section>
                    <!-- End Best Seller -->
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center">
                        <div class="pagination">
                            <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                            <a href="#">6</a>
                            <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <!-- End Filter Bar -->
                </div>
            </div>
        </div>

    @endsection