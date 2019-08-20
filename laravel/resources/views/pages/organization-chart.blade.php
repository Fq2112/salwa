@extends('layouts.mst')
@section('title', 'About: Organization Chart | '.env('APP_TITLE'))
@push('styles')
    <link rel="stylesheet" href="{{asset('vendor/org-chart/css/jquery.orgchart.css')}}">
    <style>
        .breadcrumb_bg {
            background-image: url("{{\Faker\Factory::create()->imageUrl(1920,400)}}");
        }

        .section_tittle h2 {
            text-align: center;
            margin-bottom: .5em;
        }

        .section_tittle h2:after {
            left: 0;
            right: 0;
            margin-right: auto;
            margin-left: auto;
        }

        #chart-container {
            height: 100%;
            padding: 5em;
            border: 2px dashed #aaa;
            border-radius: 5px;
            overflow: auto;
            text-align: center;
            background-image: linear-gradient(90deg, rgba(200, 0, 0, 0.15) 10%, rgba(0, 0, 0, 0) 10%), linear-gradient(rgba(200, 0, 0, 0.15) 10%, rgba(0, 0, 0, 0) 10%);
            background-size: 10px 10px;
        }

        .orgchart {
            background: transparent;
        }

        .oc-export-btn {
            right: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            border: 1px solid #cf000f;
            color: #fff;
            background-color: #cf000f;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .oc-export-btn:hover, .oc-export-btn:focus, .oc-export-btn:active {
            border: 1px solid #9b000e;
            background-color: #9b000e;
        }
    </style>
@endpush
@section('content')
    <!-- banner part start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Organization Chart</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>About <span>&ndash;</span>Organization
                                Chart</p>
                            <a href="#details" class="btn_1 mt-3">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!--::epc part start::-->
    <section id="details" class="our_industries padding_top">
        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: -1em">
                <div class="col">
                    <div class="section_tittle">
                        <h2>Organization Chart</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <div id="chart-container">
                        <img class="img-fluid" src="{{asset('img/organization-chart.png')}}" alt="Organization Chart">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::epc part end::-->
@endsection
@push('scripts')
    <script type="text/javascript"
            src="https://cdn.rawgit.com/stefanpenner/es6-promise/master/dist/es6-promise.auto.min.js"></script>
    <script type="text/javascript" src="{{asset('vendor/html2canvas.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/jspdf.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/org-chart/js/jquery.orgchart.min.js')}}"></script>
    <script>
        $(function () {
            var dataSource = {
                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                'title': '{{\Faker\Factory::create()->jobTitle}}',
                'children': [
                    {
                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                        'title': '{{\Faker\Factory::create()->jobTitle}}'
                    },
                    {
                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                        'children': [
                            {
                                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                'title': '{{\Faker\Factory::create()->jobTitle}}',
                            },
                            {
                                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                'title': '{{\Faker\Factory::create()->jobTitle}}',
                                'children': [
                                    {
                                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                                    },
                                    {
                                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                                        'children': [
                                            {
                                                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                                'title': '{{\Faker\Factory::create()->jobTitle}}',
                                            },
                                            {
                                                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                                'title': '{{\Faker\Factory::create()->jobTitle}}',
                                                'children': [
                                                    {
                                                        'name': 'Si Dan',
                                                        'title': 'intern'
                                                    },
                                                    {
                                                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                                                    }
                                                ]
                                            }
                                        ]
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                    },
                    {
                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                        'children': [
                            {
                                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                'title': '{{\Faker\Factory::create()->jobTitle}}',
                            },
                            {
                                'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                'title': '{{\Faker\Factory::create()->jobTitle}}',
                                'children': [
                                    {
                                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                                    },
                                    {
                                        'name': '{{\Faker\Factory::create('id')->firstName.' '.\Faker\Factory::create('id')->firstName}}',
                                        'title': '{{\Faker\Factory::create()->jobTitle}}',
                                    }
                                ]
                            }
                        ]
                    }
                ]
            };

            $('#chart-container2').orgchart({
                data: dataSource,
                nodeContent: 'title',
                verticalLevel: 3,
                visibleLevel: 4,
                pan: true,
                zoom: true,
                parentNodeSymbol: 'fa-user-tie',
                exportButton: true,
                exportFilename: 'Organization Chart of SALWA ENGINEERING'
            });
        });
    </script>
@endpush
