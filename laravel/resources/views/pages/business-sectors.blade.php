@extends('layouts.mst')
@section('title', 'Business Sector: '.str_replace("&","and",$sector->name).' | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumb_bg {
            background-image: url("{{asset('img/banner/sector.png')}}");
        }

        .breadcrumb:after{
            opacity: .3;
        }

        .section_bg {
            background-color: #fff;
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
                            <h2>{{$sector->name}}</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span><a href="{{route('home')}}#sectors">Business Sectors</a> <span>&ndash;</span>{{$sector->name}}</p>
                            <a href="#details" class="btn_1 mt-3">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- business sector details start-->
    <section id="details" class="about_part section_bg section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="about_img">
                        <img class="img-fluid rounded" src="{{asset('img/sectors/'.$sector->image)}}" alt="{{$sector->name}} Image">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="row" style="margin-bottom: -3.5em">
                        <div class="col">
                            <div class="section_tittle">
                                <h2>{{$sector->name}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="about_text">
                                {!! $sector->description !!}
                                {!! $sector->segments !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- business sector details start-->
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