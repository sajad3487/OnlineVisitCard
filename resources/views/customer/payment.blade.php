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
                            <form action="{{url('card/payment/pay')}}" method="post">
                                @csrf
                                <input type="number" name="type_id" value="{{$type_id}}" class="">
                                @if(isset($card_id))
                                    <input type="number" name="card_id" value="{{$card_id}}" class="">
                                    <input type="number" name="landing_id" value="{{$landing_id}}" class="">
                                    @endif
                                <button type="submit" class="btn btn-success col-md-2 ">Pay</button>
                            </form>
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



