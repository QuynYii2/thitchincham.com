@extends('clients.layouts.master')

@section('title', 'Menu')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707"
                 src="{{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 2560w,
                 {{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 360w,
                 {{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 750w,
                 {{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 120w,
                 {{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 768w,
                 {{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 1536w,
                 {{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px"/>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="page-title">
                            <span>Danh sách sản phẩm</span>
                        </h2>
                        <div class="row">
                            @if(!$menus->isEmpty())
                                @foreach($menus as $menu)
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                        <div class="box-posts ">
                                            <div class="img-posts">
                                                <a href="{{route('menu.detail', $menu->id)}}">
                                                    <img width="768" height="512"
                                                         src="{{ $menu->thumbnail }}"
                                                         class="attachment-medium_large size-medium_large wp-post-image"
                                                         alt="{{$menu->title}}"
                                                         decoding="async"
                                                         title="{{$menu->title}}"
                                                         srcset="{{ $menu->thumbnail }} 768w,
                                                         {{ $menu->thumbnail }} 1500w"
                                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                                </a>
                                            </div>
                                            <div class="info-posts">
                                                <a class="name-posts"  href="{{route('menu.detail', $menu->id)}}">{{$menu->name}}</a>
                                                <div class="dsprice">
                                                    <div class="pname">Giá:</div>
                                                   <div class="pnews">{{$menu->price}}.000đ</div>
                                                </div>
                                                <div class="dsview">
                                                    <div class="viewfood">
                                                        <a href="{{route('menu.detail', $menu->id)}}">XEM CHI TIẾT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection