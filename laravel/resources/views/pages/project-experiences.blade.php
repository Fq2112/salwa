@extends('layouts.mst')
@section('title', 'About: Project Experiences | '.env('APP_TITLE'))
@push('styles')
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

        .president-exp {
            position: absolute;
            bottom: -60px;
            right: 0;
        }

        .timeline {
            position: relative;
            margin: 50px auto;
            padding: 40px 0;
            width: 1000px;
            box-sizing: border-box;
            text-transform: uppercase;
        }

        .timeline:before {
            content: '';
            position: absolute;
            left: 50%;
            width: 2px;
            height: 100%;
            background: #c5c5c5;
        }

        .timeline h1 {
            font-size: 60px;
            text-align: center;
        }

        .timeline ul {
            padding: 0;
            margin: 0;
        }

        .timeline ul li {
            list-style: none;
            position: relative;
            width: 50%;
            padding: 20px 40px;
            box-sizing: border-box;
        }

        .timeline ul li:nth-child(odd) {
            float: left;
            text-align: right;
            clear: both;
        }

        .timeline ul li:nth-child(even) {
            float: right;
            text-align: left;
            clear: both;
        }

        .timeline .content {
            padding-bottom: 20px;
        }

        .timeline ul li:nth-child(odd):before {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            top: 24px;
            right: -6px;
            background: rgb(207, 0, 15);
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(207, 0, 15, 0.2);
        }

        .timeline ul li:nth-child(even):before {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            top: 24px;
            left: -4px;
            background: rgba(207, 0, 15, 1);
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(207, 0, 15, 0.2);
        }

        .timeline ul li h3 {
            padding: 0;
            margin: 0;
            color: rgba(207, 0, 15, 1);
            font-weight: 600;
        }

        .timeline ul li p {
            padding: 0;
            font-size: 19px;
            line-height: 1.4;
        }

        .timeline ul li .time h4 {
            margin: 0;
            padding: 0;
            font-size: 18px;
            color: #fff;
        }

        .timeline ul li:nth-child(odd) .time {
            position: absolute;
            top: 12px;
            right: -165px;
            margin: 0;
            padding: 8px 16px;
            background: rgba(207, 0, 15, 1);
            color: #fff;
            border-radius: 18px;
            box-shadow: 0 0 0 3px rgba(207, 0, 15, 0.3);
        }

        .timeline ul li:nth-child(even) .time {
            position: absolute;
            top: 12px;
            left: -165px;
            margin: 0;
            padding: 8px 16px;
            background: rgba(207, 0, 15, 1);
            color: #fff;
            border-radius: 18px;
            box-shadow: 0 0 0 3px rgba(207, 0, 15, 0.3);
        }

        @media (max-width: 1000px) {
            .timeline {
                width: 100%;
            }
        }

        @media (max-width: 767px) {
            .timeline {
                width: 100%;
                padding-bottom: 0;
            }

            .timeline h1 {
                font-size: 40px;
                text-align: center;
            }

            .timeline:before {
                left: 20px;
                height: 100%;
            }

            .timeline ul li:nth-child(odd),
            .timeline ul li:nth-child(even) {
                width: 100%;
                text-align: left;
                padding-left: 50px;
                padding-bottom: 50px;
            }

            .timeline ul li:nth-child(odd):before,
            .timeline ul li:nth-child(even):before {
                top: -18px;
                left: 16px;
            }

            .timeline ul li:nth-child(odd) .time,
            .timeline ul li:nth-child(even) .time {
                top: -30px;
                left: 50px;
                right: inherit;
            }
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
                            <h2>Project Experiences</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>About <span>&ndash;</span>Project
                                Experiences</p>
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
            <div class="row justify-content-center" style="margin-bottom: -3.5em">
                <div class="col">
                    <div class="section_tittle">
                        <h2>Project Experiences</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <img class="img-fluid president-exp" src="{{asset('img/president-exp-25.png')}}"
                         alt="President/CEO">
                    <div class="timeline">
                        <ul>
                            <li>
                                <div class="content">
                                    <h3>city government of surabaya</h3>
                                    <p>flood prevention project &ndash; surabaya, east java, indonesia</p>
                                </div>
                                <div class="time">
                                    <h4>2002 &ndash; 2003</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>pt. cmwi</h3>
                                    <p class="mb-3">parker ducting powder coating project &ndash; pasuruan, east java, indonesia</p>
                                    <h3>pt. boc gases indonesia</h3>
                                    <p class="mb-3">epc vit remediance project &ndash; gresik, east java, indonesia</p>
                                    <h3>pt. ajinomoto</h3>
                                    <p>plate form & pipe rack &ndash; mojokerto, east java, indonesia</p>
                                </div>
                                <div class="time">
                                    <h4>2004</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PT. BAYER INDONESIA</h3>
                                    <p>EPC GRANULISATION PLANT PROJECT</p>
                                </div>
                                <div class="time">
                                    <h4>2005</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PT. SIEMENS INDONESIA</h3>
                                    <p class="mb-3">tower communication project, nokia & siemens network</p>
                                    <h3>ESIA</h3>
                                    <p>tower communication bakrie telkom</p>
                                </div>
                                <div class="time">
                                    <h4>2006</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PT. TRIWAHANA UNIVERSAL</h3>
                                    <p>EPC MINI OIL REFINERY PLANT (BLOK EXXON MOBILE) &ndash; BOJONEGORO, EAST JAVA, indonesia</p>
                                </div>
                                <div class="time">
                                    <h4>2008 &ndash; 2010</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PT. PLN (PERSERO)</h3>
                                    <p>4 LOCATION, PANSTOCK PLTMH &ndash; WEST SULAWESI, indonesia</p>
                                </div>
                                <div class="time">
                                    <h4>2009 &ndash; 2010</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PRINSTINE OIL, SDN. BHD</h3>
                                    <p>EPC OIL STORAGE TANK MALAKA &ndash; malaysia</p>
                                </div>
                                <div class="time">
                                    <h4>2010 &ndash; 2011</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>SOK AIR SAN, CO. LTD</h3>
                                    <p class="mb-3">EPC RICE MILLING PLANT &ndash; CAMBODIA</p>
                                    <h3>ICA – WIKA (PERSERO)</h3>
                                    <p class="mb-3">EPC BELT CONVEYOR SYSTEM-WEST &ndash; KALIMANTAN, indonesia</p>
                                    <h3>PT. PLN TANJUNG JATI B</h3>
                                    <p class="mb-3">ADMIN BULING 3 FLOOR &ndash; JEPARA, central java, indonesia</p>
                                    <h3>PT. KRAKATAU ENGINEERING</h3>
                                    <p>DESIGN ENGINEERING CIVIL STRUCTRUCTURE</p>
                                </div>
                                <div class="time">
                                    <h4>2011 &ndash; 2012</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PT. GREEN GAS ENERGY</h3>
                                    <p>EPC CNG PLANT CAP. 5 MMSCFD &ndash; GRESIK, EAST JAVA, indonesia</p>
                                </div>
                                <div class="time">
                                    <h4>2012 &ndash; 2013</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>JGC INDONESIA</h3>
                                    <p>ENGINEERING SUPPORT</p>
                                </div>
                                <div class="time">
                                    <h4>2014 &ndash; 2016</h4>
                                </div>
                            </li>

                            <li>
                                <div class="content">
                                    <h3>PROPOSAL DEVELOPMENT FOR BUSINESS INVESTMENT & EPC &ndash; GO A HEAD <i class="fa fa-angle-double-right"></i></h3>
                                </div>
                                <div class="time">
                                    <h4>2017 &ndash; PRESENT</h4>
                                </div>
                            </li>

                            <div style="clear:both;"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::epc part end::-->
@endsection
@push('scripts')
    <!-- ParticleJS -->
    <script src="{{asset('vendor/particles.min.js')}}"></script>
    <script>
        (function () {
            particlesJS('particles-js', {
                'particles': {
                    'number': {
                        'value': 100,
                        'density': {
                            'enable': true,
                            'value_area': 1000
                        }
                    },
                    'color': {
                        'value': ['#111111', '#222222']
                    },
                    'shape': {
                        'type': 'circle',
                        'stroke': {
                            'width': 0,
                            'color': '#fff'
                        },
                        'polygon': {
                            'nb_sides': 5
                        }
                    },
                    'opacity': {
                        'value': 0.6,
                        'random': false,
                        'anim': {
                            'enable': false,
                            'speed': 1,
                            'opacity_min': 0.1,
                            'sync': false
                        }
                    },
                    'size': {
                        'value': 2,
                        'random': true,
                        'anim': {
                            'enable': false,
                            'speed': 40,
                            'size_min': 0.1,
                            'sync': false
                        }
                    },
                    'line_linked': {
                        'enable': true,
                        'distance': 80,
                        'color': '#111',
                        'opacity': 0.9,
                        'width': 1
                    }
                },
                'interactivity': {
                    'detect_on': 'canvas',
                    'events': {
                        'onhover': {
                            'enable': true,
                            'mode': 'grab'
                        },
                        'onclick': {
                            'enable': false
                        },
                        'resize': true
                    },
                    'modes': {
                        'grab': {
                            'distance': 240,
                            'line_linked': {
                                'opacity': 1
                            }
                        },
                        'bubble': {
                            'distance': 600,
                            'size': 80,
                            'duration': 8,
                            'opacity': 6,
                            'speed': 3
                        },
                        'repulse': {
                            'distance': 300,
                            'duration': 0.4
                        },
                        'push': {
                            'particles_nb': 2
                        },
                        'remove': {
                            'particles_nb': 4
                        }
                    }
                },
                'retina_detect': true
            });

        }).call(this);
    </script>
@endpush
