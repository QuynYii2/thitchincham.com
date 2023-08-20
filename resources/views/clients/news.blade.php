@extends('clients.layouts.master')

@section('title', 'News')

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
                        <img class="image-intro" style="margin:auto;margin-bottom:15px;"
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}" width="156"
                             height="111" alt=""
                             decoding="async" loading="lazy"/>
                        <h2 class="page-title">
                            <span>News &amp;Events</span>
                        </h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho-1-768x512.jpg')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="Mê say top các món hải sản tươi ngon, thượng hạng tại Nhỏ"
                                                 decoding="async"
                                                 title="Mê say top các món hải sản tươi ngon, thượng hạng tại Nhỏ"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho-1-768x512.jpg')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho-1.jpg')}} 1500w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho/">Mê
                                            say top các món hải sản tươi ngon, thượng hạng tại Nhỏ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/tu-diem-an-uong-sieu-ngon/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/tu-diem-an-uong-sieu-ngon-3-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="Khám phá ngay tụ điểm “ăn uống siêu ngon, ăn ảnh siêu chất” của giới trẻ Hà Thành"
                                                 decoding="async" loading="lazy"
                                                 title="Khám phá ngay tụ điểm “ăn uống siêu ngon, ăn ảnh siêu chất” của giới trẻ Hà Thành"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/tu-diem-an-uong-sieu-ngon-3-768x512.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/tu-diem-an-uong-sieu-ngon-3.png')}} 1500w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/tu-diem-an-uong-sieu-ngon/">Khám phá ngay
                                            tụ điểm “ăn uống siêu ngon, ăn ảnh siêu chất” của giới trẻ Hà
                                            Thành</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/thien-duong-overnight-gia-cuc-re/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/thien-duong-overnight-gia-cuc-re-5-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="Top 3 thiên đường overnight giá cực rẻ cho anh em tại Hà Nội"
                                                 decoding="async" loading="lazy"
                                                 title="Top 3 thiên đường overnight giá cực rẻ cho anh em tại Hà Nội"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/thien-duong-overnight-gia-cuc-re-5-768x512.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/thien-duong-overnight-gia-cuc-re-5.png')}} 1500w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/thien-duong-overnight-gia-cuc-re/">Top 3
                                            thiên đường overnight giá cực rẻ cho anh em tại Hà Nội</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a
                                                href="https://quannho.vn/top-5-mon-an-tai-quan-nho-giup-ban-don-tim-crush-ngay-tu-lan-hen-dau-tien/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="TOP 5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn đầu tiên"
                                                 decoding="async" loading="lazy"
                                                 title="TOP 5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn đầu tiên"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1-768x512.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1-1536x1024.png')}} 1536w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1.png')}} 2048w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/top-5-mon-an-tai-quan-nho-giup-ban-don-tim-crush-ngay-tu-lan-hen-dau-tien/">TOP
                                            5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn đầu
                                            tiên</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/dia-diem-an-uong-sang-chanh-ngay-01-06/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/05/dia-diem-an-uong-sang-chanh-ngay-01-06-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="Địa Điểm Ăn Uống Sang Chảnh Ngày 01/06 Cùng “Em Bé”"
                                                 decoding="async" loading="lazy"
                                                 title="Địa Điểm Ăn Uống Sang Chảnh Ngày 01/06 Cùng “Em Bé”"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/05/dia-diem-an-uong-sang-chanh-ngay-01-06-768x512.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/05/dia-diem-an-uong-sang-chanh-ngay-01-06-1536x1025.png')}} 1536w,
                                                 {{asset('assets/client/wp-content/uploads/2023/05/dia-diem-an-uong-sang-chanh-ngay-01-06.png')}} 2048w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/dia-diem-an-uong-sang-chanh-ngay-01-06/">Địa
                                            Điểm Ăn Uống Sang Chảnh Ngày 01/06 Cùng “Em Bé”</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a
                                                href="https://quannho.vn/quan-nho-dia-diem-an-uong-cuoi-tuan-cuc-chill/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/05/quan-nho-dia-diem-an-uong-cuoi-tuan-cuc-chill-5-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="Quán Nhỏ &#8211; Địa Điểm Ăn Uống Cuối Tuần Cực Chill Cho Giới Trẻ Hà Thành"
                                                 decoding="async" loading="lazy"
                                                 title="Quán Nhỏ &#8211; Địa Điểm Ăn Uống Cuối Tuần Cực Chill Cho Giới Trẻ Hà Thành"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/05/quan-nho-dia-diem-an-uong-cuoi-tuan-cuc-chill-5-768x512.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/05/quan-nho-dia-diem-an-uong-cuoi-tuan-cuc-chill-5.png')}} 1500w"
                                                 sizes="(max-width: 768px) 100vw, 768px" />
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/quan-nho-dia-diem-an-uong-cuoi-tuan-cuc-chill/">Quán
                                            Nhỏ &#8211;Địa Điểm Ăn Uống Cuối Tuần Cực Chill Cho Giới Trẻ Hà
                                            Thành</a>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations">
                                <nav class="navigation pagination" aria-label="Bài viết">
                                    <h2 class="screen-reader-text">Điều hướng bài viết</h2>
                                    <div class="nav-links">
                                        <span aria-current="page" class="page-numbers current">1</span>
                                        <a class="page-numbers"
                                           href="https://quannho.vn/category/news-events/page/2/">2</a>
                                        <span class="page-numbers dots">&hellip;</span>
                                        <a class="page-numbers"
                                           href="https://quannho.vn/category/news-events/page/5/">5</a>
                                        <a class="next page-numbers"
                                           href="https://quannho.vn/category/news-events/page/2/">
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