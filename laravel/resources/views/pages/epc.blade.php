@extends('layouts.mst')
@section('title', 'EPC | '.env('APP_TITLE'))
@push('styles')
    <link href="{{asset('vendor/lightgallery/dist/css/lightgallery.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/myAccordion.css')}}" rel="stylesheet">
    <style>
        .breadcrumb_bg {
            background-image: url("{{asset('img/banner/epc-f.png')}}");
        }

        .breadcrumb:after {
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

        .stroke-dotted {
            opacity: 0;
            stroke-dasharray: 4,5;
            stroke-width: 1px;
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            -webkit-animation: spin 4s infinite linear;
            animation: spin 4s infinite linear;
            transition: opacity 1s ease,  stroke-width 1s ease;
        }

        .stroke-solid {
            stroke-dashoffset: 0;
            stroke-dashArray: 300;
            stroke-width: 4px;
            transition: stroke-dashoffset 1s ease,  opacity 1s ease;
        }

        .icon {
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            transition: -webkit-transform 200ms ease-out;
            transition: transform 200ms ease-out;
            transition: transform 200ms ease-out, -webkit-transform 200ms ease-out;
        }

        #play:hover .stroke-dotted {
            stroke-width: 4px;
            opacity: 1;
        }
        #play:hover .stroke-solid {
            opacity: 0;
            stroke-dashoffset: 300;
        }
        #play:hover .icon {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        #play {
            cursor: pointer;
            position: relative;
            left: 50%;
            margin: 5em auto -5em auto;
            -webkit-transform: translateY(-50%) translateX(-50%);
            transform: translateY(-50%) translateX(-50%);
        }

        @-webkit-keyframes spin {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
        @keyframes spin {
            to {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        .lg-backdrop, .lg-outer{
            z-index: 999999;
        }

        .lg-sub-html h4 {
            color: #fff;
            font-size: 18px;
        }

        .lg-sub-html p {
            color: #fff;
            font-size: 14px;
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
                            <h2>EPC</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>EPC</p>
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
                        <h2>EPC</h2>
                        <svg data-toggle="tooltip" title="Click here to play our animation sample!"
                             data-placement="bottom" version="1.1" id="play" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" height="100px" width="100px"
                             viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
                        <path class="stroke-solid" fill="none" stroke="#cf000f" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
    C97.3,23.7,75.7,2.3,49.9,2.5"/>
                            <path class="stroke-dotted" fill="none" stroke="#cf000f" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
    C97.3,23.7,75.7,2.3,49.9,2.5"/>
                            <path class="icon" fill="#cf000f"
                                  d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"/></svg>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 col-lg-7 col-xl-6">
                    <div class="panel-group accordion">
                        <!-- engineering-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title mb-0">
                                    <a class="accordion-toggle collapsed" href="javascript:void(0)"
                                       onclick="openAccordion('engineering','{{asset('img/epc/engineering.png')}}')"
                                       data-toggle="collapse" data-target="#engineering"
                                       aria-expanded="true" aria-controls="engineering"><u>E</u>NGINEERING</a>
                                </h4>
                            </div>
                            <div id="engineering" class="panel-collapse collapse mt-2"
                                 aria-labelledby="engineering" data-parent=".accordion">
                                <div class="panel-body">
                                    {!! $about->engineering !!}
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">

                        <!-- procurement-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title mb-0">
                                    <a class="accordion-toggle collapsed" href="javascript:void(0)"
                                       onclick="openAccordion('procurement','{{asset('img/epc/procurement.png')}}')"
                                       data-toggle="collapse" data-target="#procurement"
                                       aria-expanded="true" aria-controls="procurement"><u>P</u>ROCUREMENT</a>
                                </h4>
                            </div>
                            <div id="procurement" class="panel-collapse collapse mt-2"
                                 aria-labelledby="procurement" data-parent=".accordion">
                                <div class="panel-body">
                                    {!! $about->procurement !!}
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">

                        <!-- construction-->
                        <div class="panel">
                            <div class="panel-heading">
                                <h4 class="panel-title mb-0">
                                    <a class="accordion-toggle collapsed" href="javascript:void(0)"
                                       onclick="openAccordion('construction','{{asset('img/epc/construction-f.png')}}')"
                                       data-toggle="collapse" data-target="#construction"
                                       aria-expanded="true" aria-controls="construction"><u>C</u>ONSTRUCTION</a>
                                </h4>
                            </div>
                            <div id="construction" class="panel-collapse collapse mt-2"
                                 aria-labelledby="construction" data-parent=".accordion">
                                <div class="panel-body">
                                    {!! $about->construction !!}
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                    </div>
                </div>
                <div class="col-sm-12 col-lg-5 col-xl-6">
                    <img id="epc-image" class="img-fluid rounded" src="#" alt="Image">
                </div>
            </div>
        </div>
    </section>
    <!--::epc part end::-->
@endsection
@push('scripts')
    <script src="{{asset('vendor/lightgallery/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/modules/lg-video.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/picturefill.min.js')}}"></script>
    <script src="{{asset('vendor/lightgallery/lib/jquery.mousewheel.min.js')}}"></script>
    <script>
        $(function () {
            $("a[data-target='#engineering']").click();
        });

        $('.btn_1').on('click', function () {
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500);
        });

        $('#play').on('click', function () {
            $(this).lightGallery({
                dynamic: true,
                dynamicEl: [
                    {
                        "src": 'https://youtu.be/aCRYqNN2i-U',
                        'thumb': 'https://youtu.be/aCRYqNN2i-U',
                        'subHtml': '<h4>ETHANOL PLANT</h4><p>Animation Sample</p>'
                    }, {
                        'src': 'https://youtu.be/Nf0HpDAbVwE',
                        'thumb': 'https://youtu.be/Nf0HpDAbVwE',
                        'subHtml': '<h4>GGE CNG ANIMATION</h4><p>Animation Sample</p>'
                    }, {
                        'src': 'https://youtu.be/st-GSEEKJPU',
                        'thumb': 'https://youtu.be/st-GSEEKJPU',
                        'subHtml': "<h4>JEMBRANA TOWER – BALI</h4><p>Animation Sample</p>"
                    }, {
                        'src': 'https://youtu.be/7phsaZa-3Ro',
                        'thumb': 'https://youtu.be/7phsaZa-3Ro',
                        'subHtml': "<h4>JEMBRANA TRADE CENTER – BALI</h4><p>Animation Sample</p>"
                    }, {
                        'src': 'https://youtu.be/5mFL5_FhIA0',
                        'thumb': 'https://youtu.be/5mFL5_FhIA0',
                        'subHtml': '<h4>MINI OIL REFINERY 6000 BPD</h4><p>Animation Sample</p>'
                    }, {
                        'src': 'https://youtu.be/q3ING29M9DY',
                        'thumb': 'https://youtu.be/q3ING29M9DY',
                        'subHtml': "<h4>MOST (MELAKA OIL STORAGE TERMINAL)</h4><p>Animation Sample</p>"
                    }, {
                        'src': 'https://youtu.be/_DjHwIsv9Is',
                        'thumb': 'https://youtu.be/_DjHwIsv9Is',
                        'subHtml': "<h4>PKS SIAK</h4><p>Animation Sample</p>"
                    }, {
                        'src': 'https://youtu.be/woFttxOiXUs',
                        'thumb': 'https://youtu.be/woFttxOiXUs',
                        'subHtml': '<h4>SEMARANG GRANDCITY</h4><p>Animation Sample</p>'
                    }, {
                        'src': 'https://youtu.be/bX2B9rF9nJU',
                        'thumb': 'https://youtu.be/bX2B9rF9nJU',
                        'subHtml': "<h4>STKIP v1</h4><p>Animation Sample</p>"
                    }, {
                        'src': 'https://youtu.be/GKJFonVZw00',
                        'thumb': 'https://youtu.be/GKJFonVZw00',
                        'subHtml': "<h4>TIMOR LESTE STORAGE OIL</h4><p>Animation Sample</p>"
                    }]
            });
        });

        function openAccordion(epc, image) {
            $("#epc-image").attr('src', image).attr('alt', epc);
            
            $('html, body').animate({
                scrollTop: $('#details').offset().top
            }, 500);

            setTimeout(function () {
                $('.use-nicescroll').getNiceScroll().resize()
            }, 600);
        }

        $(".accordion-toggle").on('click', function (e) {
            if ($(this).parents('.panel').children('.panel-collapse').hasClass('show')) {
                e.stopPropagation();
            }
        });
    </script>
@endpush
