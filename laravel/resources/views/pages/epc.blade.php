@extends('layouts.mst')
@section('title', 'EPC | '.env('APP_TITLE'))
@push('styles')
    <link href="{{asset('css/myAccordion.css')}}" rel="stylesheet">
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
                <div class="col-xl-3">
                    <div class="section_tittle">
                        <h2>EPC</h2>
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
                                       onclick="openAccordion('engineering','{{\Faker\Factory::create()->imageUrl()}}')"
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
                                       onclick="openAccordion('procurement','{{\Faker\Factory::create()->imageUrl()}}')"
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
                                       onclick="openAccordion('construction','{{\Faker\Factory::create()->imageUrl()}}')"
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
    <script>
        $(function () {
            $("a[data-target='#engineering']").click();
        });

        function openAccordion(epc, image) {
            $("#epc-image").attr('src', image).attr('alt', image);

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
