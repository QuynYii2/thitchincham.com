@extends('clients.layouts.master')

@section('title', 'About Us')

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
                    <img class="image-intro" style="margin:auto;margin-bottom:15px;"
                         src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}" width="156" height="111"
                         alt="" decoding="async"
                         loading="lazy"/>
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