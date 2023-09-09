@extends('clients.layouts.master')

@section('title', 'News')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707"
                 src="{{asset('assets/img/mon-bo.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/img/mon-bo.jpg')}} 2560w,
                 {{asset('assets/img/mon-bo.jpg')}} 360w,
                 {{asset('assets/img/mon-bo.jpg')}} 750w,
                 {{asset('assets/img/mon-bo.jpg')}} 120w,
                 {{asset('assets/img/mon-bo.jpg')}} 768w,
                 {{asset('assets/img/mon-bo.jpg')}} 1536w,
                 {{asset('assets/img/mon-bo.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px"/>
            <div class="containter">
                <div class="sb-content">
                    <img class="sb-content-img"
                         src="{{asset('assets/client/wp-content/uploads/2022/09/anh_event.png')}}"
                         width="647" height="119" alt="" decoding="async" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog & Sidebar Section -->
    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 class="page-title">
                            <span>News &amp;Events</span>
                        </h2>
                        <div class="row">
                            @if(!$listNews->isEmpty())
                                @foreach($listNews as $news)
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                        <div class="box-posts">
                                            <div class="img-posts">
                                                <a href="{{route('news.detail', $news->id)}}">
                                                    <img width="768" height="512"
                                                         src="{{ $news->thumbnail }}"
                                                         class="attachment-medium_large size-medium_large wp-post-image"
                                                         alt="{{$news->title}}"
                                                         decoding="async"
                                                         title="{{$news->title}}"
                                                         srcset="{{ $news->thumbnail }} 768w,
                                                         {{ $news->thumbnail }} 1500w"
                                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                                </a>
                                            </div>
                                            <div class="info-posts">
                                                <a class="name-posts" href="{{route('news.detail', $news->id)}}">{{$news->title}}</a>
                                                <div class="detail-content">
                                                    {!! $news->short_content !!}
                                                </div>
                                                <div class="dsview">
                                                    <div class="viewfood">
                                                        <a href="{{route('news.detail', $news->id)}}">XEM CHI TIẾT</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                            <div class="paginations">
                                <nav class="navigation pagination" aria-label="Bài viết">
                                    <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                                    <div class="nav-links">
                                        <span aria-current="page" class="page-numbers current">1</span>
                                        <a class="page-numbers"
                                           href="#">2</a>
                                        <span class="page-numbers dots">&hellip;</span>
                                        <a class="page-numbers"
                                           href="#">5</a>
                                        <a class="next page-numbers"
                                           href="#">
                                            <i class="fa fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Blog & Sidebar Section -->
    <div class="clearfix"></div>
@endsection