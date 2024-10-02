<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>WorkOut - Gym and Fitness</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{-- <meta name="author" content="ThemeZaa"> --}}
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Join our gym and fitness community for expert training, state-of-the-art equipment, and personalized workout plans to help you achieve your fitness goals.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">

        <!-- Google Fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <!-- Slider Revolution CSS files -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">

        <!-- Style sheets and font icons -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('assets/demos/gym-and-fitness/gym-and-fitness.css') }}"/>

    </head>
    <body data-mobile-nav-style="classic" class="custom-cursor"> 
        <!-- start cursor -->
        <div class="cursor-page-inner">
            <div class="circle-cursor circle-cursor-inner"></div>
            <div class="circle-cursor circle-cursor-outer"></div>
        </div>
        <!-- end cursor -->
        <!-- start header --> 
        @include('gym_and_fitness.partials.header')
        <!-- end header -->
        <!-- start slider -->
        @yield('content')
        <!-- end section -->
        <!-- start footer -->
        @include('gym_and_fitness.partials.footer')
        <!-- end footer -->
        <!-- start subscription popup -->
        {{-- <div id="subscribe-popup" class="mfp-hide subscribe-popup">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6 col-sm-8 bg-transparent">
                        <div class="row position-relative box-shadow-quadruple-large">
                            <div class="col-12 p-0 newsletter-popup position-relative text-center">
                                <a href="demo-gym-and-fitness-package.html">
                                    <img src="https://via.placeholder.com/480x706" alt="">
                                </a>
                            </div>
                            <button title="Close (Esc)" type="button" class="mfp-close text-white"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- end subscription popup -->
        <!-- start scroll progress -->
        <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
                <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
        </div>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/vendors.min.js') }}"></script>

        <!-- Slider Revolution core JavaScript files -->
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>


        <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
        <!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> -->
        <!-- Slider's main "init" script -->
        <script type="text/javascript">
            /* https://learn.jquery.com/using-jquery-core/document-ready/ */
            jQuery(document).ready(function () {

//    let windowHeight = $(window).outerHeight();
//    $(window).resize(function() {
//        windowHeight = $(window).outerHeight();
//    })

                /* initialize the slider based on the Slider's ID attribute from the wrapper above */
                jQuery('#gym-and-fitness-slider').show().revolution({
                    sliderType: "standard",
                    /* options are 'auto', 'fullwidth' or 'fullscreen' */
                    sliderLayout: 'fullscreen',
                    /* sets the Slider's default timeline */
                    delay: 9000,
                    /* options that disable autoplay */
                    stopLoop: "off",
                    stopAfterLoops: 0,
                    stopAtSlide: 1,
                    navigation: {
                        keyboardNavigation: "on",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: true
                        },
                        arrows: {

                            enable: true,
                            style: 'uranus',
                            rtl: false,
                            hide_onleave: false,
                            hide_onmobile: true,
                            hide_under: 0,
                            hide_over: 778,
                            hide_delay: 200,
                            hide_delay_mobile: 1200,
                            left: {
                                container: 'slider',
                                h_align: 'left',
                                v_align: 'center',
                                h_offset: 10,
                                v_offset: 10
                            },
                            right: {
                                container: 'slider',
                                h_align: 'right',
                                v_align: 'center',
                                h_offset: 10,
                                v_offset: 10
                            }

                        }

                    },

                    responsiveLevels: [1240, 1024, 778, 480],
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    gridwidth: [1190, 1024, 778, 480],
                    /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                    gridheight: [900, 920, 700, 650],
                    /* Lazy Load options are "all", "smart", "single" and "none" */
                    lazyType: "smart",
                    spinner: "spinner0",
                    parallax: {
                        type: "mouse+scroll",
                        origo: "enterpoint",
                        speed: 400,
                        speedbg: 1500,
                        speedls: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 60, 46, -10, -15, -20, -25, -30, 55],
                    }
                    ,
                    shadow: 0,
                    shuffle: "off",
                    autoHeight: "on",
                    fullScreenAutoWidth: "on",
                    fullScreenAlignForce: "on",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "1px",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                }
                );
            });
        </script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>