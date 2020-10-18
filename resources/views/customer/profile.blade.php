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
                                    Profile
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{url("/profile/update")}}" method="post" >
                                @csrf
                                <div class="card-body row justify-content-center">
                                    <div class="col-lg-9">
                                        @include('fragment.error')
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right">Full Name :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{$customer->name  ?? ''}}" required/>
                                            </div>
                                            <label class="col-lg-2 col-form-label text-right">Email :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="email" class="form-control" placeholder="Enter your email" value="{{$customer->email  ?? ''}}" disabled/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label text-right">Password :</label>
                                            <div class="col-lg-3">
                                                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" name="password" id="password"  required autocomplete="new-password"/>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror                                            </div>
                                            <label class="col-lg-2 col-form-label text-right">Confirm Password:</label>
                                            <div class="col-lg-3">
                                                <input class="form-control" type="password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation" required autocomplete="new-password" id="password-confirm"/>
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
