@extends('clients.layouts.master')

@section('title', 'Menu')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707"
                 src="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 2560w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-360x240.jpg')}} 360w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-750x500.jpg')}} 750w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-120x80.jpg')}} 120w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-768x512.jpg')}} 768w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-1536x1024.jpg')}} 1536w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-2048x1365.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px"/>
            <div class="containter">
                <div class="sb-content">
                    <img class="sb-content-img" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_menu.png')}}"
                         width="272" height="119" alt="" decoding="async" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img class="image-intro" style="margin:auto;margin-bottom:15px;"
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}" width="156"
                             height="111" alt=""
                             decoding="async" loading="lazy"/>
                        <h2 class="page-title">
                            <span>{{$category->name}}</span>
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
                                                    <div class="pnews">{{$menu->old_price}}đ</div><div class="polds">{{$menu->price}}đ</div>
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