@extends('clients.layouts.master')

@section('title', 'Home page')

<style>
    .truncate-text {
        overflow: hidden;
        text-overflow: ellipsis;
        width: 100%;
        height: 125px;
        -webkit-line-clamp: 4;
        display: -webkit-box;
        -webkit-box-orient: vertical;
    }
</style>

@section('content')
    <section id="section-banner">
        <div class="background-overlay">
            <div id="banner-carousel" class="owl-carousel owl-theme">
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/Screenshot 2023-08-26 092733.png')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
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
                        @if($news)
                            <div class="info-introduce">
                                <h2 class="title-section">{{$news->title}}</h2>
                                <div class="excerpt-introduce truncate-text">
                                    {!! $news->short_content !!}
                                </div>
                                <div class="box-image_introduce show_mobile">
                                    <img width="613" height="405"
                                         src="{{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}}"
                                         class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                         loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}} 613w,
                                             {{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}} 360w,
                                             {{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}} 120w"
                                         sizes="(max-width: 613px) 100vw, 613px"/>
                                </div>
                                <div class="readmore-section">
                                    <a href="{{route('about.us')}}">Xem thêm </a>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 show_pc" data-wow-delay="0.5s">
                        <div class="box-image_introduce">
                            <img width="613" height="405"
                                 src="{{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}}"
                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                 loading="lazy"
                                 srcset="{{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}} 613w,
                                         {{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}} 360w,
                                         {{asset('assets/client/wp-content/uploads/2022/09/sot-nuong-bbq-1(3).jpg')}} 120w"
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
                <h3 class="specail-title">MÓN ĂN ĐƯỢC ĐẶT NHIỀU </h3>
                <div class="slider_sec_8 swiper">
                    <div class="swiper-wrapper">
                        @if(!$bestSellers->isEmpty())
                            @foreach($bestSellers as $menuItem)
                                <div class="swiper-slide">
                                    <div class="item_slider_slick">
                                        <a href="{{route('menu.detail', $menuItem->id)}}">
                                            <img style="width: 768px; height: 210px; object-fit: cover"
                                                 src="{{ $menuItem->thumbnail }}"
                                                 class="attachment-medium_large size-medium_large" alt=""
                                                 decoding="async" loading="lazy"
                                                 srcset="{{$menuItem->thumbnail}} 768w,
                                                 {{$menuItem->thumbnail}} 100w,
                                                 {{$menuItem->thumbnail}} 800w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                        <p>{{$menuItem->name}}</p>
                                        <div class="">
                                            <div class="dsprice" style="color: white">
                                                <div class="pname" style="color: white">Giá:</div>
                                                <div class="pnews" style="color: white">{{$menuItem->price}}.000đ</div>
                                            </div>
                                            <div class="dsview">
                                                <div class="viewfood" style="color: white">
                                                    <a href="{{route('menu.detail', $menuItem->id)}}">XEM CHI TIẾT</a>
                                                </div>
                                            </div>
                                        </div>
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
                <h3 class="specail-title">DAMH MỤC SẢN PHẨM </h3>
                <div class="slider_sec_8 swiper">
                    <div class="swiper-wrapper">
                        @if(!$categories->isEmpty())
                            @foreach($categories as $category)
                                <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="{{route('menu.detail', $menuItem->id)}}">
                                        <img style="width: 768px; height: 300px; object-fit: cover"
                                             src="{{ $category->thumbnail }}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{$category->thumbnail}} 768w,
                                                 {{$category->thumbnail}} 100w,
                                                 {{$category->thumbnail}} 800w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                    <p style="color: black">{{$category->name}}</p>
                                    <div class="">
                                        <div class="dsview">
                                            <div class="viewfood" style="color: black">
                                                <a href="{{route('menu.detail', $category->id)}}">XEM CHI TIẾT</a>
                                            </div>
                                        </div>
                                    </div>
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
                <h3 class="specail-title">CÁC MÓN MỚI NHẤT</h3>
                <div class="wrap-menu">
                    <div class="slider_sec_8 swiper">
                        <div class="swiper-wrapper">

                            @if(!$newMenus->isEmpty())
                                @foreach($newMenus as $menuItem)
                                    <div class="swiper-slide">
                                        <div class="item_slider_slick">
                                            <a href="{{route('menu.detail', $menuItem->id)}}">
                                                <img style="width: 768px; height: 210px; object-fit: cover"
                                                     src="{{ $menuItem->thumbnail }}"
                                                     class="attachment-medium_large size-medium_large" alt=""
                                                     decoding="async" loading="lazy"
                                                     srcset="{{$menuItem->thumbnail}} 768w,
                                                 {{$menuItem->thumbnail}} 100w,
                                                 {{$menuItem->thumbnail}} 800w"
                                                     sizes="(max-width: 768px) 100vw, 768px"/>
                                            </a>
                                            <p>{{$menuItem->name}}</p>
                                            <div class="">
                                                <div class="dsprice" style="color: white">
                                                    <div class="pname" style="color: white">Giá:</div>
                                                    <div class="pnews" style="color: white">{{$menuItem->price}}.000đ</div>
                                                </div>
                                                <div class="dsview">
                                                    <div class="viewfood" style="color: white">
                                                        <a href="{{route('menu.detail', $menuItem->id)}}">XEM CHI TIẾT</a>
                                                    </div>
                                                </div>
                                            </div>
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
                    <a href="{{route('menu.index')}}">Xem thêm </a>
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
                <h3 class="specail-title">TIN TỨC
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
                                    <p class="excerpt-news">{!! $news->short_content !!}</p>
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
{{--                        <img src="{{asset('assets/client/wp-content/uploads/2023/08/phone3.png')}}" width="542"--}}
{{--                             height="579"--}}
{{--                             alt="" decoding="async" loading="lazy"/>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection