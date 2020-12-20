@extends('layouts.customer.master')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            {{--                            <span class="card-icon"><i class="flaticon2-chart text-primary"></i></span>--}}
                            <h3 class="card-label">Personal Cards</h3>
                        </div>
                    </div>
                    <div class="card-body">
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
                    </div>
                </div>
                <!--end::Card-->

                <!--begin::Card-->
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            {{--                            <span class="card-icon"><i class="flaticon2-chart text-primary"></i></span>--}}
                            <h3 class="card-label">Company Cards</h3>
                        </div>
                    </div>
                    <div class="card-body">
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
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
