@extends('layouts.customer.master')

@section('content')


    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">
                                Payment
                                {{--                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Customers info</span>--}}
                            </h3>
                        </div>
                        <div class="card-toolbar">
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto justify-content-center">
                            <h3 class="text-center text-muted my-10">Please pay your order</h3>
                            <h3 class="text-center text-muted my-10">Price : {{$type_price}} $</h3>
                            <a href="{{url("card/payment/$type_id/company")}}" class="btn btn-success col-md-2 ">Pay</a>
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



