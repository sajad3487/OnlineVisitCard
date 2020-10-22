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
                            <h3 class="">
                                Data Analysis
                                {{--                                <span class="d-block text-muted pt-2 font-size-sm">This page shows Customers info</span>--}}
                            </h3>
                        </div>
                        @if(isset($landings) && $landings != null)
                        <div class="col-md-7 mt-8">
                            <form action="{{url('card/analysis')}}" method="get" class="">
                                <div class="row">
                                    <div class="form-group col-md-5 ">
                                        <label for="exampleSelect1">Select Card</label>
                                        <select class="form-control" name="landing_id" id="exampleSelect1">
                                            @foreach($landings as $landing)
                                                <option value="{{$landing->id}}" @if($landing->id == $landing_id) selected @endif>{{$landing->card->fname." ". $landing->card->lname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5 ">
                                        <label for="exampleSelect1">Select Time</label>
                                        <select class="form-control" name="period" id="exampleSelect1">
                                            <option value="7" @if($period == 7) selected @endif>Last Week</option>
                                            <option value="30" @if($period == 30) selected @endif>Last Month</option>
                                            <option value="365" @if($period == 365) selected @endif>Last Year</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2 mt-md-8">
                                        <button type="submit" class="btn btn-light-success mr-2 col-12">view</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <div class="overflow-auto">
                            @if(isset($landings) && $landings != null)
                                <div id="chart" style="height: 300px;"></div>
                                <script src="{{asset('js/echarts.min.js')}}"></script>
                                <!-- Chartisan -->
                                <script src="{{asset('js/chartisan_echarts.js')}}"></script>
                                <script>
                                    @if($period == 7)
                                        const chart = new Chartisan({
                                            el: '#chart',
                                            url: "{{url('api/chart/sample_chart'.'?landing='.$landing_id)}}",
                                            hooks: new ChartisanHooks()
                                                .legend()
                                                .colors()
                                                .datasets(['line', 'line'])
                                                .tooltip(),
                                        });
                                    @elseif ($period == 30)
                                        const chart = new Chartisan({
                                            el: '#chart',
                                            url: "{{url('api/chart/month_chart'.'?landing='.$landing_id)}}",
                                            hooks: new ChartisanHooks()
                                                .legend()
                                                .colors()
                                                .datasets(['line', 'line'])
                                                .tooltip(),
                                        });
                                    @elseif($period == 365)
                                        const chart = new Chartisan({
                                            el: '#chart',
                                            url: "{{url('api/chart/year_chart'.'?landing='.$landing_id)}}",
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



