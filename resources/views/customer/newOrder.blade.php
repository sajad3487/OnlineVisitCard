@extends('layouts.customer.master')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="card card-custom" style="background-color: #36474f">
                    <div class="card-body p-0" >
                        <!--begin::Wizard-->
                        <div class="wizard wizard-1" id="kt_wizard_v1" data-wizard-state="step-first" data-wizard-clickable="false" >
                            <div class="p-4">
                                @include('fragment.error')
                            </div>
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom" >
                                <div class="wizard-steps p-8 p-lg-10">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <i class="wizard-icon flaticon-list"></i>
                                            <h3 class="wizard-title">1. Information on Card</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon--></span>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->

                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <i class="wizard-icon flaticon-interface-10"></i>
                                            <h3 class="wizard-title">2. Landing Page Information</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon--></span>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->

                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <i class="wizard-icon flaticon-responsive"></i>
                                            <h3 class="wizard-title">3. Social Media</h3>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->

{{--                                    <!--begin::Wizard Step 4 Nav-->--}}
{{--                                    <div class="wizard-step" data-wizard-type="step">--}}
{{--                                        <div class="wizard-label">--}}
{{--                                            <i class="wizard-icon flaticon-truck"></i>--}}
{{--                                            <h3 class="wizard-title">4. Delivery Address</h3>--}}
{{--                                        </div>--}}
{{--                                        <span class="svg-icon svg-icon-xl wizard-arrow"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                                <polygon points="0 0 24 0 24 24 0 24"/>--}}
{{--                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>--}}
{{--                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>--}}
{{--                                            </g>--}}
{{--                                        </svg><!--end::Svg Icon--></span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Wizard Step 4 Nav-->--}}

{{--                                    <!--begin::Wizard Step 5 Nav-->--}}
{{--                                    <div class="wizard-step" data-wizard-type="step">--}}
{{--                                        <div class="wizard-label">--}}
{{--                                            <i class="wizard-icon flaticon-globe"></i>--}}
{{--                                            <h3 class="wizard-title">5. Review and Submit</h3>--}}
{{--                                        </div>--}}
{{--                                        <span class="svg-icon svg-icon-xl wizard-arrow last"><!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                                <polygon points="0 0 24 0 24 24 0 24"/>--}}
{{--                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>--}}
{{--                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997) "/>--}}
{{--                                            </g>--}}
{{--                                        </svg><!--end::Svg Icon--></span>--}}
{{--                                    </div>--}}
{{--                                    <!--end::Wizard Step 5 Nav-->--}}
                                </div>
                            </div>
                            <!--end::Wizard Nav-->

                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-12" >
                                    <!--begin::Wizard Form-->
                                    <form class="form" action="{{url('card/store')}}" id="kt_form" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <!--begin::Wizard Step 1-->
                                        <div class="pb-5 " data-wizard-type="step-content" data-wizard-state="current">
                                            <div class="row">
                                                <div class="col-lg-4 order-lg-2 mt-lg-20">
                                                    <img src="{{asset('cards/01.png')}}" alt="" style="width: 100%">
                                                </div>
                                                <div class="col-lg-8 order-lg-1">
                                                    <h3 class="mb-10 font-weight-bold  text-white">Enter Information on Card</h3>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group ">
                                                                <label class="text-white">First Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="fname"  required placeholder="First Name"/>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label class="text-white">Last Name <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="lname" required placeholder="Last Name"/>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label class="text-white">Email address <span class="text-danger">*</span></label>
                                                                <input type="email" class="form-control" name="email" placeholder="Enter email"/>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label class="text-white">Phone Number <span class="text-danger">*</span></label>
                                                                <input type="text" class="form-control" name="phone" required placeholder="Phone number"/>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <!--begin::Select-->
                                                            <div class="form-group">
                                                                <label class="text-white">Company Name</label>
                                                                <input type="text" class="form-control" name="company" required placeholder="Company Name"/>
                                                            </div>
                                                            <!--end::Select-->
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label class="text-white">Position</label>
                                                                <input type="text" class="form-control" name="position" required placeholder="Position"/>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xl-6">
                                                            <!--begin::Input-->
                                                            <div class="form-group">
                                                                <label class="text-white">Logo</label>
                                                                <div></div>
                                                                <div class="custom-file">
                                                                    <input type="file" name="file" class="custom-file-input" id="file"/>
                                                                    <label class="custom-file-label" for="file">Choose Your Logo</label>
                                                                </div>
                                                            </div>
                                                            <!--end::Input-->
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="form-group">
                                                                <label class="text-white">Color</label>
                                                                <div></div>
                                                                <div class="custom-file">
                                                                    <input class="form-control" name="color" type="color" value="#563d7c" id="example-color-input"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                        <!--end::Wizard Step 1-->

                                        <!--begin::Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-white">Enter Information of Landing Page</h4>
                                            <!--begin::Input-->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Home Address</label>
                                                        <input type="text" name="home_address" class="form-control"  placeholder="Home Address"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-white">Word Address </label>
                                                        <input type="text" class="form-control" name="work_address" placeholder="Work Address"/>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <!--begin::Input-->
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Home Phone</label>
                                                        <input type="text" name="home_phone" class="form-control"  placeholder="Home Phone"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-3">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-white">Work Phone </label>
                                                        <input type="text" name="work_phone" class="form-control"  placeholder="Work Phone"/>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                                <div class="col-xl-3">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-white">Fax</label>
                                                        <input type="text" name="fax" class="form-control"  placeholder="Fax Number"/>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                                <div class="col-xl-3">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Picture</label>
                                                        <div></div>
                                                        <div class="custom-file">
                                                            <input type="file" name="picture" class="custom-file-input" id="picture"/>
                                                            <label class="custom-file-label" for="picture">Choose Your Picture</label>
                                                        </div>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>
                                            <!--end::Input-->
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Personal Website</label>
                                                        <input type="text" name="personal_website" class="form-control"  placeholder="Personal Website"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Work Website</label>
                                                        <input type="text" name="work_website" class="form-control"  placeholder="Work Website"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Wizard Step 2-->

                                        <!--begin::Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <h4 class="mb-10 font-weight-bold text-white">Enter Your Social Media Links</h4>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Facebook</label>
                                                        <input type="text" name="facebook" class="form-control"  placeholder="Enter Your Facebook Page address"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-white">Instagram </label>
                                                        <input type="text" name="instagram" class="form-control"  placeholder="Enter Your Instagram Page address"/>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Twitter</label>
                                                        <input type="text" name="twitter" class="form-control"  placeholder="Enter Your Twitter Page address"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-white">Linkdin </label>
                                                        <input type="text" name="linkdin" class="form-control"  placeholder="Enter Your Linkdin Page address"/>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <!--begin::Input-->
                                                    <div class="form-group">
                                                        <label class="text-white">Skype</label>
                                                        <input type="text" name="skype" class="form-control"  placeholder="Enter Your Skype Page address"/>
                                                    </div>
                                                    <!--end::Input-->
                                                </div>
                                                <div class="col-xl-6">
                                                    <!--begin::Select-->
                                                    <div class="form-group">
                                                        <label class="text-white">WhatsApp </label>
                                                        <input type="text" name="whatsapp" class="form-control"  placeholder="Enter Your WhatsApp Page address"/>
                                                    </div>
                                                    <!--end::Select-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Wizard Step 3-->


                                        <!--begin::Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">
                                                    Previous
                                                </button>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">
                                                    Submit
                                                </button>
                                                <button type="button" class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">
                                                    Next
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Wizard Actions-->
                                    </form>
                                    <!--end::Wizard Form-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>
                        <!--end::Wizard-->
                    </div>
                    <!--end::Wizard-->
                </div>

            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
