@extends('clients.layouts.master')

@section('title', 'Home page')

@section('content')
    <section id="section-banner">
        <div class="background-overlay">
            <div id="banner-carousel" class="owl-carousel owl-theme">
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-scaled.jpg')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-scaled.jpg')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-768x512.jpg')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-1536x1024.jpg')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-2048x1365.jpg')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-scaled.jpg')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-scaled.jpg')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-768x512.jpg')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-1536x1024.jpg')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-2048x1365.jpg')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-scaled.jpg')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-scaled.jpg')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-768x512.jpg')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-1536x1024.jpg')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-2048x1365.jpg')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
            </div>
        </div>
        <div class="containter">
            <div class="sb-content">
                <img class="sb-content-img"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/image_slider.png')}}"
                     width="810" height="329" alt="" decoding="async" loading="lazy"/>
                <p class="sb-content-p">Toạ Độ Ăn Chơi Bậc Nhất Hà Thành </p>
                <p class="sp-content-button">
                    <a class="sp-button-xt" href="https://www.facebook.com/quannhonhauxuyendem">Xem thêm</a>
                    <a class="sp-button-gn" href="tel:1900234538">Gọi ngay</a>
                </p>
            </div>
        </div>
    </section>
    <section id="section-introduce" class="sec-full">
        <img class="sec-img-full"
             src="{{asset('assets/client/wp-content/uploads/2022/09/bg_02.jpg')}}"
             width="1920" height="717"
             alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                        <div class="info-introduce">
                            <img width="156" height="111"
                                 src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                                 class="image-intro" alt="" decoding="async" loading="lazy"/>
                            <h2 class="title-section">VỀ CHÚNG TÔI</h2>
                            <div class="excerpt-introduce">
                                <p>
                                    <strong>Đến với Quán Nhỏ, bạn sẽ được trải nghiệm một Hồng Kông thu nhỏ ngay
                                        giữa lòng Hà Nội. </strong>
                                </p>
                                <p>Với không gian đẳng cấp, đồ ăn ngon mang đặc trưng hương vị riêng biệt, nhân
                                    viên chu đáo, nhiệt tình, mọi cuộc vui của bạn sẽ trở nên thăng hoa. Không
                                    bao giờ chán, từ đêm đến sáng!</p>
                            </div>
                            <div class="box-image_introduce show_mobile">
                                <img width="613" height="405"
                                     src="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}}"
                                     class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                     loading="lazy"
                                     srcset="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}} 613w,
                                             {{asset('assets/client/wp-content/uploads/2022/09/img_intro-360x238.png')}} 360w,
                                             {{asset('assets/client/wp-content/uploads/2022/09/img_intro-120x80.png')}} 120w"
                                     sizes="(max-width: 613px) 100vw, 613px"/>
                            </div>
                            <div class="readmore-section">
                                <a href="{{route('about.us')}}">Xem thêm </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 show_pc" data-wow-delay="0.5s">
                        <div class="box-image_introduce">
                            <img width="613" height="405"
                                 src="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}}"
                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                 loading="lazy"
                                 srcset="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}} 613w,
                                         {{asset('assets/client/wp-content/uploads/2022/09/img_intro-360x238.png')}} 360w,
                                         {{asset('assets/client/wp-content/uploads/2022/09/img_intro-120x80.png')}} 120w"
                                 sizes="(max-width: 613px) 100vw, 613px"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-specail" class="sec-full fadeIn">
        <img class="sec-img-full"
             src="{{asset('assets/client/wp-content/uploads/2022/09/bg_03.jpg')}}"
             width="1920" height="775"
             alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img width="156" height="111"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     class="image-specail" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">BEST SELLER </h3>
                <div class="slider_sec_8 swiper">
                    <div class="swiper-wrapper">
                        @if(!$bestSellers->isEmpty())
                            @foreach($bestSellers as $menuItem)
                                <div class="swiper-slide">
                                    <div class="item_slider_slick">
                                        <a href="#">
                                            <img width="768" height="768"
                                                 src="{{ $menuItem->thumbnail }}"
                                                 class="attachment-medium_large size-medium_large" alt=""
                                                 decoding="async" loading="lazy"
                                                 srcset="{{$menuItem->thumbnail}} 768w,
                                                 {{$menuItem->thumbnail}} 100w,
                                                 {{$menuItem->thumbnail}} 800w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                        <p>{{$menuItem->name}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="readmore-section">
                    <a href="{{route('menu.index')}}">Xem thêm </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-menu" class="sec-full section-menu">
        <img class="sec-img-full"
             src="{{asset('assets/client/wp-content/uploads/2022/09/bg_04.jpg')}}"
             width="1920"
             height="1105" alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img width="156" height="111"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     class="image-specail" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">MENU QUÁN NHỎ </h3>
                <div class="slider_sec_8 swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/" data-toggle="modal" data-target="#modal_img">
                                    <img width="768" height="1150"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/1-768x1150.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/1-768x1150.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/1-1026x1536.png')}} 1026w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/1.png')}} 1348w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/" data-toggle="modal" data-target="#modal_img">
                                    <img width="768" height="1150"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/2-768x1150.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/2-768x1150.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/2-1026x1536.png')}} 1026w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/2.png')}} 1354w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/" data-toggle="modal" data-target="#modal_img">
                                    <img width="768" height="1151"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/3-768x1151.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/3-768x1151.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/3-1025x1536.png')}} 1025w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/3.png')}} 1352w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
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
        </div>
    </section>
    <section id="section-km" class="sec-full section-km">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_new_01.jpg')}}"
             width="1920"
             height="1100" alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img width="156" height="111"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     class="image-specail" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">ƯU ĐÃI ĐẶC BIỆT </h3>
                <div class="wrap-menu">
                    <div class="slider_sec_8 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1152"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/6-1-768x1152.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/6-1-768x1152.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/6-1.png')}} 1000w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1277"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/3-1-768x1277.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/3-1-768x1277.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/3-1-924x1536.png')}} 924w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/3-1.png')}} 1198w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1289"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min-768x1289.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min-768x1289.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min.png')}} 915w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min.png')}} 1062w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1148"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min-768x1148.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min-768x1148.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min.png')}} 1027w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min.png')}} 1176w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1290"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}} 915w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}} 1060w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
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
    <section id="section-news" class="sec-full ">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_new_02.jpg')}}"
             width="1920"
             height="1150" alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img class="image-specail" src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     width="156"
                     height="111" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">NEWS &EVENTS
                </h3>

                <div class="row content-news">
                    @if(!$listNews->isEmpty())
                        @php
                            $newsItem = $listNews[0];
                        @endphp

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-bignews">
                            <div class="box-news">
                                <div class="img-news">
                                    <a href="{{route('news.detail', $newsItem->id)}}">
                                        <img width="768" height="512"
                                             src="{{ $newsItem->thumbnail }}"
                                             class="attachment-medium_large size-medium_large wp-post-image"
                                             alt="{{ $newsItem->title }}"
                                             decoding="async" loading="lazy"
                                             srcset="{{ $newsItem->thumbnail }} 768w,
                                                 {{ $newsItem->thumbnail }} 1500w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                                <div class="info-news">
                                    <a class="name-news"
                                       href="{{route('news.detail', $newsItem->id)}}">{{$newsItem->title}}</a>
                                    <p class="excerpt-news">{!! $newsItem->short_content !!}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-smallnews">
                            <div class="row">

                                @foreach($listNews as $news)
                                    @if($newsItem->id != $news->id)
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sub-smallnews">
                                            <div class="box-news">
                                                <div class="img-news">
                                                    <a href="{{route('news.detail', $news->id)}}">
                                                        <img width="768" height="512"
                                                             src="{{ $news->thumbnail }}"
                                                             class="attachment-medium_large size-medium_large wp-post-image"
                                                             alt="{{ $news->title }}"
                                                             decoding="async" loading="lazy"
                                                             srcset="{{ $news->thumbnail }} 768w,
                                                             {{ $news->thumbnail }} 1500w"
                                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                                    </a>
                                                </div>
                                                <div class="info-news">
                                                    <a class="name-news"
                                                       href="{{route('news.detail', $news->id)}}">{{$news->title}}</a>
                                                    <p class="excerpt-news">{!! $news->short_content !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    @endif
                </div>
                <div class="readmore-section">
                    <a href="{{route('news.index')}}">Xem thêm </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-app" class="sec-full fadeIn wow" data-wow-delay="0.5s">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_08.jpg')}}"
             width="1920" height="816"
             alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <div class="row content-app">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-app">
                        <img class="image-specail"
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                             width="156" height="111" alt="" decoding="async" loading="lazy"/>
                        <h3 class="specail-title">Kết nối zalo ngay
                        </h3>
                        <p class="btn-app">
                            <a class="btn-app-qr">
                                <img src="{{asset('assets/client/wp-content/uploads/2022/12/qr.png')}}"
                                     width="200" height="196"
                                     alt="" decoding="async" loading="lazy"/>
                            </a>
                            <a class="btn-app-play">
                                <img src="{{asset('assets/client/wp-content/uploads/2022/09/play.png')}}"
                                     width="206" height="68"
                                     alt="" decoding="async" loading="lazy"/>
                            </a>
                            <a class="btn-app-store">
                                <img src="{{asset('assets/client/wp-content/uploads/2022/09/store.png')}}"
                                     width="206"
                                     height="68" alt="" decoding="async" loading="lazy"/>
                            </a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-app colums-app2">
                        <img src="{{asset('assets/client/wp-content/uploads/2023/08/phone3.png')}}" width="542"
                             height="579"
                             alt="" decoding="async" loading="lazy"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection