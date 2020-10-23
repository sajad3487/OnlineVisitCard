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
                                Landing Pages @if(isset($customer)) {{$customer->name}} ({{$customer->email}}) @endif
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
                                        <td>{{$landing->card->id}}</td>
                                        <td>{{$landing->card->fname}}</td>
                                        <td>{{$landing->card->lname}}</td>
                                        <td>{{$landing->card->company_name}}</td>
                                        <td>{{$landing->card->position}}</td>
                                        <td>
                                            <a href="{{url("admin/landing/$landing->id/changeStatus")}}">
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
                                            <a href="{{url("admin/landing/$landing->id/edit")}}"><i class="far fa-edit text-warning mr-5 font-size-h2"></i></a>
                                            <a href="{{url("admin/analysis/$landing->id")}}"><i class="flaticon2-cardiogram text-info mr-5 font-size-h2"></i></a>
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



