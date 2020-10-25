<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Infinite Loop - Bootstrap 4.0 HTML Template</title>
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
<section id="infinite" class="text-white tm-font-big tm-parallax" style="min-height: 750px;background-image: url({{asset($slider->file)}}">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md tm-navbar">
        <div class="container">
            <div class="tm-next">
                <a href="#infinite" class="navbar-brand">Fabrizio</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars navbar-toggler-icon"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto"  id="tmNav">
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link">What We Do</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tm-nav-link">Contact</a>
                    </li>
                </ul>
                <a class="nav-link tm-nav-link" href="{{url('/login')}}">Login</a>

            </div>
        </div>
    </nav>

    <div class="text-center tm-hero-text-container">
        <div class="tm-hero-text-container-inner">
            <h2 class="tm-hero-title">{{$slider->title}}</h2>
            <p class="tm-hero-subtitle">
                {{$slider->text}}
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
                            <span class="font-size-h1 d-block d-block font-weight-boldest text-dark-75 py-2">{{$type1->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block d-block font-weight-bold mb-7 text-dark-50">Price : {{$type1->price ?? ''}} $</h4>
                            <p class="mb-15 d-flex flex-column">
                                <span>{{$type1->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
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
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"/>
                                            </g>
                                        </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type2->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price : {{$type2->price ?? ''}} $</h4>
                            <p class="mb-15 d-flex flex-column">
                                <span>{{$type2->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
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
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type3->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price : {{$type3->name ?? ''}} $</h4>
                            <p class="mb-15 d-flex flex-column">
                                <span>{{$type3->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
                            <!--end::Content-->
                        </div>
                    </div>
                    <!--end: Pricing-->
                </div>
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
                            <h4 class="font-size-h6 d-block d-block font-weight-bold mb-7 text-dark-50">Price : {{$type4->price ?? ''}} $</h4>
                            <p class="mb-15 d-flex flex-column">
                                <span>{{$type4->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
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
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3"/>
                                                        <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero"/>
                                                    </g>
                                                </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type5->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price : {{$type5->price ?? ''}} $</h4>
                            <p class="mb-15 d-flex flex-column">
                                <span>{{$type5->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
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
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                <path d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z" fill="#000000"/>
                                            </g>
                                        </svg>
                                    <!--end::Svg Icon--></span>
                            </div>
                            <!--end::Icon-->

                            <!--begin::Content-->
                            <span class="font-size-h1 d-block font-weight-boldest text-dark-75 py-2">{{$type6->name ?? ''}}</span>
                            <h4 class="font-size-h6 d-block font-weight-bold mb-7 text-dark-50">Price :{{$type6->price ?? ''}} $</h4>
                            <p class="mb-15 d-flex flex-column">
                                <span>{{$type6->description ?? ''}}</span>
                            </p>
                            <a href="#" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Purchase</a>
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
<section id="contact" class="tm-section-pad-top tm-parallax-2" style="min-height: 700px">

    <div class="container tm-container-contact">

        <div class="row">

            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">{{$contact->title ?? ''}}</h2>
                <p class="">
                    {{$contact->text ?? ''}}
                </p><br>
            </div>

            <div class="col-sm-12 col-md-6">
                <form action="" method="get">
                    <input id="name" name="name" type="text" placeholder="Your Name" class="tm-input" required />
                    <input id="email" name="email" type="email" placeholder="Your Email" class="tm-input" required />
                    <textarea id="message" name="message" rows="8" placeholder="Message" class="tm-input" required></textarea>
                    <button type="submit" class="btn tm-btn-submit">Submit</button>
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
                    <a rel="nofollow" href="tel:{{$info->text}}" class="item-link">
                        <i class="fas fa-2x fa-phone-square mr-4"></i>
                        <span class="mb-0">{{$info->text}}</span>
                    </a>
                </div>
                <div class="contact-item">&nbsp;</div>

            </div>


        </div><!-- row ending -->

    </div>

    <footer class="text-center small tm-footer">
        <p class="mb-0">
            Copyright &copy; 2020 Company Name

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
