@extends('clients.layouts.master')

@section('title', 'Menu')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707"
                 src="{{asset('assets/img/mon-an-nhanh.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/img/mon-an-nhanh.jpg')}} 2560w,
                 {{asset('assets/img/mon-an-nhanh.jpg')}} 360w,
                 {{asset('assets/img/mon-an-nhanh.jpg')}} 750w,
                 {{asset('assets/img/mon-an-nhanh.jpg')}} 120w,
                 {{asset('assets/img/mon-an-nhanh.jpg')}} 768w,
                 {{asset('assets/img/mon-an-nhanh.jpg')}} 1536w,
                 {{asset('assets/img/mon-an-nhanh.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px"/>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="page-title">
                            <span>Danh sách sản phẩm</span>
                        </h3>
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
                                            <div class="info-posts text-center">
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