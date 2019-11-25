@extends('layouts.mst')
@section('title', 'About: Organization Chart | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumb_bg {
            background-image: url("{{asset('img/banner/about-f.png')}}");
        }

        .breadcrumb:after{
            opacity: .4;
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
                        <img class="img-fluid" src="{{asset('img/orgchart.png')}}" alt="Organization Chart">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::epc part end::-->
@endsection
@push('scripts')
    <script>
        $('.btn_1').on('click', function () {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
        });
    </script>
@endpush
