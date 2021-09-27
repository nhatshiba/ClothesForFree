@extends('admin.layout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-1">
                        <div class="card-body">
                            <h3 class="card-title text-white">Gifts</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">4565</h2>
                                <p class="text-white mb-0">Sep 2021</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-2">
                        <div class="card-body">
                            <h3 class="card-title text-white">Net Profit</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">$ 8541</h2>
                                <p class="text-white mb-0">Sep 2021</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-3">
                        <div class="card-body">
                            <h3 class="card-title text-white">New Customers</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">4565</h2>
                                <p class="text-white mb-0">Sep 2021</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card gradient-4">
                        <div class="card-body">
                            <h3 class="card-title text-white">Customer Satisfaction</h3>
                            <div class="d-inline-block">
                                <h2 class="text-white">99%</h2>
                                <p class="text-white mb-0">Sep 2021</p>
                            </div>
                            <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                        </div>
                    </div>
                </div>
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body pb-0 d-flex justify-content-between">--}}
{{--                                    <div>--}}
{{--                                        <h4 class="mb-1">New Customers</h4>--}}
{{--                                        <p>Total Earnings of the Month</p>--}}
{{--                                        <h3 class="m-0">$ 12,555</h3>--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        <ul>--}}
{{--                                            <li class="d-inline-block mr-3"><a class="text-dark" href="#">Day</a></li>--}}
{{--                                            <li class="d-inline-block mr-3"><a class="text-dark" href="#">Week</a></li>--}}
{{--                                            <li class="d-inline-block"><a class="text-dark" href="#">Month</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="chart-wrapper">--}}
{{--                                    <canvas id="chart_widget_2"></canvas>--}}
{{--                                </div>--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <div class="w-100 mr-2">--}}
{{--                                            <h6>Customers</h6>--}}
{{--                                            <div class="progress" style="height: 6px">--}}
{{--                                                <div class="progress-bar bg-danger" style="width: 40%"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="ml-2 w-100">--}}
{{--                                            <h6>Gifts</h6>--}}
{{--                                            <div class="progress" style="height: 6px">--}}
{{--                                                <div class="progress-bar bg-primary" style="width: 80%"></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection

@section('page-js')
    <script src="/assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="/assets/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="/assets/plugins/d3v3/index.js"></script>
    <script src="/assets/plugins/topojson/topojson.min.js"></script>
    <script src="/assets/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="/assets/plugins/raphael/raphael.min.js"></script>
    <script src="/assets/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="/assets/plugins/moment/moment.min.js"></script>
    <script src="/assets/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="/assets/plugins/chartist/js/chartist.min.js"></script>
    <script src="/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
@endsection()
