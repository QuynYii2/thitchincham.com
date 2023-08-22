@extends('clients.layouts.master')

@section('title', 'News Detail')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img class="image-banner-full"
                 src="{{asset('assets/client/wp-content/uploads/2022/10/Quan-nuong-gan-day-12-1440x600.jpg')}}"/>
            <div class="containter">
                <div class="sb-content">
                    <img class="sb-content-img"
                         src="{{asset('assets/client/wp-content/uploads/2022/09/anh_event.png')}}"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog & Sidebar Section -->
    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <h1 class="title-single">{{ $news->title }}</h1>
                        <div class="entry-meta">
                                    <span class="post-time">
                                        <i class="far fa-calendar-alt"></i>
                                        {{ $news->created_at }}
                                    </span>
                            <span class="post-view">
                                        <i class="fas fa-eye"></i>
                                        {{ $news->views }} Lượt xem
                                    </span>
                        </div>
                        <div class="entry-content">
                            {!!$news->short_content!!}
                            {!!$news->content!!}
                        </div>
                        <!-- .entry-content -->
                        <!-- Your like facebook button code -->
                        <div class="fb-like" data-href="https://quannho.vn/tu-diem-an-uong-sieu-ngon/"
                             data-layout="button_count" data-action="like" data-size="small"
                             data-show-faces="true" data-share="true"></div>
                        <!-- fb-comments. -->
                        <div class="fb-comments" data-href="https://quannho.vn/tu-diem-an-uong-sieu-ngon/"
                             data-width="100%" data-numposts="5"></div>
                        <div class="related-post">
                            <!-- Hiển thị bài viết theo category -->
                            <h3 class="related-title">
                                <span>Bài viết liên quan</span>
                            </h3>
                            <div class="row list-related">
                                @if(!$moreNews->isEmpty())
                                    @foreach($moreNews as $moreNewsItem)
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                            <div class="box-posts">
                                                <div class="img-posts">
                                                    <a href="{{route('news.detail', $moreNewsItem->id)}}">
                                                        <img width="768" height="512" style="object-fit: cover"
                                                             src="{{ $moreNewsItem->thumbnail }}"
                                                             class="attachment-medium_large size-medium_large wp-post-image"
                                                             alt="{{$moreNewsItem->title}}"
                                                             decoding="async"
                                                             title="{{$moreNewsItem->title}}"
                                                             srcset="{{ $moreNewsItem->thumbnail }} 768w,
                                                         {{ $moreNewsItem->thumbnail }} 1500w"
                                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                                    </a>
                                                </div>
                                                <div class="info-posts">
                                                    <a class="name-posts"
                                                       href="{{route('news.detail', $moreNewsItem->id)}}">{{$moreNewsItem->title}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                        <div class="vhsidebarnn">
                            <div class="bn_title"><h3>Tin xem nhiều</h3></div>
                            <div class="bn_content">
                                <div class="w_item">
                                    @foreach($mostViewedPosts as $mostViewedPost)
                                        <div class="item">
                                            <div class="i-image">
                                                <a href="{{route('news.detail', $mostViewedPost->id)}}">
                                                    <img src="{{ $mostViewedPost->thumbnail }}" alt="{{ $mostViewedPost->thumbnail }}">
                                                </a>
                                            </div>
                                            <div class="i-title">
                                                <a href="{{route('news.detail', $mostViewedPost->id)}}">{{ $mostViewedPost->title }}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection