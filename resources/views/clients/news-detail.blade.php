@extends('clients.layouts.master')

@section('title', 'News Detail')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img class="image-banner-full"
                 src="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}}"/>
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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img class="image-intro" style="margin:auto;margin-bottom:15px;"
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"/>
                        <h2 class="title-single">{{ $news->title }}</h2>
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
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                    <div class="box-posts">
                                        <div class="img-posts">
                                            <a
                                                    href="https://quannho.vn/top-5-mon-an-tai-quan-nho-giup-ban-don-tim-crush-ngay-tu-lan-hen-dau-tien/">
                                                <img width="2048" height="1365"
                                                     src="{{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1.png')}}"
                                                     class="attachment-medium size-medium wp-post-image"
                                                     alt="TOP 5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn đầu tiên"
                                                     decoding="async" loading="lazy"
                                                     title="TOP 5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn đầu tiên"
                                                     srcset="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 2048w,
                                                     {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 1536w"
                                                     sizes="(max-width: 2048px) 100vw, 2048px"/>
                                            </a>
                                        </div>
                                        <div class="info-posts">
                                            <a class="name-posts"
                                               href="https://quannho.vn/top-5-mon-an-tai-quan-nho-giup-ban-don-tim-crush-ngay-tu-lan-hen-dau-tien/">TOP
                                                5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn
                                                đầu tiên</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection