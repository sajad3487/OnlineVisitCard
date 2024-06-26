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
                                Landing Page
                                {{--                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Customers info</span>--}}
                            </h3>
                        </div>
                        <div class="card-toolbar">


                            <!--begin::Button-->
                        {{--                            <a href="{{url('/orders/create')}}" class="btn btn-primary font-weight-bolder">--}}
                        {{--                                    <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg--><svg--}}
                        {{--                                            xmlns="http://www.w3.org/2000/svg"--}}
                        {{--                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"--}}
                        {{--                                            viewBox="0 0 24 24" version="1.1">--}}
                        {{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
                        {{--                                        <rect x="0" y="0" width="24" height="24"/>--}}
                        {{--                                        <circle fill="#000000" cx="9" cy="15" r="6"/>--}}
                        {{--                                        <path--}}
                        {{--                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"--}}
                        {{--                                            fill="#000000" opacity="0.3"/>--}}
                        {{--                                    </g>--}}
                        {{--                                </svg><!--end::Svg Icon--></span> New Order--}}
                        {{--                            </a>--}}
                        <!--end::Button-->
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable text-center" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Company Name</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($landings as $landing)
                                    <tr class="text-center">
                                        <td>{{$landing->card->id ?? ''}}</td>
                                        <td>{{$landing->card->fname ?? ''}}</td>
                                        <td>{{$landing->card->lname ?? ''}}</td>
                                        <td>{{$landing->card->company_name ?? ''}}</td>
                                        <td>{{$landing->card->position ?? ''}}</td>
                                        <td>
                                            <a href="{{url("card/landing/$landing->id/changeStatus")}}">
                                                @if($landing->status == 1)
                                                    <span class="label label-inline label-light-success font-weight-bold">
                                                        Enable
                                                    </span>
                                                @elseif($landing->status == 2)
                                                    <span class="label label-inline label-light-danger font-weight-bold">
                                                        disable
                                                    </span>
                                                @endif
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{url("card/landing/$landing->id/show")}}" target="_blank"><i class="flaticon-eye mr-5 text-primary font-size-h2"></i></a>
                                            <a href="{{url("card/landing/$landing->id/edit")}}"><i class="far fa-edit text-warning mr-5 font-size-h2"></i></a>
                                            <a href="{{url("card/analysis?landing_id=".$landing->id."&period=7")}}"><i class="flaticon2-cardiogram text-info mr-5 font-size-h2"></i></a>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>

                            </table>
                            <!--end: Datatable-->
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



