@extends('front.app')
@section('title')
Scholer|About
@endsection
@section('navStyle')
nav-light
@endsection
@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('front/assets/images/hotel/bguni5.jpg');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Aboutus </h2>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Start working with Scholar that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="position-breadcrumb">
            <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-white rounded shadow mb-0 px-4 py-2">
                    <li class="breadcrumb-item active" aria-current="page">About Scholars</li>
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

<!-- Our Story -->
<section class="section">
    <div class="container">
        <div class="row align-items-center" id="counter">
            <div class="col-md-6">
                <img src="{{url('front/assets')}}/images/company/about2.png" class="img-fluid" alt="">
            </div><!--end col-->

            <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                <div class="ms-lg-4">
                    <div class="d-flex mb-4">
                        <span class="text-primary h1 mb-0"><span class="counter-value display-1 fw-bold" data-target="4">0</span>+</span>
                        <span class="h6 align-self-end ms-2">Years of<br> Experience</span>
                    </div>
                    <div class="section-title">
                        <h4 class="title mb-4">Who we are ?</h4>
                        <p class="text-muted">Start working with <span class="text-primary fw-bold">Scholars</span> that can provide everything you need to generate awareness, drive traffic, connect. Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy texts have been in use by typesetters since the 16th century.</p>
                        <a href="{{route('contact')}}" class="btn btn-primary mt-3">Contact us</a>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                <img src="{{url('front/assets')}}/images/client/amazon.svg" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                <img src="{{url('front/assets')}}/images/client/google.svg" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                <img src="{{url('front/assets')}}/images/client/lenovo.svg" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                <img src="{{url('front/assets')}}/images/client/paypal.svg" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                <img src="{{url('front/assets')}}/images/client/shopify.svg" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->

            <div class="col-lg-2 col-md-2 col-6 text-center pt-4">
                <img src="{{url('front/assets')}}/images/client/spotify.svg" class="avatar avatar-ex-sm" alt="">
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->

<!-- What we do ? -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">

                    <h4 class="title mb-4">How do we works ?</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start working with <span class="text-primary fw-bold">Scholar</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach($works as $work)
            <div class="col-md-4 mt-4 pt-2">
                <div class="card features feature-clean work-process bg-transparent none-arrow border-0 text-center">
                    <div class="icons text-primary text-center mx-auto">
                        <i class="uil uil-presentation-edit d-block rounded h3 mb-0">{{$num++}}</i>
                    </div>

                    <div class="card-body">
                        <h5 class="text-dark">{{$work->title}}</h5>
                        <p class="text-muted mb-0">{{$work->description}}</p>
                    </div>
                </div>
            </div><!--end col-->
            @endforeach


        </div><!--end row-->
    </div><!--end container-->



    <div class="container mt-100 mt-60"> <!-- What we do  -->
        <div class="row align-items-end mb-4 pb-4">
            <div class="col-md-8">
                <div class="section-title text-center text-md-start">
                    <h4 class="title mb-4">What we do ?</h4>
                    <p class="text-muted mb-0 para-desc">Start working with <span class="text-primary fw-bold">Scholars</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                </div>
            </div><!--end col-->

            <div class="col-md-4 mt-4 mt-sm-0">
                <div class="text-center text-md-end">
                    <a href="javascript:void(0)" class="text-primary h6">See More <i class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 mb-4 pb-2">
                <div class="card blog border-0 shadow rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <img src="{{url('storage/cms/images')}}/service/{{$service->image}}" class="img-fluid" alt="">

                    </div>
                    <div class="card-body content">

                        <a href="shop-blog-detail.html" class="text-dark title h5">{{$service->title}}</a>
                        <p class="text-muted small">{{$service->description}}</p>

                    </div>
                </div>
            </div><!--end col-->
            @endforeach
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->


<!-- Start -->
<section class="section bg-light pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="video-solution-cta position-relative" style="z-index: 1;">
                    <div class="position-relative">
                        <img src="{{url('front/assets')}}/images/cta-bg.jpg" class="img-fluid rounded-md shadow-lg" alt="">
                        <div class="play-icon">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox">
                                <i class="mdi mdi-play text-primary rounded-circle bg-white shadow-lg"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content mt-md-4 pt-md-2">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-center">
                                <div class="row align-items-center">
                                    <div class="col-md-6 mt-4 pt-2">
                                        <div class="section-title text-md-start">

                                            <h4 class="title text-white title-dark mb-0">Meet our Experience <br> Team Members</h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12 mt-4 pt-md-2">
                                        <div class="section-title text-md-start">
                                            <p class="text-white-50 para-desc">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.
                                                tart working with Landrick that can provide everything you need to generate awareness, drive traffic, connect
                                                tart working with Landrick that can provide everything you need to generate awareness, drive traffic, connect
                                                tart working with Landrick that can provide everything you need to generate awareness, drive traffic, connect
                                                tart working with Landrick that can provide everything you need to generate awareness, drive traffic, connect
                                            </p>
                                            <a href="javascript:void(0)" class="text-white title-dark">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end col-->
        </div><!--end row -->
        <div class="feature-posts-placeholder bg-primary bg-gradient"></div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->







@endsection