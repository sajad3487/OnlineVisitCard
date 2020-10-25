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
                                Tickets
{{--                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Customers info</span>--}}
                            </h3>
                        </div>
                        <div class="card-toolbar">

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">
                            <!--begin: Datatable-->
                            <table class="table table-separate table-head-custom table-checkable text-center" id="kt_datatable">
                                <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contacts as $contact)
                                <tr class="text-center">
                                    <td>{{$contact->id}}</td>
                                    <td>{{$contact->name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>
                                        @if($contact->status == 0)
                                            <span class="label label-inline label-light-danger font-weight-bold">
                                                Unread
                                            </span>
                                        @elseif($contact->status == 1)
                                            <span class="label label-inline label-light-success font-weight-bold">
                                                Read
                                            </span>
                                        @endif
                                    </td>
                                    <td >
                                        <a href="{{url("admin/contact/$contact->id/show")}}"><i class="far fa-edit text-success mr-3 font-size-h2"></i></a>
                                        <a href="{{url("admin/contact/$contact->id/makeUnread")}}"><i class="flaticon-email  text-warning mr-3 font-size-h2"></i></a>
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



