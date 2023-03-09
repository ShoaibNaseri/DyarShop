@extends('front.app')
@section('title')
Products
@endsection
@section('content')
<section class="bg-half-170 bg-light d-table w-100">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading">
                    <h4 class="title mb-0"> All Products </h4>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item"><a href="{{'home'}}">Dyar.Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ul>
            </nav>
        </div>
    </div> <!--end container-->
</section><!--end section-->
<div class="position-relative">
    <div class="shape overflow-hidden text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
    </div>
</div>
<!-- Hero End -->

<!-- Start Products -->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="card border-0 sidebar sticky-bar">
                    <div class="card-body p-0">
                        <!-- SEARCH -->
                        <div class="widget">
                            <form role="search" method="get">
                                <div class="input-group mb-3 border rounded">
                                    <input type="text" id="s" name="s" class="form-control border-0" placeholder="Search Keywords...">
                                    <button type="submit" class="input-group-text bg-white border-0" id="searchsubmit"><i class="uil uil-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <!-- SEARCH -->

                        <!-- Categories -->
                        <div class="widget mt-4 p-2 border-bottom">
                            <h5 class="widget-title">Categories</h5>
                            <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                @foreach($categories as $category)
                                <li><a href="jvascript:void(0)">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Categories -->
                    </div>
                </div>
            </div><!--end col-->

            <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7">
                        <div class="section-title">
                            <h5 class="mb-0">Showing 1–10 of {{$count}} results</h5>
                        </div>
                    </div><!--end col-->


                </div><!--end row-->

                <div class="row">
                    @foreach($products as $product)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative">
                            <ul class="label list-unstyled mb-0">
                                <li><a href="javascript:void(0)" class="badge badge-link rounded-pill bg-success">Featured</a></li>
                            </ul>
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="{{$product->link}}"><img src="{{url('storage/cms/images/products')}}//{{$product->image}}" class="img-fluid" alt=""></a>
                                <a href="{{$product->link}}" class="overlay-work">
                                    <img src="images/shop/product/s-1.jpg" class="img-fluid" alt="">
                                </a>

                            </div>
                            <div class="card-body content pt-4 p-2">
                                <a href="shop-product-detail.html" class="text-dark product-name h6">{{$product->name}}</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-dark small fst-italic mb-0 mt-1">${{$product->price}} </h6>
                                    <ul class="list-unstyled text-warning mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    @endforeach
                    <!-- PAGINATION START -->
                    <div class="col-12 mt-4 pt-2">
                        <ul class="pagination justify-content-center mb-0">
                            {{$products->links()}}
                        </ul>
                    </div><!--end col-->
                    <!-- PAGINATION END -->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Products -->






@endsection