@extends('layouts.mst')
@section('title', 'About: President Message | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumb_bg {
            background-image: url("{{asset('img/banner/about-f.png')}}");
        }

        .breadcrumb:after {
            opacity: .4;
        }

        #details p {
            font-size: 17px;
        }

        .wrapReady {
            float: left;
            padding: 1rem;
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
                            <h2>President Message</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>About <span>&ndash;</span>President
                                Message</p>
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
            <div class="row" style="margin-bottom: -2em">
                <div class="col">
                    <div class="section_tittle">
                        <h2>President Message</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img src="{{asset('img/president.png')}}" alt="President/CEO" class="wrapReady">
                    {!! $about->president_message !!}
                </div>
            </div>
        </div>
    </section>
    <!--::epc part end::-->
@endsection
@push('scripts')
    <script src="{{asset('vendor/jquery.slickwrap.js')}}"></script>
    <script>
        $(function () {
            $('.wrapReady').slickWrap({
                cutoff: 10,
                resolution: 15,
                bloomPadding: true
            });
        });

        $('.btn_1').on('click', function () {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
        });
    </script>
@endpush
