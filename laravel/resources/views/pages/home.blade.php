@extends('layouts.mst')
@section('title', 'Home | '.env('APP_TITLE'))
@push('styles')
    <style>
        .banner_part {
            background-image: url({{asset('img/banner/home-f.png')}});
        }

        .banner_part:after {
            opacity: 0.4;
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
    </style>
@endpush
@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h5>Since <span>2002</span></h5>
                            <h1>Salwa Engineering</h1>
                            <h3>EPC Solution Provider for Your Investment</h3>
                            <a href="#sectors" class="btn_1">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- business sectors start-->
    <section id="sectors" class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center" style="margin-bottom: -2em">
                <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12">
                    <div class="section_tittle">
                        <h2>Business Sectors</h2>
                        <p align="center"><b>SALWA ENGINEERING</b> has served mining sectors with a full range of capabilities
                            from opportunity assessment studies to facility turnover. Our services extend from initial
                            business evaluation studies, detailed feasibility studies, affront-end engineering package
                            development, detailed engineering, procurement and construction, to final commissioning and
                            start-up for primary expansion and revamp project. <b>SALWA ENGINEERING</b> serves the following sectors :</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                @foreach($sectors as $sector)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-3">
                        <a href="{{route('show.business-sector', ['sector' => $sector->uri])}}">
                            <div class="single_service_part">
                                <i class="{{$sector->icon}}"></i>
                                <span class="line"></span>
                                <h3>{{$sector->name}}</h3>
                                {!! $sector->description !!}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- business sectors start-->
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
