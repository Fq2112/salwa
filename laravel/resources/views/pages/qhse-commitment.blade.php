@extends('layouts.mst')
@section('title', 'About: QHSE Commitment | '.env('APP_TITLE'))
@push('styles')
    <style>
        .breadcrumb_bg {
            background-image: url("{{asset('img/banner/qhse.png')}}");
        }

        .breadcrumb:after {
            opacity: .4;
        }

        #details p, #details ol {
            font-size: 18px;
        }

        .wrapReady {
            float: left;
            padding: 1rem;
        }

        .wrapReady.right {
            float: right;
            padding: 1rem;
        }

        blockquote {
            width: 100%;
            max-width:1170px;
            margin: 30px auto;
            box-sizing: border-box;
            padding: 10px 10px 10px 50px;
            border-left:8px solid #cf000f;
            border-right: 3px solid #cf000f;
            box-shadow: 2px 2px 15px #ccc;
            position: relative;
            font-size: 1.08em;
            line-height: 1.3em;
            letter-spacing: 1px;
            font-weight: 900;
            font-family: "Varela Round", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
        }

        blockquote:before {
            content: "\201C";
            font-size: 60px;
            position: absolute;
            font-weight: bold;
            color: #757575;
            left:10px;
            top:26px;
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
                            <h2>QHSE Commitment</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>QHSE Commitment</p>
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
                        <h2>QHSE Commitment</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img src="{{asset('img/qhse-1-30.png')}}" alt="Salwa Safety Policy Logo" class="wrapReady">
                    <p align="justify">In harmony with our vision, missions, and our values, we are committed to achieve
                        Quality, Health, Safety, and Environment (QHSE) excellence. To comply with that commitment, we
                        require to all employees, subcontractors and other stakeholders to always work with high
                        quality, health, safety and environment by ensuring that QHSE requirements are made as an
                        integral part into their daily routine and non-routine activities.</p><br>
                    <p align="justify">Safety will always take precedence over more expediencies - as our safety policy
                        and this commitment is central to everything we do. Our proactive approach creates value for our
                        clients and safeguards our most important assets – our employees. Our entire team is dedicated
                        to maintain a safety focused and environmentally sound business. Our safety culture is promoted
                        by each member of our team through planning, implementing and evaluating safety practices on a
                        daily basis.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img src="{{asset('img/qhse-2-25.png')}}" alt="PMI Logo" class="wrapReady right">
                    <p align="justify">Our safety program is pro-active and action oriented, everyone from management to
                        trades sessions, on going safety inspections, weekly safety meetings, safety seminars, special
                        equipment training, safety manual reviews and email updates to assist in attaining our goal of
                        zero incidents.</p><br>
                    <div class="row">
                        <div class="col">
                            <u style="font-size: larger"><b>THE TEN COMMITMENTS OF SAFETY :</b></u>
                            <ol>
                                <li>Learn the safety rules</li>
                                <li>Comply with the safety regulations</li>
                                <li>Prepare the job in a safely manner</li>
                                <li>Use the safe and proper equipments</li>
                                <li>Operate authorized equipments</li>
                                <li>Inspect the safety tools and equipments regularly</li>
                                <li>Think and act in a safely manner</li>
                                <li>Consult the unsafe condition immediately</li>
                                <li>Report injuries immediately</li>
                                <li>Create a safe working environment</li>
                            </ol>
                        </div>
                        <div class="col">
                            <blockquote>SAFETY WILL ALWAYS TAKE PRECEDENCE OVER MORE EXPEDIENCE</blockquote>
                        </div>
                    </div>
                    <p align="justify">Our hand efforts of what we are doing in accordance with our commitment as an EPC
                        company has been certified of ISO 9001:2000 & OHSAS 18001:2007 which was assessed and certified
                        by ASR American Systems Registrar.</p>
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
