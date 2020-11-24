@extends('layouts.admin.master')

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
                                Cards @if(isset($customer)) of {{$customer->name}} ({{$customer->email}}) @endif
{{--                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Customers info</span>--}}
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            @if(isset($customer))
                                <a href="{{url("/admin/customer")}}" class="btn btn-light-warning font-weight-bold mt-2">Back</a>
                                @endif
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable text-center" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th>Card ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Company Name</th>
                                    <th>type</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($cards as $card)
                                <tr class="text-center">
                                    <td>{{$card->id}}</td>
                                    <td>{{$card->fname}}</td>
                                    <td>{{$card->lname}}</td>
                                    <td>{{$card->company_name}}</td>
                                    <td>
                                        @if($card->type == 1)
                                            Type A
                                        @elseif($card->type ==2)
                                            Type B
                                        @else
                                            Type C
                                        @endif
                                    </td>
                                    <td>
                                        @if($card->status == 1)
                                            <span class="label label-inline label-light-primary font-weight-bold">
                                                Order Placed
                                            </span>
                                        @elseif($card->status == 2)
                                            <span class="label label-inline label-light-warning font-weight-bold">
                                                Printed
                                            </span>
                                        @elseif($card->status == 3)
                                            <span class="label label-inline label-light-success font-weight-bold">
                                                Delivered
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url("admin/card/$card->id/show")}}"><i class="far fa-edit text-warning mr-5 font-size-h2"></i></a>

                                        <a href="{{url("card/landing/".$card->landing->id."/show")}}" target="_blank"><i class="flaticon-eye mr-5 text-primary font-size-h2"></i></a>
                                        <a href="{{url("admin/landing/".$card->landing->id."/edit")}}"><i class="far fa-address-card text-danger mr-5 font-size-h2"></i></a>
                                        <a href="{{url("admin/analysis/".$card->landing->id)}}"><i class="flaticon2-cardiogram text-info mr-5 font-size-h2"></i></a>
                                        <a href="{{url("admin/card/$card->id/downloadCard")}}"><i class="fas fa-download text-success mr-5 font-size-h2"></i></a>
                                        @if($card->type != 1)
                                            <a href="{{url("admin/card/$card->id/downloadCardBack")}}"><i class="fas fa-file-download text-success mr-5 font-size-h2"></i></a>
                                            @else
                                            <a><i class="text-success mr-5 font-size-h2"></i><i class="text-success mr-5 font-size-h2"></i></a>

                                        @endif
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



