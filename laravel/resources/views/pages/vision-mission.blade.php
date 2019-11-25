@extends('layouts.mst')
@section('title', 'About: Vision and Mission | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumb_bg {
            background-image: url("{{asset('img/banner/about-f.png')}}");
        }

        .breadcrumb:after{
            opacity: .4;
        }

        #details p, #details ol{
            font-size: 17px;
            line-height: 2;
            letter-spacing: 1px;
            text-align: justify;
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
                            <h2>Vision & Mission</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>About <span>&ndash;</span>Vision & Mission</p>
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
            <div class="row" style="margin-bottom: -1em">
                <div class="col">
                    <div class="section_tittle">
                        <h2>Vision & Mission</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 mb-4">
                    <h3><b>OUR VISION</b></h3>
                    {!! $about->vision !!}
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                    <h3><b>OUR MISSION</b></h3>
                    {!! $about->mission !!}
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
