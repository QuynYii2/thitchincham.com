@extends('clients.layouts.master')

@section('title', 'About Us')

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
            <div class="containter">
                <div class="sb-content">
                    <img class="sb-content-img" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_gt.png')}}"
                         width="470"
                         height="147" alt="" decoding="async" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>
    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                @if($news)
                    <h2 class="title-single">{{$news->title}}</h2>
                    <div class="entry-content">
                        {!! $news->short_content !!}
                        {!! $news->content !!}
                        <div class="paginations"></div>
                    </div>
                @endif
            </div>
            <!-- /.container -->
        </div>
    </section>
@endsection