@extends('public.layouts.public')
@section('title', 'Shop')
    @section('content')
        <section class="banner-area organic-breadcrumb">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Products</h1>
                        <nav class="d-flex align-items-center">
                            <a href="/">Home<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#">Products</a>
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
                            <div class="head">Categories</div>
                            <form action="#">
                                <ul>
                                    @foreach($categories as $category)
                                        <li class="filter-list"><a href="/shop/category/{{ $category->id }}" id="black" name="color"><label for="black">{{ $category->category }}</label></a></li>
                                    @endforeach
                                </ul>
                            </form>
                        </div>
                        <div class="common-filter">
                            <div class="head">Companies</div>
                            <form action="#">
                                <ul>
                                    @foreach($companies as $company)
                                        <li class="filter-list"><a href="/shop/company/{{ $company->id }}" id="black" name="color"><label for="black">{{ $company->company }}</label></a></li>
                                    @endforeach
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
                            @foreach($pro_ducts as $product)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-product">
                                        @if($product->img_1 != NULL)
                                            <img class="img-fluid" src="{{ Storage::url($product->img_1) }}" style="height: 250px; width: 300px" alt="">
                                        @else
                                            <img class="img-fluid" src="{{ asset('images/no.jpg') }}" style="height: 250px; width: 300px" alt="">
                                        @endif
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
                            @endforeach
                        </div>
                    </section>
                    <!-- End Best Seller -->
                    <!-- Start Filter Bar -->
                    <div class="filter-bar d-flex flex-wrap align-items-center" style="margin: 10px">
                        {{ $pro_ducts->links() }}
                    </div>
                    <!-- End Filter Bar -->
                </div>
            </div>
        </div>

    @endsection