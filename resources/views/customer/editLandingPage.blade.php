@extends('layouts.customer.master')
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
                                    Edit Landing Page
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{url("/profile/update")}}" method="post" >
                                @csrf
                                <div class="card-body row justify-content-center">
                                    <div class="col-lg-12 ">
                                        @include('fragment.error')
                                        <div class="form-group row">
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Full Name :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="" required/>
                                            </div>
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Full Name :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="" required/>
                                            </div>
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Full Name :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="" required/>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-7">
                                            <a href="{{url('/admin/users')}}" type="reset" class="btn btn-secondary col-md-2 mr-2">Back</a>
                                            <button type="submit" class="btn btn-success col-md-2">Save</button>
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
