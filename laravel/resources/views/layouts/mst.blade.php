<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">
    <!-- Fontawesome 5.10.1 -->
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/fontawesome/css/all.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/myMaps.css')}}">
    <!-- Sweetalert2 -->
    <link rel="stylesheet" href="{{asset('vendor/sweetalert/sweetalert2.css')}}">
    <!-- Media queries -->
    <link rel="stylesheet" href="{{asset('css/media-query.css')}}">
    @stack('styles')
</head>
<body class="use-nicescroll">
@if(\Illuminate\Support\Facades\Request::is('project-experiences*'))
    <style>
        .particle-error,
        .permission_denied,
        #particles-js {
            width: 100%;
            height: 100%;
            margin: 0px !important;
        }

        #particles-js {
            position: fixed !important;
            opacity: 0.23;
        }
    </style>
    <div id="particles-js"></div>
@endif

<!--::header part start::-->
<header class="main_menu">
    <div class="sub_menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sub_menu_right_content">
                        <a href="tel:+62315667102"><i class="fa fa-phone"></i>+62 31 566 7102</a> <span>|</span>
                        <a href="mailto:{{env('MAIL_USERNAME')}}"><i class="fa fa-at"></i>{{env('MAIL_USERNAME')}}</a> <span>|</span>
                        <a href="https://fb.com/syaif.nain.9" target="_blank"><i class="fab fa-facebook-f"></i>Syaif Nain</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_menu_iner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('img/salwa.png')}}"
                                                                               alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                             id="navbarSupportedContent">
                            @include('layouts.partials._headermenu')
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header part end-->

@yield('content')

<!--::subscribe area start::-->
<section class="subscribe_area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="subscribe_iner">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
                            <div class="subscribe_area_tittle">
                                <h2>Feel free to get in touch with us!</h2>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            <aside class="single_sidebar_widget newsletter_widget">
                                <form method="post" action="{{route('submit.contact')}}">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col">
                                            <input type="text" class="form-control" placeholder="Enter your name"
                                                   name="name" required>
                                            <input type="email" class="form-control" placeholder="Enter email address"
                                                   name="email" required>
                                            <input type="text" class="form-control" placeholder="Enter subject"
                                                   name="subject" required>
                                        </div>
                                    </div>
                                    <div class="row form-group mb-0">
                                        <div class="col-8">
                                                <textarea placeholder="Write something here..." class="form-control"
                                                          name="message" required></textarea>
                                        </div>
                                        <div class="col">
                                            <button class="btn_2" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe area end::-->

<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-3 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <h4>Salwa Engineering</h4>
                    {!!\Illuminate\Support\Str::words(\App\Models\About::find(1)->company_history,23,'...')!!}
                    <a href="{{route('about.company-history')}}"><em>read more</em></a>
                </div>
            </div>
            <div class="col-sm-6 col-md-2 col-xl-2 col-offset-1">
                <div class="single-footer-widget">
                    <h4>Business Sectors</h4>
                    <ul>
                        @foreach(\App\Models\BusinessSectors::all() as $sector)
                            <li><a href="{{route('show.business-sector', ['sector' => $sector->uri])}}">{{$sector->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-xl-6">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                        <div class="single-footer-widget footer_icon">
                            <h4>Contact Info</h4>
                            <p align="justify">Komplek Bintang Diponggo – Kav. 885, Surabaya — 60265, East Java, Indonesia</p>
                            <ul>
                                <li><a href="tel:+62315667102"><i class="fa fa-phone"></i>+62 31 566 7102</a></li>
                                <li><a href="mailto:{{env('MAIL_USERNAME')}}"><i class="fa fa-envelope"></i>{{env('MAIL_USERNAME')}}</a></li>
                                <li><a href="https://fb.com/syaif.nain.9" target="_blank"><i class="fab fa-facebook-f"></i>Syaif Nain</a></li>
                                <li><a href="{{route('home')}}" target="_blank"><i class="fa fa-globe"></i>www.salwa.co.id</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div id="map" class="img-thumbnail" style="height: 300px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <p class="footer-text m-0">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        &copy; {{now()->format('Y').' '.env('APP_COMPANY')}}. All rights reserved. Template by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a> | Designed & Developed by
                        <a href="https://rabbit-media.net" target="_blank">Rabbit Media</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="#" onclick="scrollToTop()" class="to-top" title="Go to top">Top</a>
<div class="progress">
    <div class="bar"></div>
</div>
<!-- footer part end-->

<!-- jquery -->
<script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
<!-- popper js -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- bootstrap js -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- magnific js -->
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
<!-- swiper js -->
<script src="{{asset('js/swiper.min.js')}}"></script>
<!-- masonry js -->
<script src="{{asset('js/masonry.pkgd.js')}}"></script>
<!-- contact js -->
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('js/jquery.validate.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/contact.js')}}"></script>
<script src="{{asset('js/slick.min.js')}}"></script>
<!-- custom js -->
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('vendor/checkMobileDevice.js')}}"></script>
<!-- Nicescroll -->
<script src="{{asset('vendor/nicescroll/jquery.nicescroll.js')}}"></script>
<!-- Sweetalert2 -->
<script src="{{asset('vendor/sweetalert/sweetalert.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIljHbKjgtTrpZhEiHum734tF1tolxI68&libraries=places"></script>
<script>
    var google;

    function init() {
        var myLatlng = new google.maps.LatLng(-7.2900449,112.7179632);

        var mapOptions = {
            zoom: 15,
            center: myLatlng,
            scrollwheel: true,
            styles: [
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "landscape.man_made",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "on"}]}, {
                    "featureType": "road",
                    "elementType": "labels",
                    "stylers": [{"visibility": "simplified"}, {"lightness": 20}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [{"hue": "#f49935"}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{"hue": "#fad959"}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "labels",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "road.local",
                    "elementType": "labels",
                    "stylers": [{"visibility": "simplified"}]
                }, {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "on"}]
                }, {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"hue": "#a1cdfc"}, {"saturation": 30}, {"lightness": 49}]
                }]
        };

        var mapElement = document.getElementById('map');

        var map = new google.maps.Map(mapElement, mapOptions);

        var contentString =
            '<div id="iw-container">' +
            '<div class="iw-title">{{env('APP_COMPANY')}}</div>' +
            '<div class="iw-content">' +
            '<img class="img-fluid" src="{{asset('img/salwa.png')}}">' +
            '<div class="iw-subTitle">Contacts</div>' +
            '<p>Komplek Bintang Diponggo – Kav. 885, Surabaya — 60265, East Java, Indonesia<br>' +
            '<br>Phone: <a href="tel:+62315667102">+62 31 566 7102</a>' +
            '<br>E-mail: <a href="mailto:{{env('MAIL_USERNAME')}}">{{env('MAIL_USERNAME')}}</a>' +
            '</p></div><div class="iw-bottom-gradient"></div></div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 350
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            icon: '{{asset('img/pin.png')}}',
            anchorPoint: new google.maps.Point(0, -29)
        });

        marker.addListener('click', function () {
            infowindow.open(map, marker);
        });

        google.maps.event.addListener(map, 'click', function () {
            infowindow.close();
        });

        // styling infoWindow
        google.maps.event.addListener(infowindow, 'domready', function () {
            var iwOuter = $('.gm-style-iw');
            var iwBackground = iwOuter.prev();

            iwBackground.children(':nth-child(2)').css({'display': 'none'});
            iwBackground.children(':nth-child(4)').css({'display': 'none'});

            iwOuter.css({left: '22px', top: '15px'});
            iwOuter.parent().parent().css({left: '0'});

            iwBackground.children(':nth-child(1)').attr('style', function (i, s) {
                return s + 'left: -39px !important;'
            });

            iwBackground.children(':nth-child(3)').attr('style', function (i, s) {
                return s + 'left: -39px !important;'
            });

            iwBackground.children(':nth-child(3)').find('div').children().css({
                'box-shadow': 'rgba(72, 181, 233, 0.6) 0 1px 6px',
                'z-index': '1'
            });

            var iwCloseBtn = iwOuter.next();
            iwCloseBtn.css({
                background: '#fff',
                opacity: '1',
                width: '30px',
                height: '30px',
                right: '15px',
                top: '6px',
                border: '6px solid #48b5e9',
                'border-radius': '50%',
                'box-shadow': '0 0 5px #3990B9'
            });

            if ($('.iw-content').height() < 140) {
                $('.iw-bottom-gradient').css({display: 'none'});
            }

            iwCloseBtn.mouseout(function () {
                $(this).css({opacity: '1'});
            });
        });
    }

    google.maps.event.addDomListener(window, 'load', init);

    $(function () {
        window.mobilecheck() ? $("body").removeClass('use-nicescroll') : '';

        $(".use-nicescroll").niceScroll({
            cursorcolor: "rgba(207,0,15,1)",
            cursorwidth: "8px",
            background: "rgba(222, 222, 222, .75)",
            cursorborder: 'none',
            // cursorborderradius:0,
            autohidemode: 'leave',
            zindex: 99999999,
        });
    });

    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if ($(this).scrollTop() > 100) {
            $('.to-top').addClass('show-to-top');
        } else {
            $('.to-top').removeClass('show-to-top');
        }
    }

    function scrollToTop(callback) {
        if ($('html').scrollTop()) {
            $('html').animate({scrollTop: 0}, callback);
            return;
        }
        if ($('body').scrollTop()) {
            $('body').animate({scrollTop: 0}, callback);
            return;
        }
        callback();
    }

    var title = document.getElementsByTagName("title")[0].innerHTML;
    (function titleScroller(text) {
        document.title = text;
        setTimeout(function () {
            titleScroller(text.substr(1) + text.substr(0, 1));
        }, 500);
    }(title + " ~ "));

    <!--Scroll Progress Bar-->
    function progress() {
        var windowScrollTop = $(window).scrollTop();
        var docHeight = $(document).height();
        var windowHeight = $(window).height();
        var progress = (windowScrollTop / (docHeight - windowHeight)) * 100;
        var $bgColor = progress > 99 ? '#ff0012' : '#cf000f';
        var $textColor = progress > 99 ? '#fff' : '#333';

        $('.progress .bar').width(progress + '%').css({backgroundColor: $bgColor});
        // $('h1').text(Math.round(progress) + '%').css({color: $textColor});
        $('.fill').height(progress + '%').css({backgroundColor: $bgColor});
    }

    progress();

    $(document).on('scroll', progress);

    @if(session('contact'))
    swal('Successfully sent a message!', '{{ session('contact') }}', 'success');
    @endif
</script>
@stack('scripts')
</body>
</html>
