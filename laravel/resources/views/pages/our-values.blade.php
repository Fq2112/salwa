@extends('layouts.mst')
@section('title', 'About: Our Values | '.env('APP_TITLE'))
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

        #details p{
            font-size: 18px;
        }

        .drop-caps{
            letter-spacing: 2px;
        }

        .drop-caps span {
            background: linear-gradient(#cf000f, #55000c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            float: left;
            font-family: "Varela Round", "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
            font-size: 75px;
            line-height: 60px;
            padding-top: 4px;
            padding-right: 8px;
            padding-left: 3px;
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
                            <h2>Our Values</h2>
                            <p><a href="{{route('home')}}">Home</a> <span>&ndash;</span>About <span>&ndash;</span>Our Values</p>
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
            <div class="row justify-content-center" style="margin-bottom: -2em">
                <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12">
                    <div class="section_tittle">
                        <h2>Our Values</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12">
                    <p align="center"><b>SALWA ENGINEERING</b> shares its values with the other companies in the <b>SALWA GROUP</b>. In our organization, values are essential for building trust- in each other, in our partners, in our clients, in our customers and with society. Values are the compass that guides our policies and operations to achieve our goals as a leading <b>EPC</b> company.</p><br>
                    <p align="justify"><b class="drop-caps"><span>G</span>ROWTH</b><br>Continuous growth of expertise in the creation new opportunities and the resources for going forward both for us and for our customers and partners.</p><br>
                    <p align="justify"><b class="drop-caps"><span>O</span>PEN DISCUSSION</b><br>We encourage early and honest communication to build customers trust as the key to our business.</p><br><br>
                    <p align="justify"><b class="drop-caps"><span>A</span>CCOUNTABLE</b><br>We are accountable and solutions-oriented focusing on the right details at the right time.</p><br><br>
                    <p align="justify"><b class="drop-caps"><span>H</span>ANDS-ON MANAGEMENT</b><br>We know and understand our business and get things-done for customers’ satisfaction.</p><br>
                    <p align="justify"><b class="drop-caps"><span>E</span>MPOWERING THE PEOPLE</b><br>We believe in empowering the people close to the action to take responsibility.</p><br>
                    <p align="justify"><b class="drop-caps"><span>A</span>CHIEVABLE HSE EXCELLENT</b><br>We want to achieve HSE excellent in all activities within the organization.</p><br>
                    <p align="justify"><b class="drop-caps"><span>D</span>ELIVERY RESULTS</b><br>We deliver consistently in reasonable targeted time and strive to drive our goals.</p>
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