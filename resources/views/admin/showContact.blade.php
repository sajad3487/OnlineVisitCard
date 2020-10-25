@extends('layouts.admin.master')
@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Ticket No.{{$contact->id}}
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{url("/profile/update")}}" method="post" >
                                @csrf
                                <div class="card-body row justify-content-center">
                                    <div class="col-lg-9">
                                        @include('fragment.error')
                                        <div class="form-group row">
                                                Name : {{$contact->name ?? ''}}
                                        </div>
                                        <div class="form-group row">
                                                Email : {{$contact->email ?? ''}}
                                        </div>
                                        <div class="form-group row">
                                            Message : {{$contact->message ?? ''}}
                                        </div>

                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-7">
                                            <a href="{{url('/admin/contact')}}" type="reset" class="btn btn-secondary col-md-2 mr-2">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    @endsection
