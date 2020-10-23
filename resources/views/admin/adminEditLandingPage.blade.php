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
                                    Edit Landing Page
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{url("/admin/landing/$landing->id/update")}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body row justify-content-center">
                                    <div class="col-lg-12 pt-5">
                                        @include('fragment.error')
                                        <div class="form-group row">
                                            <label class="col-lg-1 col-form-label text-left text-md-right">First Name:</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="fname" class="form-control" placeholder="Enter your first name" value="{{$landing->card->fname}}" required/>
                                            </div>
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Last Name:</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="lname" class="form-control" placeholder="Enter your last name" value="{{$landing->card->lname}}" required/>
                                            </div>
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Phone:</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="phone" class="form-control" placeholder="Enter your phone number" value="{{$landing->card->tel}}" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Email:</label>
                                            <div class="col-lg-3">
                                                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="{{$landing->card->email}}" required/>
                                            </div>
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Company:</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="company_name" class="form-control" placeholder="Enter your company name" value="{{$landing->card->company_name}}"/>
                                            </div>
                                            <label class="col-lg-1 col-form-label text-left text-md-right">Position :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="position" class="form-control" placeholder="Enter your position" value="{{$landing->card->position}}"/>
                                            </div>
                                        </div>
                                        <hr class="mt-15">
                                    </div>
                                    <div class="col-lg-12 row mt-10">
                                        <div class="col-lg-9">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Fax:</label>
                                                    <input type="text" name="fax" class="form-control" placeholder="Enter your fax number" value="{{$landing->fax}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class="col-form-label text-right">Picture :</label>
                                                    <div class="input-group">
                                                        <input type="file" name="picture" class="custom-file-input" id="customFile"/>
                                                        <label class="custom-file-label" for="customFile">Choose your picture</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Address (Home):</label>
                                                    <input type="text" name="home_address" class="form-control" placeholder="Enter your home address" value="{{$landing->home_address}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Address (Work):</label>
                                                    <input type="text" name="work_address" class="form-control" placeholder="Enter your work address" value="{{$landing->work_address}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Phone (Home):</label>
                                                    <input type="text" name="home_phone" class="form-control" placeholder="Enter your home phone number" value="{{$landing->home_phone}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Phone (Work):</label>
                                                    <input type="text" name="work_phone" class="form-control" placeholder="Enter your work phone number" value="{{$landing->work_phone}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Website (Persoanl):</label>
                                                    <input type="text" name="home_website" class="form-control" placeholder="Enter your personal website" value="{{$landing->personal_website}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Website (Work):</label>
                                                    <input type="text" name="work_website" class="form-control" placeholder="Enter your work website" value="{{$landing->work_website}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Facebook:</label>
                                                    <input type="text" name="facebook" class="form-control" placeholder="Enter your Facebook account link" value="{{$landing->facebook}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Instagram:</label>
                                                    <input type="text" name="instagram" class="form-control" placeholder="Enter your work Instagram account link" value="{{$landing->instagram}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Twitter:</label>
                                                    <input type="text" name="twitter" class="form-control" placeholder="Enter your Twitter account link" value="{{$landing->twitter}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Linkdin</label>
                                                    <input type="text" name="linkdin" class="form-control" placeholder="Enter your Linkedin account link" value="{{$landing->linkdin}}"/>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">Skype:</label>
                                                    <input type="text" name="skype" class="form-control" placeholder="Enter your Skype account link" value="{{$landing->skype}}"/>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label class=" col-form-label text-right">WhatsApp</label>
                                                    <input type="text" name="whatsapp" class="form-control" placeholder="Enter your WhatsApp account link" value="{{$landing->whatsapp}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <img src="{{asset($landing->picture)}}" alt="" style="width: 100%">
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-7">
                                            <a href="{{url('/admin/landing')}}" type="reset" class="btn btn-secondary col-md-2 mr-2">Back</a>
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
