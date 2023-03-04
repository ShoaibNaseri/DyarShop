@extends('front.app')
@section('title')

DyarShop|Home

@endsection
@section('content')

<section class="home-slider position-relative" id="home">
    <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach($sliders as $index => $slider)

            <div class="carousel-item {{ $index == 0 ? 'active' : ''}}" data-bs-interval="3000">
                <div class="bg-home bg-animation-left d-flex align-items-center" style="background-image:url('storage/cms/images/slider/{{$slider->image}}')">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7">
                                <div class="title-heading position-relative mt-4" style="z-index: 1;">

                                    <h1 class="heading mb-3">{{$slider->title}}</h1>
                                    <p class="para-desc">{{$slider->description}}</p>

                                    <div class="mt-4 pt-2">
                                        <a href="{{route('productIndex')}}" class="btn btn-primary"><i class="uil uil-briefcase"></i> See Products</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach



        </div>
        <a class="carousel-control-prev" href="carouselExampleInterval" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</section><!--end section-->
<!-- Hero End -->

<!-- News Start -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2">
                    <h4 class="title mb-4">Latest Anouncements</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Start With <span class="text-primary fw-bold">DyarShop</span> that can provide everything you need to generate for study abroad</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{url('front/assets')}}/images/blog/01.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="overlay rounded-top"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Masters in Acounting</a></h5> <span class="text-muted small">By: XYZ University</span>

                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like small"><i class="uil uil-heart me-1"></i><span class="small"> Visits (43) </span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i><span class="small"> Location: (Paris) </span></a></li>
                            </ul>
                            <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="uil uil-user"></i> by XY University</small>
                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{url('front/assets')}}/images/blog/03.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="overlay rounded-top"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Masters in Acounting</a></h5> <span class="text-muted small">By: XYZ University</span>

                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like small"><i class="uil uil-heart me-1"></i><span class="small"> Visits (43) </span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i><span class="small"> Location: (Paris) </span></a></li>
                            </ul>
                            <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="uil uil-user"></i> by XY University</small>
                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                    </div>
                </div>
            </div><!--end col-->
            <div class="col-lg-4 col-md-6 mt-4 pt-2">
                <div class="card blog rounded border-0 shadow">
                    <div class="position-relative">
                        <img src="{{url('front/assets')}}/images/blog/02.jpg" class="card-img-top rounded-top" alt="...">
                        <div class="overlay rounded-top"></div>
                    </div>
                    <div class="card-body content">
                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Masters in Acounting</a></h5> <span class="text-muted small">By: XYZ University</span>

                        <div class="post-meta d-flex justify-content-between mt-3">
                            <ul class="list-unstyled mb-0">
                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like small"><i class="uil uil-heart me-1"></i><span class="small"> Visits (43) </span></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i><span class="small"> Location: (Paris) </span></a></li>
                            </ul>
                            <a href="blog-detail.html" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                        </div>
                    </div>
                    <div class="author">
                        <small class="text-light user d-block"><i class="uil uil-user"></i> by XY University</small>
                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                    </div>
                </div>
            </div><!--end col-->

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- News End -->

<section class="section" id="team">
    <div class="container mt-100 mt-60">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Our Team</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Meet<span class="text-primary fw-bold"> Dyar </span> Expert Team Members</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row justify-content-center">

            @foreach($teams as $team)

            <div class="col-lg-3 col-md-6 mt-4 pt-2">
                <div class="card team text-center border-0">
                    <div class="position-relative">
                        <img src="{{url('storage/cms/images')}}/team/{{$team->image}}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                    </div>
                    <div class="card-body py-3 px-0 content">

                        <h5 class="mb-0"><a href="javascript:void(0)" class="name text-dark">{{$team->name}}</a></h5>
                        <small class="designation text-muted">{{$team->position}}</small>

                    </div>
                </div>
            </div><!--end col-->

            @endforeach

        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->







<!-- Start Contact -->
<section class="section pt-5 mt-4" id="contact">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-3 pb-2 border-bottom">
                    <h4 class="title mb-2">Contact Us</h4>
                    <p class="text-muted para-desc mx-auto mb-0">Be in Touch with<span class="text-primary fw-bold"> Dyar </span>Via</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->
        <div class="row">
            <div class="col-12 p-0">
                <div class="card map border-0">
                    <div class="card-body p-0">
                        <iframe src="https://maps.google.com/maps?q=kabul&t=&z=15&ie=UTF8&iwloc=&output=embed" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="container mt-100 mt-60">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                <div class="card custom-form rounded border-0 shadow p-4">
                    <form method="post" name="myForm" onsubmit="return validateForm()">
                        <p id="error-msg" class="mb-0"></p>
                        <div id="simple-msg"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Subject</label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="book" class="fea icon-sm icons"></i>
                                        <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                    <div class="form-icon position-relative">
                                        <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                        <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </form>
                </div><!--end custom-form-->
            </div><!--end col-->

            <div class="col-lg-7 col-md-6 order-1 order-md-2">

                @foreach ($contacts as $contact)

                <div class="title-heading ms-lg-4">
                    <h4 class="mb-4">Contact Details</h4>
                    <p class="text-muted">Start working with <span class="text-primary fw-bold">DyarShop</span> that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="mail" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Email</h6>
                            <a href="mailto:contact@example.com" class="text-primary">{{$contact->email}}</a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="phone" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Phone</h6>
                            <a href="tel:+152534-468-854" class="text-primary">{{$contact->phone}}</a>
                        </div>
                    </div>

                    <div class="d-flex contact-detail align-items-center mt-3">
                        <div class="icon">
                            <i data-feather="map-pin" class="fea icon-m-md text-dark me-3"></i>
                        </div>
                        <div class="flex-1 content">
                            <h6 class="title fw-bold mb-0">Location</h6>
                            <a href="" data-type="iframe" class="video-play-icon text-primary lightbox">{{$contact->adress}}</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section><!--end section-->
<!-- End contact -->








@endsection