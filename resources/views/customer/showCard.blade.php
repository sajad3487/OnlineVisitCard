@extends('layouts.customer.master')
@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!-- begin::Card-->
                <div class="card card-custom overflow-hidden">
                    <div class="card-body">
                        <!-- begin: Invoice-->
                        <!-- begin: Invoice header-->
                        <div class="row justify-content-center mx-auto bgi-size-cover bgi-no-repeat col-md-8 col-lg-7 p-8 border border-secondary  shadow p-4 mb-4 bg-white" style="min-height: 300px; border-radius : 30px">
                            <div class="col-12 row justify-content-between pt-5">
{{--                                <h1 class="display-4 text-black font-weight-boldest mb-md-0 ">{{$card->fname." ".$card->lname}}</h1>--}}
                                <div class="col-6 col-md-4 col-lg-4 ">
                                    @if($card->type != 1)
                                        <img class="img-fluid" src="{{asset($card->logo) ?? ''}}" alt=""/>
                                    @else
                                        <img class="img-fluid" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{url("landing/".$card->landing->id."/show")}}" alt=""/>
                                    @endif
                                </div>
                                <div class="col-6 col-md-4 col-lg-4 ">
                                    <img class="img-fluid" src="@if($card->type != 3){{asset('media/logos/logo-black.png') ?? ''}} @else{{asset('media/logos/logo-transperant-1.png') ?? ''}}@endif" alt=""/>
                                </div>
                            </div>
                            <div class="col-12 row mt-md-30 pt-10">
                                <div class="col-md-8 pb-5">
                                    <h1 class="display-3">{{$card->fname}} {{$card->lname}}</h1>
                                </div>
                            </div>
                        </div>
                        <!-- end: Invoice header-->
                        @if($card->type != 1)
                            <div class="row justify-content-center mx-auto bgi-size-cover bgi-no-repeat col-md-8 col-lg-7 p-8 border border-secondary  shadow p-4 mb-4 bg-white" style="min-height: 300px; border-radius : 30px">
                                <div class="col-md-12">
                                    <div class="row my-md-20">
                                        <div class="col-12 mr-md-0 ml-md-auto mt-4 text-center">
                                            <a href="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{url("landing/".$card->landing->id."/show")}}" target="_blank">
                                                {{--                                            <img class="img-fluid col-lg-4" src="{{asset('media/logos/qr.png') ?? 'landing.blade.php'}}" alt=""/>--}}
                                                <img class="img-fluid col-lg-4" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{url("landing/".$card->landing->id."/show")}}" alt=""/>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endif
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                    <div class="row justify-content-between px-8 px-md-0">
                                        <a href="{{url("card/landing/".$card->landing->id."/show")}}" target="_blank" class="btn btn-light-warning font-weight-bold col-md-2  mt-2">Landing Page</a>
                                        <a href="{{url("/card/$card->id/reorder")}}" class="btn btn-light-success font-weight-bold col-md-2 mt-2">Reorder</a>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

@endsection
