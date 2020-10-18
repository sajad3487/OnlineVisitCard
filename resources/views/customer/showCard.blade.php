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
                                        <img class="img-fluid" src="{{asset($card->logo) ?? ''}}" alt=""/>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end: Invoice header-->

                        <!-- begin: Invoice body-->
                        <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">
                            <div class="col-md-9">
                                    <div class="row justify-content-between px-8 px-md-0">
                                        <a href="{{url("/card")}}" class="btn btn-light-warning font-weight-bold col-md-2  mt-2">Card List</a>
                                        <a href="{{url("/card/$card->id/reorder")}}" class="btn btn-light-success font-weight-bold col-md-2 mt-2">Reorder</a>
                                    </div>

                            </div>
                        </div>
                        <!-- end: Invoice body-->

                        <!-- begin: Invoice action-->

                        <!-- end: Invoice action-->

                        <!-- end: Invoice-->
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
