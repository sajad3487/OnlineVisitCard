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
                                Data Analysis
                                {{--                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Customers info</span>--}}
                            </h3>
                        </div>
                        @if(isset($landings) && $landings != null)
                        <div class="card-toolbar">
                            <a href="{{url('/card/analysis/7')}}" class="btn btn-light-primary font-weight-bolder mt-2 @if($period == 7 || !isset($period))active @endif mr-2">Last Week</a>
                            <a href="{{url('/card/analysis/30')}}" class="btn btn-light-primary font-weight-bolder mt-2 @if($period == 30)active @endif mr-2">Last Month</a>
                            <a href="{{url('/card/analysis/365')}}" class="btn btn-light-primary font-weight-bolder mt-2 @if($period == 365)active @endif mr-2">Last Year</a>
                        </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">

                            @if(isset($landings) && $landings != null)
                                <form action="" class="">
                                    <div class="row col-md-10">
                                        <div class="form-group col-md-3 ">
                                            <label for="exampleSelect1">Example select <span class="text-danger">*</span></label>
                                            <select class="form-control" id="exampleSelect1">
                                                @foreach($landings as $landing)
                                                    <option value="{{$landing->id}}">{{$landing->card->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-2 mt-md-8">
                                            <button type="reset" class="btn btn-light-success mr-2 col-8">view</button>
                                        </div>
                                    </div>
                                </form>
                                <div id="chart" style="height: 300px;"></div>
                                <script src="{{asset('js/echarts.min.js')}}"></script>
                                <!-- Chartisan -->
                                <script src="{{asset('js/chartisan_echarts.js')}}"></script>
                                <script>
                                    @if($period == 7)
                                        const chart = new Chartisan({
                                            el: '#chart',
                                            url: "{{url('api/chart/sample_chart'.'?landing='.$landing)}}",
                                            hooks: new ChartisanHooks()
                                                .legend()
                                                .colors()
                                                .datasets(['line', 'line'])
                                                .tooltip(),
                                        });
                                    @elseif ($period == 30)
                                        const chart = new Chartisan({
                                            el: '#chart',
                                            url: "@chart('month_chart')",
                                            hooks: new ChartisanHooks()
                                                .legend()
                                                .colors()
                                                .datasets(['line', 'line'])
                                                .tooltip(),
                                        });
                                    @elseif($period == 365)
                                        const chart = new Chartisan({
                                            el: '#chart',
                                            url: "@chart('year_chart')",
                                            hooks: new ChartisanHooks()
                                                .legend()
                                                .colors()
                                                .datasets(['line', 'line'])
                                                .tooltip(),
                                        });
                                    @endif
                                </script>
                                @else
                                <h3 class="text-center text-muted my-10">You don't have any alanysis</h3>
                            @endif
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



