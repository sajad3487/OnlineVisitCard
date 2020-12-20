<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BIT</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Page Vendors Styles-->


    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->

    <link href="{{asset('css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/upload.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{asset('/media/logos/favicon.png')}}"/>

    <link href="{{asset('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="{{asset('fontawesome-5.5/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tooplate-infinite-loop.css')}}" />

    <link rel="stylesheet" href="{{asset('fontawesome-5.5/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/tooplate-infinite-loop.css')}}" />
    <!--
    Tooplate 2117 Infinite Loop
    https://www.tooplate.com/view/2117-infinite-loop
    -->


    <!--begin::Global Theme Styles(used by all pages)-->

</head>




<body>
<!-- Hero section -->
<section id="infinite" class="text-white tm-font-big tm-parallax" style="min-height: 750px;background-image: url({{asset($slider->file ?? '')}}">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md tm-navbar">
        <div class="container">
            <div class="tm-next">
                <a href="#infinite" class="navbar-brand">
                    <img src="{{url('media/logos/logo-transperant-1.png')}}" style="max-height: 60px">
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"  id="tmNav">
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#infinite">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#whatwedo">Cos'è BIT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#gallery">Prezzi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link" href="#contact">Contatti</a>
                    </li>
                </ul>
                <a class="nav-link tm-nav-link" href="{{url('/privacy_policy')}}">Privacy Policy</a>

                <a class="nav-link tm-nav-link" href="{{url('/login')}}">Login</a>

            </div>
        </div>
    </nav>

    <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <img src="{{url('media/logos/logo-transperant-1-white.png')}}" style="width: 10%" alt="">
            <h2 class="tm-hero-title mt-10">{{$slider->title ?? ''}}</h2>
            <p class="tm-hero-subtitle">
                {{$slider->text ?? ''}}
            </p>
            <!--begin::Form-->
        </div>
    </div>

</section>

<section id="whatwedo" class="tm-section-pad-top">

    <div class="container">

        <div class="row tm-content-box"><!-- first row -->
            <div class="col-lg-12 col-xl-12">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4 tm-section-title">{{$wwdheader->title ?? ''}}</h2>
                    <p class="mb-4 tm-intro-text">{{$wwdheader->text ?? ''}}</p>
                </div>
            </div>

        </div><!-- first row -->

        <div class="row tm-content-box"><!-- second row -->
            <div class="col-lg-1">
                <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4">{{$wwd1->title ?? ''}}</h2>
                    <p class="mb-4 tm-intro-text">{{$wwd1->text ?? ''}}</p>
                </div>
            </div>

            <div class="col-lg-1">
                <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4">{{$wwd2->title ?? ''}}</h2>
                    <p class="mb-4 tm-intro-text">{{$wwd2->text ?? ''}}</p>
                </div>
            </div>

        </div><!-- second row -->

        <div class="row tm-content-box"><!-- third row -->
            <div class="col-lg-1">
                <i class="fas fa-3x fa-fingerprint text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4">{{$wwd3->title ?? ''}}</h2>
                    <p class="mb-4 tm-intro-text">{{$wwd3->text ?? ''}}</p>
                </div>
            </div>

            <div class="col-lg-1">
                <i class="fas fa-3x fa-users text-center tm-icon"></i>
            </div>
            <div class="col-lg-5">
                <div class="tm-intro-text-container">
                    <h2 class="tm-text-primary mb-4">{{$wwd4->title ?? ''}}</h2>
                    <p class="mb-4 tm-intro-text">{{$wwd4->text ?? ''}}</p>
                </div>
            </div>

        </div><!-- third row -->

    </div>

</section>

<section id="testimonials" class="tm-section-pad-top tm-parallax-2" style="background-image: url({{$testimonial_header->file ?? ''}}); background-size: auto">
    <div class="container tm-testimonials-content">
        <div class="row">
            <div class="col-lg-12 tm-content-box">
                <h2 class="text-white text-center mb-4 tm-section-title">{{$testimonial_header->title ?? ''}}</h2>
                <p class="mx-auto tm-section-desc text-center">
                    {{$testimonial_header->text ?? ''}}
                </p>
                <div class=" ">
                    <div class="tm-testimonials-carousel">
                        @foreach($testimonials as $testimonial)
                            <div class="col-md-6 mt-md-10">
                                <figure class="tm-testimonial-item">
                                    <img src="{{$testimonial->file ?? ''}}" alt="Image" class="img-fluid mx-auto">
                                    <blockquote>{{$testimonial->text ?? ''}}</blockquote>
                                    <figcaption>{{$testimonial->title ?? ''}}</figcaption>
                                </figure>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tm-bg-overlay"></div>
</section>

<section id="gallery" class="tm-section-pad-top">
    <div class="container tm-container-gallery">
        <div class="row">
            <div class="text-center col-12">
                <h2 class="tm-text-primary tm-section-title mb-4">{{$price_header->title ?? ''}}</h2>
                <p class="mx-auto tm-section-desc">
                    {{$price_header->text ?? ''}}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="tm-text-primary mb-2 mt-10 text-center">Personal Cards</h3>
                <div class="row justify-content-center">
                    <!--begin: Pricing-->
                    <div class="col-md-4 col-xxl-3">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Layout\Layout-horizontal.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="6" rx="1.5"/>
                                        <rect fill="#000000" x="4" y="13" width="16" height="6" rx="1.5"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block d-block font-weight-boldest text-dark-75 py-2">{{$type1->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block d-block font-weight-bold mb-7 text-dark-50">Price : {{$type1->price ?? ''}} &euro;</h4>
                            <p class="mb-15 d-flex flex-column font-size-h3">
                                <span>{{$type1->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Acquista</a>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    <div class="col-md-4 col-xxl-3 border-x-0 border-x-md border-y border-y-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Layout\Layout-right-panel-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M10.5,5 L20.5,5 C21.3284271,5 22,5.67157288 22,6.5 L22,9.5 C22,10.3284271 21.3284271,11 20.5,11 L10.5,11 C9.67157288,11 9,10.3284271 9,9.5 L9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,13 L20.5,13 C21.3284271,13 22,13.6715729 22,14.5 L22,17.5 C22,18.3284271 21.3284271,19 20.5,19 L10.5,19 C9.67157288,19 9,18.3284271 9,17.5 L9,14.5 C9,13.6715729 9.67157288,13 10.5,13 Z" fill="#000000"/>
                                        <rect fill="#000000" opacity="0.3" x="2" y="5" width="5" height="14" rx="1"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type2->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price : {{$type2->price ?? ''}} &euro;</h4>
                            <p class="mb-15 d-flex flex-column font-size-h3">
                                <span>{{$type2->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Acquista</a>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    <div class="col-md-4 col-xxl-3">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Layout\Layout-top-panel-4.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3,4 L20,4 C20.5522847,4 21,4.44771525 21,5 L21,7 C21,7.55228475 20.5522847,8 20,8 L3,8 C2.44771525,8 2,7.55228475 2,7 L2,5 C2,4.44771525 2.44771525,4 3,4 Z M3,10 L13,10 C13.5522847,10 14,10.4477153 14,11 L14,13 C14,13.5522847 13.5522847,14 13,14 L3,14 C2.44771525,14 2,13.5522847 2,13 L2,11 C2,10.4477153 2.44771525,10 3,10 Z M3,16 L13,16 C13.5522847,16 14,16.4477153 14,17 L14,19 C14,19.5522847 13.5522847,20 13,20 L3,20 C2.44771525,20 2,19.5522847 2,19 L2,17 C2,16.4477153 2.44771525,16 3,16 Z" fill="#000000"/>
                                        <rect fill="#000000" opacity="0.3" x="16" y="10" width="5" height="10" rx="1"/>
                                    </g>
                                </svg><!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type3->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price : {{$type3->name ?? ''}} &euro;</h4>
                            <p class="mb-15 d-flex flex-column font-size-h3">
                                <span>{{$type3->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Acquista</a>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end: Pricing-->
                </div>

                <h3 class="tm-text-primary mb-2 mt-10 text-center">Company Cards</h3>
                <div class="row justify-content-center">
                    <!--begin: Pricing-->
                    <div class="col-md-4 col-xxl-3">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Home/Flower3.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M1.4152146,4.84010415 C11.1782334,10.3362599 14.7076452,16.4493804 12.0034499,23.1794656 C5.02500006,22.0396582 1.4955883,15.9265377 1.4152146,4.84010415 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M22.5950046,4.84010415 C12.8319858,10.3362599 9.30257403,16.4493804 12.0067693,23.1794656 C18.9852192,22.0396582 22.5146309,15.9265377 22.5950046,4.84010415 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M12.0002081,2 C6.29326368,11.6413199 6.29326368,18.7001435 12.0002081,23.1764706 C17.4738192,18.7001435 17.4738192,11.6413199 12.0002081,2 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block d-block font-weight-boldest text-dark-75 py-2">{{$type4->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block d-block font-weight-bold mb-7 text-dark-50">Price : {{$type4->price ?? ''}} &euro;</h4>
                            <p class="mb-15 d-flex flex-column font-size-h3">
                                <span>{{$type4->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Acquista</a>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    <div class="col-md-4 col-xxl-3 border-x-0 border-x-md border-y border-y-md-0">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative mb-25">
                                                <span class="svg svg-fill-primary opacity-4 position-absolute">
                                                    <svg width="175" height="200">
                                                        <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                                    </svg>
                                                </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                                        <path d="M9,1 C4.92361111,7.82926829 4.92361111,12.8292683 9,16 C12.9097222,12.8292683 12.9097222,7.82926829 9,1 Z" fill="#000000" opacity="0.3" transform="translate(8.937500, 8.500000) scale(-1, 1) rotate(-330.000000) translate(-8.937500, -8.500000) "/>
                                                        <path d="M15,1 C10.9236111,7.82926829 10.9236111,12.8292683 15,16 C18.9097222,12.8292683 18.9097222,7.82926829 15,1 Z" fill="#000000" opacity="0.3" transform="translate(14.937500, 8.500000) rotate(-330.000000) translate(-14.937500, -8.500000) "/>
                                                        <path d="M12,1 C7.92361111,7.82926829 7.92361111,12.8292683 12,16 C15.9097222,12.8292683 15.9097222,7.82926829 12,1 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M6.34403065,13 L17.6559693,13 C18.2082541,13 18.6559693,13.4477153 18.6559693,14 C18.6559693,14.0973246 18.6417616,14.1941279 18.6137956,14.2873479 L16.4275913,21.5746958 C16.1738009,22.4206637 15.3951551,23 14.5119387,23 L9.4880613,23 C8.60484486,23 7.82619911,22.4206637 7.57240873,21.5746958 L5.38620437,14.2873479 C5.22750651,13.758355 5.52768992,13.2008716 6.05668277,13.0421737 C6.14990279,13.0142077 6.24670609,13 6.34403065,13 Z" fill="#000000"/>
                                                    </g>
                                                </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type5->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price : {{$type5->price ?? ''}} &euro;</h4>
                            <p class="mb-15 d-flex flex-column font-size-h3">
                                <span>{{$type5->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Acquista</a>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end: Pricing-->

                    <!--begin: Pricing-->
                    <div class="col-md-4 col-xxl-3">
                        <div class="pt-30 pt-md-25 pb-15 px-5 text-center">
                            <!--begin::Icon-->
                            <div class="d-flex flex-center position-relative mb-25">
                                        <span class="svg svg-fill-primary opacity-4 position-absolute">
                                            <svg width="175" height="200">
                                                <polyline points="87,0 174,50 174,150 87,200 0,150 0,50 87,0" />
                                            </svg>
                                        </span>
                                <span class="svg-icon svg-icon-5x svg-icon-primary"><!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Cart2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <circle fill="#000000" opacity="0.3" cx="15" cy="17" r="5"/>
                                                <circle fill="#000000" opacity="0.3" cx="9" cy="17" r="5"/>
                                                <circle fill="#000000" opacity="0.3" cx="7" cy="11" r="5"/>
                                                <circle fill="#000000" opacity="0.3" cx="17" cy="11" r="5"/>
                                                <circle fill="#000000" opacity="0.3" cx="12" cy="7" r="5"/>
                                            </g>
                                        </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type6->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price :{{$type6->price ?? ''}} &euro;</h4>
                            <p class="mb-15 d-flex flex-column font-size-h3">
                                <span>{{$type6->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Acquista</a>
                            <!--end::Content-->

                        </div>
                    </div>
                    <!--end: Pricing-->
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="tm-section-pad-top tm-parallax-2" style="background-image: url({{$contact->file ?? ''}}); background-size: cover; min-height: 850px">

    <div class="container tm-container-contact">

        <div class="row">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-md-4">{{$contact->title ?? ''}}</h2>
                <p class="">
                    {{$contact->text ?? ''}}
                </p><br>
            </div>

            <div class="col-sm-12 col-md-6">
                <form action="{{url('contact/create')}}" method="post">
                    @csrf
                    <input id="name" name="name" type="text" placeholder="il tuo nome" class="tm-input" required />
                    <input id="email" name="email" type="email" placeholder="la tua email" class="tm-input" required />
                    <textarea id="message" name="message" rows="8" placeholder="Messaggio" class="tm-input" required></textarea>
                    <button type="submit" class="btn tm-btn-submit">Invia</button>
                </form>
            </div>

            <div class="col-sm-12 col-md-6">

                <div class="contact-item">
                    <a rel="nofollow" href="mailto:{{$contact->title ?? ''}}" class="item-link">
                        <i class="far fa-2x fa-envelope mr-4"></i>
                        <span class="mb-0">{{$contact->title ?? ''}}</span>
                    </a>
                </div>


                <div class="contact-item">
                    <a rel="nofollow" href="tel:{{$info->text ?? ''}}" class="item-link">
                        <i class="fas fa-2x fa-phone-square mr-4"></i>
                        <span class="mb-0">{{$info->text ?? ''}}</span>
                    </a>
                </div>
                <div class="contact-item">&nbsp;</div>

            </div>


        </div><!-- row ending -->

    </div>

    <footer class="text-center small tm-footer">
        <p class="mb-0">
            Copyright &copy; 2020 BIT

            . <a rel="nofollow" href="https://www.tooplate.com" title="HTML templates">Designed by TOOPLATE</a></p>
    </footer>

</section>

<script src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('slick/slick.min.js')}}"></script>
<script src="{{asset('magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/easing.min.js')}}"></script>
<script src="{{asset('js/jquery.singlePageNav.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>

    function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
            _offset = 400;
        }
        if(windowHeight > 680) {
            _offset = 300
        }
        if(windowHeight > 830) {
            _offset = 210;
        }

        return _offset;
    }

    function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
            bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
    }

    // Parallax function
    // Adapted based on https://codepen.io/roborich/pen/wpAsm
    var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
            setParallaxPosition($doc, multiplier, $object);
        } else {
            $(window).scroll(function(){
                setParallaxPosition($doc, multiplier, $object);
            });
        }
    };

    var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});

        $(window).scroll(function(){
            if($(window).width() > 768) {
                var firstTop = $object.offset().top,
                    pos = $(window).scrollTop(),
                    yPos = Math.round((multiplier * (firstTop - pos)) - 186);

                var bg_css = 'center ' + yPos + 'px';

                $object.css({"background-position" : bg_css });
            } else {
                $object.css({"background-position" : "center" });
            }
        });
    };

    $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);
        background_image_parallax_2($("#testimonials"), 0.80);

        // Handle window resize
        window.addEventListener('resize', function(){
            background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){
            if($(document).scrollTop() > 120) {
                $('.tm-navbar').addClass("scroll");
            } else {
                $('.tm-navbar').removeClass("scroll");
            }
        });

        // Close mobile menu after click
        $('#tmNav a').on('click', function(){
            $('.navbar-collapse').removeClass('show');
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
            'easing': 'easeInOutExpo',
            'speed': 600
        });

        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 600, 'easeInOutExpo', function(){
                    window.location.hash = hash;
                });
            } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery: { enabled: true }
        });

        $('.tm-testimonials-carousel').slick({
            dots: true,
            prevArrow: false,
            nextArrow: false,
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // Gallery
        $('.tm-gallery').slick({
            dots: true,
            infinite: false,
            slidesToShow: 5,
            slidesToScroll: 2,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>
</body>
</html>
