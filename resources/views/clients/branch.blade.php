@extends('clients.layouts.master')

@section('title', 'Branch')

@section('content')
    <section id="section-banner" class="section-bread  bread-cn">
        <div class="background-overlay">
            <img width="2560" height="1707"
                 src="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 2560w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}}
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
                         src="{{asset('assets/client/wp-content/uploads/2022/09/bg_chinhanh.png')}}"
                         width="505" height="132" alt="" decoding="async" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog & Sidebar Section -->
    <section id="blog-schools" class="page-wrapper">
        <div class="background-overlay">
            <div class="container container-cn">
                <img class="image-specail"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     width="156"
                     height="111" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">
                    CHI NHÁNH
                </h3>
                <p class="hotline-footer">
                    <a class="hf-phone" href="tel:1900234538">Hotline: 1900234538 </a>
                    <a class="hf-phone" href="tel:0961812345">CSKH: 0961812345</a>
                </p>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="box-cn">
                            <h3 class="box-cn-h3">
                                Cơ sở 6 (NEW) </h3>
                            <p class="box-cn-diachi">
                                35B Lê Văn Thiêm, Thanh Xuân Trung, Thanh Xuân, Hà Nội </p>
                            <a class="box-cn-button" href="https://quannho.vn/chi-nhanh/co-so-6/">
                                Xem chi tiết
                            </a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="box-cn">
                            <h3 class="box-cn-h3">
                                Cơ sở 5 </h3>
                            <p class="box-cn-diachi">
                                31 Láng Hạ, Ba Đình, Hà Nội </p>
                            <a class="box-cn-button" href="https://quannho.vn/chi-nhanh/co-so-5/">
                                Xem chi tiết
                            </a>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="box-cn">
                            <h3 class="box-cn-h3">
                                Cơ sở 118 </h3>
                            <p class="box-cn-diachi">
                                118 Nguyễn Khánh Toàn, Cầu Giấy, Hà Nội </p>
                            <a class="box-cn-button" href="https://quannho.vn/chi-nhanh/chi-nhanh-4/">
                                Xem chi tiết
                            </a>
                        </div>

                    </div>
                    <div class="paginations">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display:none;">
                        <h2 class="page-title"><span>Chi nhánh</span></h2>
                        <div class="des-section"></div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/chi-nhanh/co-so-6/">
                                        </a>
                                        <div class="ovrly"></div>
                                        <div class="details-posts">
                                            <a href="https://quannho.vn/chi-nhanh/co-so-6/">Xem chi tiết</a>
                                        </div>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts" href="https://quannho.vn/chi-nhanh/co-so-6/">Cơ sở
                                            6 (NEW)</a>
                                        <p class="time-posts"><span><i
                                                        class="fa fa-calendar-alt"></i>15/03/2023</span><span
                                                    class="post-view"><i class="fas fa-eye"></i> 1641 Lượt
                                                        xem</span></p>
                                        <p class="excerpt-posts"></p>
                                        <p class="readmore-posts"><a
                                                    href="https://quannho.vn/chi-nhanh/co-so-6/">Xem chi tiết <i
                                                        class="fas fa-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/chi-nhanh/co-so-5/">
                                        </a>
                                        <div class="ovrly"></div>
                                        <div class="details-posts">
                                            <a href="https://quannho.vn/chi-nhanh/co-so-5/">Xem chi tiết</a>
                                        </div>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts" href="https://quannho.vn/chi-nhanh/co-so-5/">Cơ sở
                                            5</a>
                                        <p class="time-posts"><span><i
                                                        class="fa fa-calendar-alt"></i>20/10/2022</span><span
                                                    class="post-view"><i class="fas fa-eye"></i> 2759 Lượt
                                                        xem</span></p>
                                        <p class="excerpt-posts"></p>
                                        <p class="readmore-posts"><a
                                                    href="https://quannho.vn/chi-nhanh/co-so-5/">Xem chi tiết <i
                                                        class="fas fa-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/chi-nhanh/chi-nhanh-4/">
                                            <img width="360" height="226"
                                                 src="{{asset('assets/client/wp-content/uploads/2022/09/temp_03-1.jpg')}}"
                                                 class="attachment-medium size-medium wp-post-image"
                                                 alt="Cơ sở 118" decoding="async" title="Cơ sở 118"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2022/09/temp_03-1.jpg')}} 360w,
                                                 {{asset('assets/client/wp-content/uploads/2022/09/temp_03-1.jpg')}} 569w"
                                                 sizes="(max-width: 360px) 100vw, 360px"/> </a>
                                        <div class="ovrly"></div>
                                        <div class="details-posts">
                                            <a href="https://quannho.vn/chi-nhanh/chi-nhanh-4/">Xem chi tiết</a>
                                        </div>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/chi-nhanh/chi-nhanh-4/">Cơ sở 118</a>
                                        <p class="time-posts"><span><i
                                                        class="fa fa-calendar-alt"></i>18/09/2022</span><span
                                                    class="post-view"><i class="fas fa-eye"></i> 2903 Lượt
                                                        xem</span></p>
                                        <p class="excerpt-posts"></p>
                                        <p class="readmore-posts"><a
                                                    href="https://quannho.vn/chi-nhanh/chi-nhanh-4/">Xem chi tiết <i
                                                        class="fas fa-angle-right"></i></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="paginations">
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