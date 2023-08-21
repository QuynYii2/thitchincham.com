@extends('clients.layouts.master')

@section('title', 'Home page')

<style>
    .truncate-text {
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
    }
</style>

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
                            <h2 class="title-section">{{$news->title}}</h2>
                            <div class="excerpt-introduce truncate-text">
                                {!! $news->short_content !!}
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
                                        @php
                                            $isCookie = false;
                                            if (isset($_COOKIE["access"])){
                                                $isCookie = true;
                                            }
                                        @endphp
                                        @if($isCookie == true)
                                            <a href="#" data-toggle="modal" data-target="#modalOrder">
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
                                        @else
                                            <a href="#" data-toggle="modal" data-target="#exampleModal">
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
                                        @endif
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin ngừoi đặt Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="submitInformation" method="post" action="{{route('create.information')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" name="fullName" id="fullName"
                                   placeholder="Nguyen Minh">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Phone Number</label>
                                <input type="text" class="form-control" name="phoneNumber" id="inputPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress"
                                   placeholder="1234 Main St">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="modalOrderLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalOrderLabel">Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                        @if(!$categories->isEmpty())
                            @foreach($categories as $category)
                                <div class="swiper-slide">
                                    <div class="item_slider_slick">
                                        <a href="#">
                                            <img width="768" height="768"
                                                 src="{{ $category->thumbnail }}"
                                                 class="attachment-medium_large size-medium_large" alt=""
                                                 decoding="async" loading="lazy"
                                                 srcset="{{$category->thumbnail}} 768w,
                                                 {{$category->thumbnail}} 100w,
                                                 {{$category->thumbnail}} 800w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                        <p style="color: #000">{{$category->name}}</p>
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
                <h3 class="specail-title">CÁC MÓN MỚI NHẤT</h3>
                <div class="wrap-menu">
                    <div class="slider_sec_8 swiper">
                        <div class="swiper-wrapper">

                            @if(!$newMenus->isEmpty())
                                @foreach($newMenus as $menuItem)
                                    <div class="swiper-slide">
                                        <div class="item_slider_slick">
                                            @php
                                                $isCookie = false;
                                                if (isset($_COOKIE["access"])){
                                                    $isCookie = true;
                                                }
                                            @endphp
                                            @if($isCookie == true)
                                                <a href="#" data-toggle="modal" data-target="#modalOrder">
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
                                            @else
                                                <a href="#" data-toggle="modal" data-target="#exampleModal">
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
                                            @endif
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