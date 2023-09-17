<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta property="fb:app_id" content=""/>
    <meta property="fb:admins" content=""/>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F5H0K6KGHL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-F5H0K6KGHL');
    </script>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
    <title>@yield('title')</title>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-css'
          href='{{asset('assets/client/wp-includes/css/dist/block-library/style.min.css?ver=6.2.2')}}' rel='preload'
          type='text/css'
          media='all'/>
    <link rel='stylesheet' id='classic-theme-styles-css'
          href='{{asset('assets/client/wp-includes/css/classic-themes.min.css?ver=6.2.2')}}' rel='preload'
          type='text/css' media='all'/>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            margin-left: auto !important;
            margin-right: auto !important;
        }
        body .is-layout-flex > * {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }
    </style>
    <link rel='stylesheet' id='redux-extendify-styles-css'
          href='{{asset('assets/client/wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities.css?ver=4.4.4')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css'
          href='{{asset('assets/client/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7')}}'
          rel='preload'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='google-language-translator-css'
          href='{{asset('assets/client/wp-content/plugins/google-language-translator/css/style.css?ver=6.0.19')}}'
          rel='preload'
          type='text/css' media=''/>
    <link rel='stylesheet' id='owl-carousel-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/owl.carousel.css?ver=6.2.2')}}'
          rel='preload' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='bootstrap-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/bootstrap.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='specia-custom-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/custom.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='specia-typography-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/typography.css?ver=6.2.2')}}'
          rel='preload' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='specia-widget-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/widget.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='animate-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/animate.min.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='specia-menus-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/menus.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='swiper-css-css'
          href='{{asset('assets/client/wp-content/themes/C5group/css/swiper.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css'
          href='{{asset('assets/client/wp-content/themes/C5group/inc/fonts/font-awesome/css/font-awesome-all.min.css?ver=6.2.2')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='specia-style-css'
          href='{{asset('assets/client/wp-content/themes/C5group/style.css?ver=1690447089')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='dflip-icons-style-css'
          href='{{asset('assets/client/wp-content/plugins/3d-flipbook-dflip-lite/assets/css/themify-icons.min.css?ver=1.7.35')}}'
          rel='preload' type='text/css' media='all'/>
    <link rel='stylesheet' id='dflip-style-css'
          href='{{asset('assets/client/wp-content/plugins/3d-flipbook-dflip-lite/assets/css/dflip.min.css?ver=1.7.35')}}'
          rel='preload'
          type='text/css' media='all'/>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-includes/js/jquery/jquery.min.js?ver=3.6.4')}}'
            id='jquery-core-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.0')}}'
            id='jquery-migrate-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/owl.carousel.min.js?ver=6.2.2')}}'
            id='owl-carousel-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/bootstrap.min.js?ver=6.2.2')}}'
            id='bootstrap-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/jquery.simple-text-rotator.min.js?ver=6.2.2')}}'
            id='jquery-text-rotator-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/jquery.sticky.js?ver=6.2.2')}}'
            id='jquery-sticky-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/wow.min.js?ver=6.2.2')}}'
            id='wow-min-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/swiper.min.js?ver=6.2.2')}}'
            id='swiper-min-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/component.min.js?ver=6.2.2')}}'
            id='specia-service-component-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/themes/C5group/js/custom.js?dgaw&#038;ver=6.2.2')}}'
            id='specia-custom-js-js'></script>
    <meta name="generator" content="WordPress 6.2.2"/>
    <link rel="stylesheet" href="{{asset('assets/admin/css/fontend.css')}}">
    <meta name="generator" content="Redux 4.4.4"/>

    <style>
        p.hello {
            font-size: 12px;
            color: darkgray;
        }

        #google_language_translator,
        #flags {
            text-align: left;
        }

        #google_language_translator,
        #language {
            clear: both;
            width: 160px;
            text-align: right;
        }

        #language {
            float: right;
        }

        #flags {
            text-align: right;
            width: 165px;
            float: right;
            clear: right;
        }

        #flags ul {
            float: right !important;
        }

        p.hello {
            text-align: right;
            float: right;
            clear: both;
        }

        #flags {
            width: 165px;
        }

        #flags a {
            display: inline-block;
            margin-left: 2px;
        }

        #google_language_translator a {
            display: none !important;
        }

        #google_language_translator {
            display: none;
        }

        #google_language_translator select.goog-te-combo {
            color: #32373c;
        }

        div.skiptranslate {
            display: none !important;
        }

        body {
            top: 0px !important;
        }
        #glt-translate-trigger > span {
            color: #ffffff;
        }

        .goog-te-gadget .goog-te-combo {
            width: 100%;
        }
    </style>
    <meta name="generator"
          content="Powered by Slider Revolution 6.6.12 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    {{--    <link rel="icon" href="./wp-content/uploads/2022/09/cropped-logo-32x32.png" sizes="32x32"/>--}}
    {{--    <link rel="icon" href="./wp-content/uploads/2022/09/cropped-logo-192x192.png" sizes="192x192"/>--}}
    {{--    <link rel="apple-touch-icon" href="./wp-content/uploads/2022/09/cropped-logo-180x180.png"/>--}}
    <meta name="msapplication-TileImage" content="./wp-content/uploads/2022/09/cropped-logo-270x270.png"/>
    <script>
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth, newh;
                pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0)
                            e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0)
                            e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length), ix = 0, sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl)
                        nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el)
                    el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        }
        ;</script>
    <style id="c5_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        #section-introduce {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center bottom;
            background-image: url('{{asset('assets/client/wp-content/uploads/2022/08/bgtroi-1-1.jpg')}}');
            background-size: inherit;
        }

        .footer-sidebar {
            background-repeat: inherit;
            background-attachment: inherit;
            background-position: center bottom;
            background-image: url('{{asset('assets/client/wp-content/uploads/2020/09/bg-footer.jpg')}}');
        }
    </style>

    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
</head>
<body class="home page-template page-template-templates page-template-template-homepage-one page-template-templatestemplate-homepage-one-php page page-id-13">
@php
    $config = \App\Models\Config::where('status', \App\Enums\ConfigStatus::ACTIVE)->first();
@endphp

<div id="page-wrapper" class="site">
    @include('clients.layouts.header')
    <div class="clearfix"></div>
    @include('sweetalert::alert')
    <div id="content" class="site-content" role="main">
        @yield('content')
    </div>

    <!--======================================
                    Footer Section
    ========================================-->
    <script>
        jQuery(document).ready(function ($) {
            var swiper = new Swiper(".slider_sec_8", {
                slidesPerView: 3,
                spaceBetween: 0,
                speed: 1000,
                loop: true,
                autoplay: {
                    delay: 3000,
                },
                centeredSlides: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    991: {
                        slidesPerView: 3,
                    },
                },
            });
        });
    </script>
    @include('clients.layouts.footer')
    <div class="clearfix"></div>
    <!--======================================
    Footer Copyright
    ========================================-->
    <section class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="copyright">Copyright © 2016. All rights reserved. Bản quyền thuộc về thitchincham.com
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--======================================
    Top Scroller
    ========================================-->
{{--    <a href="#" class="top-scroll">--}}
{{--        <img src="{{asset('assets/client/wp-content/uploads/2022/09/top.png')}}" width="93" height="105" alt=""--}}
{{--             decoding="async"--}}
{{--             loading="lazy"/>--}}
{{--    </a>--}}

    <div class="social-ring mt-5">
        <div class="social-ring-main">
            <div class="social-ring-content">
                <a href="tel:{{$config->hotline}}" class="call-icon" rel="nofollow" target="_blank">
                    <img src="{{asset('assets/client/wp-content/uploads/2022/09/phone2.png')}}" width="132"
                         height="137" alt=""
                         decoding="async" loading="lazy"/>
                </a>
                <a href="{{$config->facebook}}" class="mes" target="_blank">
                    <img src="{{asset('assets/client/wp-content/uploads/2022/09/facebook.png')}}" width="132"
                         height="136" alt=""
                         decoding="async" loading="lazy"/>
                </a>
                <a href="{{$config->zalo}}" style="padding: 13px" class="mes" target="_blank">
                    <img src="{{asset('upload/images/zalo.png')}}" width="132"
                         height="136" alt=""
                         decoding="async" loading="lazy"/>
                </a>
            </div>
        </div>
        <a class="user-support" title="Hỗ trợ trực tuyến" style="display:none;">
            <i class="fa fa-users" aria-hidden="true"></i>
            <div class="animated alo-circle"></div>
            <div class="animated alo-circle-fill"></div>
        </a>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $('.user-support').click(function (event) {
                $('.social-ring-main').slideToggle();
            });
        });
        jQuery(document).ready(function ($) {
            $(window).load(function () {
                setTimeout(function () {
                    $('#registerForms').modal('show');
                }, 5000);
            });
        });
    </script>
    <div class="modal fade" id="registerForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Vui lòng điền đầy đủ thông tin vào mẫu bên dưới!</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="wpcf7 no-js" id="wpcf7-f9-o1" lang="vi" dir="ltr">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="/#wpcf7-f9-o1" method="post" class="wpcf7-form init" aria-label="Form liên hệ"
                              novalidate="novalidate" data-status="init">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="9"/>
                                <input type="hidden" name="_wpcf7_version" value="5.7.7"/>
                                <input type="hidden" name="_wpcf7_locale" value="vi"/>
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f9-o1"/>
                                <input type="hidden" name="_wpcf7_container_post" value="0"/>
                                <input type="hidden" name="_wpcf7_posted_data_hash" value=""/>
                            </div>
                            <div class="form-group">
                                <div class="row-form_register">
                                    <p>
                                            <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                <input size="40" class="wpcf7-form-control wpcf7-text form-control"
                                                       aria-invalid="false" placeholder="Họ tên" value="" type="text"
                                                       name="your-name"/>
                                            </span>
                                        <span class="wpcf7-form-control-wrap" data-name="your-phone">
                                                <input size="40"
                                                       class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control"
                                                       aria-required="true" aria-invalid="false"
                                                       placeholder="Điện thoại"
                                                       value="" type="tel" name="your-phone"/>
                                            </span>
                                    </p>
                                </div>
                                <div class="row-form_register">
                                    <p>
                                            <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                <input size="40"
                                                       class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control"
                                                       aria-required="true" aria-invalid="false" placeholder="Email"
                                                       value="" type="email" name="your-email"/>
                                            </span>
                                        <span class="wpcf7-form-control-wrap" data-name="your-address">
                                                <input size="40" class="wpcf7-form-control wpcf7-text form-control"
                                                       aria-invalid="false" placeholder="Địa chỉ" value="" type="text"
                                                       name="your-address"/>
                                            </span>
                                    </p>
                                </div>
                                <p>
                                        <span class="wpcf7-form-control-wrap" data-name="your-message">
                                            <textarea cols="40" rows="10"
                                                      class="wpcf7-form-control wpcf7-textarea form-control"
                                                      aria-invalid="false" placeholder="Nhận ý kiến đóng góp.."
                                                      name="your-message"></textarea>
                                        </span>
                                    <input class="wpcf7-form-control has-spinner wpcf7-submit" type="submit"
                                           value="Đăng ký"/>
                                </p>
                            </div>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SuccessfulForm">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="icon-check">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <h4 class="title-successful">Đăng ký thành công</h4>
                    <p class="des-successful">
                        Cảm ơn bạn đã quan tâm và đăng ký cho chúng tôi.<br>
                        Chúng tôi sẽ liên hệ với bạn trong vòng 24h. Nếu bạn có bất cứ thắc mắc hay câu hỏi nào vui
                        lòng gọi điện để được tư vấn: <a href="tel:1900234538">1900234538</a>
                    </p>
                    <div class="back-homepage">
                        <a href="{{route('home')}}">
                            <span>Trở về trang chủ</span>
                        </a>
                    </div>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <script async="1" defer="1" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v3.2"></script> -->
    <script>
        window.RS_MODULES = window.RS_MODULES || {};
        window.RS_MODULES.modules = window.RS_MODULES.modules || {};
        window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
        window.RS_MODULES.defered = true;
        window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
        window.RS_MODULES.type = 'compiled';
    </script>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v6.0&autoLogAppEvents=1'
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div class="fb-customerchat" attribution="wordpress" attribution_version="2.3" page_id="1289018561128565"></div>
    <div id="flags" style="display:none" class="size24">
        <ul id="sortable" class="ui-sortable">
            <li id="English">
                <a href="#" title="English" class="nturl notranslate en flag English"></a>
            </li>
            <li id="Vietnamese">
                <a href="#" title="Vietnamese" class="nturl notranslate vi flag Vietnamese"></a>
            </li>
        </ul>
    </div>
    <div id='glt-footer'>
        <div id="google_language_translator" class="default-language-vi"></div>
    </div>
    <script>
        function GoogleLanguageTranslatorInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'vi',
                includedLanguages: 'en,vi',
                autoDisplay: false
            }, 'google_language_translator');
        }
    </script>
    <script type="text/javascript">
        document.addEventListener('wpcf7mailsent', function (event) {
            if ('6' == event.detail.contactFormId) {
                // Change 123 to the ID of the form
                jQuery('#SuccessfulForm ').modal('show');
                //this is the bootstrap modal popup id
            }
            if ('7' == event.detail.contactFormId) {
                // Change 123 to the ID of the form
                jQuery('#SuccessfulForm ').modal('show');
                //this is the bootstrap modal popup id
            }
            if ('9' == event.detail.contactFormId) {
                // Change 123 to the ID of the form
                jQuery('#SuccessfulForm ').modal('show');
                //this is the bootstrap modal popup id
            }
        }, false);
    </script>
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href='{{asset('assets/client/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.6.12')}}'
          rel='preload'
          type='text/css' media='all'/>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        .tp-caption a {
            color: #ff7302;
            text-shadow: none;
            -webkit-transition: all 0.2s ease-out;
            -moz-transition: all 0.2s ease-out;
            -o-transition: all 0.2s ease-out;
            -ms-transition: all 0.2s ease-out
        }

        .tp-caption a:hover {
            color: #ffa902
        }
    </style>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.7')}}'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.7')}}'
            id='contact-form-7-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/google-language-translator/js/scripts.js?ver=6.0.19')}}'
            id='scripts-js'></script>
    <script type='text/javascript'
            src='//translate.google.com/translate_a/element.js?cb=GoogleLanguageTranslatorInit'
            id='scripts-google-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.6.12')}}'
            defer async
            id='tp-tools-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.6.12')}}'
            defer async
            id='revmin-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/3d-flipbook-dflip-lite/assets/js/dflip.min.js?ver=1.7.35')}}'
            id='dflip-script-js'></script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/mystickysidebar/js/detectmobilebrowser.js?ver=1.2.3')}}'
            id='detectmobilebrowser-js'></script>
    <script type='text/javascript' id='mystickysidebar-js-extra'>
        /* <![CDATA[ */
        var mystickyside_name = {
            "mystickyside_string": ".sidebar",
            "mystickyside_content_string": "",
            "mystickyside_margin_top_string": "100",
            "mystickyside_margin_bot_string": "0",
            "mystickyside_update_sidebar_height_string": "false",
            "mystickyside_min_width_string": "795",
            "device_desktop": "1",
            "device_mobile": "1"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
            src='{{asset('assets/client/wp-content/plugins/mystickysidebar/js/theia-sticky-sidebar.js?ver=1.2.3')}}'
            id='mystickysidebar-js'></script>
</div>
</body>

</html>