@extends('clients.layouts.master')

@section('title', 'Menu')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707" src="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 2560w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-360x240.jpg')}} 360w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-750x500.jpg')}} 750w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-120x80.jpg')}} 120w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-768x512.jpg')}} 768w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-1536x1024.jpg')}} 1536w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-2048x1365.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px" />
            <div class="containter">
                <div class="sb-content">
                    <img class="sb-content-img" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_menu.png')}}"
                         width="272" height="119" alt="" decoding="async" loading="lazy" />
                </div>
            </div>
        </div>
    </section>
    <section id="section-menu" class="sec-full">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_menu.jpg')}}" width="1920"
             height="1423" alt="" decoding="async" loading="lazy" />
        <div class="background-overlay">
            <div class="container">
                <div style="margin:auto;">
                    <div class="_df_book df-lite" id="df_462" data-title="pdf"
                         thumbtype="bg">
                        <p class="df-raw-loading">
                            Please wait while flipbook is loading. For more related info, FAQs and issues please
                            refer to <a
                                    href="https://wordpress.org/plugins/3d-flipbook-dflip-lite/#installation">DearFlip
                                WordPress Flipbook Plugin Help</a>
                            documentation.
                        </p>
                    </div>
                    <script class="df-shortcode-script" type="application/javascript">
                        window.option_df_462 = {
                            "outline": [],
                            "backgroundColor": "#E5E5E5",
                            "height": "700",
                            "forceFit": "true",
                            "autoEnableOutline": "false",
                            "autoEnableThumbnail": "false",
                            "overwritePDFOutline": "false",
                            "direction": "1",
                            "pageSize": "0",
                            "source": "/quan_nho/wp-content/uploads/2022/09/CS5-FINAl_compressed.pdf",
                            "wpOptions": "true"
                        };
                        if (window.DFLIP && window.DFLIP.parseBooks) {
                            window.DFLIP.parseBooks();
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <section id="section-km" class="sec-full section-km fadeIn wow" data-wow-delay="0.5s">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg12.jpg')}}" width="1920" height="1009"
             alt="" decoding="async" loading="lazy" />
        <div class="background-overlay">
            <div class="container">
                <img class="image-specail" src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}" />
                <h3 class="specail-title">ƯU ĐÃI ĐẶC BIỆT </h3>
                <div class="wrap-menu">
                    <div class="slider_sec_8 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="938"
                                             src="{{asset('assets/client/wp-content/uploads/2022/12/1-min-768x938.jpeg')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2022/12/1-min-768x938.jpeg')}} 768w,
                                             {{asset('assets/client/wp-content/uploads/2022/12/1-min.jpeg')}} 1258w,
                                             {{asset('assets/client/wp-content/uploads/2022/12/1-min.jpeg')}} 1677w"
                                             sizes="(max-width: 768px) 100vw, 768px" />
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1280"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.25.48-1-768x1280.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.25.48-1-768x1280.png')}} 768w,
                                             {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.25.48-1.png')}} 922w,
                                             {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.25.48-1.png')}} 1066w"
                                             sizes="(max-width: 768px) 100vw, 768px" />
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1152"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/6-1-768x1152.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/6-1-768x1152.png')}} 768w,
                                             {{asset('assets/client/wp-content/uploads/2023/08/6-1.png')}} 1000w"
                                             sizes="(max-width: 768px) 100vw, 768px" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="readmore-section">
                    <a href="#">Xem thêm </a>
                </div>
            </div>
        </div>
    </section>
@endsection