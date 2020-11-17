@extends('layouts.admin.master')
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
                            <div class="col-md-12">
                                <h1 class="display-4 text-black font-weight-boldest mb-md-0 ">{{$card->fname." ".$card->lname}}</h1>
                                <div class="row mt-md-15">
                                    <div class="col-md-8 my-10">
                                        <h5>{{$card->company_name}}</h5>
                                        <h5>{{$card->position}}</h5>
                                        <hr>
                                        <h5>{{$card->tel}}</h5>
                                        <h5>{{$card->email}}</h5>
                                    </div>

                                    <div class="col-6 col-md-4 col-lg-3 mx-auto mr-md-0 ml-md-auto mt-4">
                                        <a href="{{asset($card->logo)}}" target="_blank">
                                            <img class="img-fluid" src="{{asset($card->logo) ?? ''}}" alt=""/>
                                            Orginal Size
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end: Invoice header-->
                        <div class="row justify-content-center mx-auto bgi-size-cover bgi-no-repeat col-md-8 col-lg-7 p-8 border border-secondary  shadow p-4 mb-4 bg-white" style="min-height: 300px; border-radius : 30px">
                            <div class="col-md-12">
                                <div class="row mt-md-15">
                                    <div class="col-12 mr-md-0 ml-md-auto mt-4 text-center">
                                        <a href="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{url("card/landing/$landing_url/show")}}" target="_blank">
{{--                                            <img class="img-fluid col-lg-4" src="{{asset('media/logos/qr.png') ?? 'landing.blade.php'}}" alt=""/>--}}
                                            <img class="img-fluid col-lg-4" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl={{url("landing/$landing_url/show")}}" alt=""/>
                                        </a>
                                        <div class="form-group mt-5 text-left">
                                            <label>Landing Page Url</label>
                                            <input type="text" class="form-control"  value="{{url("landing/$landing_url/show")}}"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <form action="{{url("admin/card/$card->id/changeStatus")}}" class="mt-20 row" method="post">
                            @csrf
                            <div class="form-group col-md-4">
                                <label for="exampleSelect1" class="h3 text-primary">Change Status</label>
                                <select class="form-control" id="exampleSelect1" name="status">
                                    <option value="1" @if($card->status == 1)selected @endif>Order Placed</option>
                                    <option value="2" @if($card->status == 2)selected @endif>Printed</option>
                                    <option value="3" @if($card->status == 3)selected @endif>Delivered</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-lg-2 mt-10">
                                <button type="submit" class="btn btn-success mr-2 col-12">Save</button>
                            </div>
                        </form>
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
