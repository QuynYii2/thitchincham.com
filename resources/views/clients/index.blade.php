@extends('clients.layouts.master')

@section('title', 'Home page')

@section('content')
    <section id="section-banner">
        <div class="background-overlay">
            <div id="banner-carousel" class="owl-carousel owl-theme">
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-scaled.jpg')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-scaled.jpg')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-768x512.jpg')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-1536x1024.jpg')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/TX_00211-min-9-2048x1365.jpg')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-scaled.jpg')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-scaled.jpg')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-768x512.jpg')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-1536x1024.jpg')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09720-min-2048x1365.jpg')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
                <div class="item-banner">
                    <img width="2560" height="1707"
                         src="{{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-scaled.jpg')}}"
                         class="attachment-full size-full" alt="" decoding="async" loading="lazy"
                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-scaled.jpg')}} 2560w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-768x512.jpg')}} 768w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-1536x1024.jpg')}} 1536w,
                                 {{asset('assets/client/wp-content/uploads/2022/12/LEO09781-min-1-2048x1365.jpg')}} 2048w"
                         sizes="(max-width: 2560px) 100vw, 2560px"/>
                </div>
            </div>
        </div>
        <div class="containter">
            <div class="sb-content">
                <img class="sb-content-img"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/image_slider.png')}}"
                     width="810" height="329" alt="" decoding="async" loading="lazy"/>
                <p class="sb-content-p">Toạ Độ Ăn Chơi Bậc Nhất Hà Thành </p>
                <p class="sp-content-button">
                    <a class="sp-button-xt" href="https://www.facebook.com/quannhonhauxuyendem">Xem thêm</a>
                    <a class="sp-button-gn" href="tel:1900234538">Gọi ngay</a>
                </p>
            </div>
        </div>
    </section>
    <section id="section-introduce" class="sec-full">
        <img class="sec-img-full"
             src="{{asset('assets/client/wp-content/uploads/2022/09/bg_02.jpg')}}"
             width="1920" height="717"
             alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                        <div class="info-introduce">
                            <img width="156" height="111"
                                 src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                                 class="image-intro" alt="" decoding="async" loading="lazy"/>
                            <h2 class="title-section">VỀ CHÚNG TÔI</h2>
                            <div class="excerpt-introduce">
                                <p>
                                    <strong>Đến với Quán Nhỏ, bạn sẽ được trải nghiệm một Hồng Kông thu nhỏ ngay
                                        giữa lòng Hà Nội. </strong>
                                </p>
                                <p>Với không gian đẳng cấp, đồ ăn ngon mang đặc trưng hương vị riêng biệt, nhân
                                    viên chu đáo, nhiệt tình, mọi cuộc vui của bạn sẽ trở nên thăng hoa. Không
                                    bao giờ chán, từ đêm đến sáng!</p>
                            </div>
                            <div class="box-image_introduce show_mobile">
                                <img width="613" height="405"
                                     src="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}}"
                                     class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                     loading="lazy"
                                     srcset="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}} 613w,
                                             {{asset('assets/client/wp-content/uploads/2022/09/img_intro-360x238.png')}} 360w,
                                             {{asset('assets/client/wp-content/uploads/2022/09/img_intro-120x80.png')}} 120w"
                                     sizes="(max-width: 613px) 100vw, 613px"/>
                            </div>
                            <div class="readmore-section">
                                <a href="/gioi-thieu/">Xem thêm </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6 show_pc" data-wow-delay="0.5s">
                        <div class="box-image_introduce">
                            <img width="613" height="405"
                                 src="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}}"
                                 class="attachment-medium_large size-medium_large" alt="" decoding="async"
                                 loading="lazy"
                                 srcset="{{asset('assets/client/wp-content/uploads/2022/09/img_intro.png')}} 613w,
                                         {{asset('assets/client/wp-content/uploads/2022/09/img_intro-360x238.png')}} 360w,
                                         {{asset('assets/client/wp-content/uploads/2022/09/img_intro-120x80.png')}} 120w"
                                 sizes="(max-width: 613px) 100vw, 613px"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-specail" class="sec-full fadeIn">
        <img class="sec-img-full"
             src="{{asset('assets/client/wp-content/uploads/2022/09/bg_03.jpg')}}"
             width="1920" height="775"
             alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img width="156" height="111"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     class="image-specail" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">BEST SELLER </h3>
                <div class="slider_sec_8 swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/">
                                    <img width="768" height="768"
                                         src="{{asset('assets/client/wp-content/uploads/2022/12/4-768x768.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/4-768x768.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2022/12/4-100x100.png')}} 100w,
                                                 {{asset('assets/client/wp-content/uploads/2022/12/4.png')}} 800w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                                <p>Lẩu Tôm Bầu Quán Nhỏ</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/">
                                    <img width="768" height="768"
                                         src="{{asset('assets/client/wp-content/uploads/2023/05/bf97e05a-1db4-4e59-8be2-d3bb674b421a-768x768.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/05/bf97e05a-1db4-4e59-8be2-d3bb674b421a-768x768.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/05/bf97e05a-1db4-4e59-8be2-d3bb674b421a-1536x1536.png')}} 1536w,
                                                 {{asset('assets/client/wp-content/uploads/2023/05/bf97e05a-1db4-4e59-8be2-d3bb674b421a-2048x2048.png')}} 2048w,
                                                 {{asset('assets/client/wp-content/uploads/2023/05/bf97e05a-1db4-4e59-8be2-d3bb674b421a-100x100.png')}} 100w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                                <p>Sườn Tảng Quán Nhỏ</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/">
                                    <img width="768" height="768"
                                         src="{{asset('assets/client/wp-content/uploads/2022/12/2-768x768.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2022/12/2-768x768.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2022/12/2-100x100.png')}} 100w,
                                                 {{asset('assets/client/wp-content/uploads/2022/12/2.png')}} 800w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                                <p>Tôm Chiên Tổ Yến Quán Nhỏ</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="readmore-section">
                    <a href="https://quannho.vn/menu/">Xem thêm </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-menu" class="sec-full section-menu">
        <img class="sec-img-full"
             src="{{asset('assets/client/wp-content/uploads/2022/09/bg_04.jpg')}}"
             width="1920"
             height="1105" alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img width="156" height="111"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     class="image-specail" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">MENU QUÁN NHỎ </h3>
                <div class="slider_sec_8 swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/" data-toggle="modal" data-target="#modal_img">
                                    <img width="768" height="1150"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/1-768x1150.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/1-768x1150.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/1-1026x1536.png')}} 1026w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/1.png')}} 1348w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/" data-toggle="modal" data-target="#modal_img">
                                    <img width="768" height="1150"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/2-768x1150.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/2-768x1150.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/2-1026x1536.png')}} 1026w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/2.png')}} 1354w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item_slider_slick">
                                <a href="https://quannho.vn/menu/" data-toggle="modal" data-target="#modal_img">
                                    <img width="768" height="1151"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/3-768x1151.png')}}"
                                         class="attachment-medium_large size-medium_large" alt=""
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/3-768x1151.png')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/3-1025x1536.png')}} 1025w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/3.png')}} 1352w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-km" class="sec-full section-km">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_new_01.jpg')}}"
             width="1920"
             height="1100" alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img width="156" height="111"
                     src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     class="image-specail" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">ƯU ĐÃI ĐẶC BIỆT </h3>
                <div class="wrap-menu">
                    <div class="slider_sec_8 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1152"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/6-1-768x1152.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/6-1-768x1152.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/6-1.png')}} 1000w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1277"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/3-1-768x1277.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/3-1-768x1277.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/3-1-924x1536.png')}} 924w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/3-1.png')}} 1198w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1289"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min-768x1289.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min-768x1289.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min.png')}} 915w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.48.18-min.png')}} 1062w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1148"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min-768x1148.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min-768x1148.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min.png')}} 1027w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-06-14-luc-14.49.10-min.png')}} 1176w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="item_slider_slick">
                                    <a href="">
                                        <img width="768" height="1290"
                                             src="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}}"
                                             class="attachment-medium_large size-medium_large" alt=""
                                             decoding="async" loading="lazy"
                                             srcset="{{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}} 768w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}} 915w,
                                                     {{asset('assets/client/wp-content/uploads/2023/08/Anh-chup-Man-hinh-2023-07-22-luc-09.26.23-768x1290.png')}} 1060w"
                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="readmore-section">
                    <a href="#">Xem thêm </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-news" class="sec-full ">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_new_02.jpg')}}"
             width="1920"
             height="1150" alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <img class="image-specail" src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                     width="156"
                     height="111" alt="" decoding="async" loading="lazy"/>
                <h3 class="specail-title">NEWS &EVENTS
                </h3>

                <div class="row content-news">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-bignews">
                        <div class="box-news">
                            <div class="img-news">
                                <a href="https://quannho.vn/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho/">
                                    <img width="768" height="512"
                                         src="{{asset('assets/client/wp-content/uploads/2023/08/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho-1-768x512.jpg')}}"
                                         class="attachment-medium_large size-medium_large wp-post-image"
                                         alt="me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho"
                                         decoding="async" loading="lazy"
                                         srcset="{{asset('assets/client/wp-content/uploads/2023/08/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho-1-768x512.jpg')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2023/08/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho-1.jpg')}} 1500w"
                                         sizes="(max-width: 768px) 100vw, 768px"/>
                                </a>
                            </div>
                            <div class="info-news">
                                <a class="name-news"
                                   href="https://quannho.vn/me-say-top-cac-mon-hai-san-tuoi-ngon-thuong-hang-tai-nho/">Mê
                                    say top các món hải sản tươi ngon, thượng hạng tại Nhỏ</a>
                                <p class="excerpt-news">Không chỉ sở hữu không gian cực chill, dàn âm cực đỉnh,
                                    Nhỏ còn luôn mang đến cho các thực khách những món ăn cực ngon. Đừng bỏ lỡ
                                    ...</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-smallnews">
                        <div class="row">

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sub-smallnews">
                                <div class="box-news">
                                    <div class="img-news">
                                        <a href="https://quannho.vn/tu-diem-an-uong-sieu-ngon/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/tu-diem-an-uong-sieu-ngon-3-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="tu-diem-an-uong-sieu-ngon" decoding="async" loading="lazy"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/tu-diem-an-uong-sieu-ngon-3-768x512.png')}} 768w,
                                                         {{asset('assets/client/wp-content/uploads/2023/08/tu-diem-an-uong-sieu-ngon-3.png')}} 1500w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-news">
                                        <a class="name-news"
                                           href="https://quannho.vn/tu-diem-an-uong-sieu-ngon/">Khám phá ngay
                                            tụ điểm “ăn uống siêu ngon, ăn ảnh siêu chất” của giới trẻ Hà
                                            Thành</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sub-smallnews">
                                <div class="box-news">
                                    <div class="img-news">
                                        <a href="https://quannho.vn/thien-duong-overnight-gia-cuc-re/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/thien-duong-overnight-gia-cuc-re-5-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="thien-duong-overnight-gia-cuc-re" decoding="async"
                                                 loading="lazy"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/thien-duong-overnight-gia-cuc-re-5-768x512.png')}} 768w,
                                                         {{asset('assets/client/wp-content/uploads/2023/08/thien-duong-overnight-gia-cuc-re-5.png')}} 1500w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-news">
                                        <a class="name-news"
                                           href="https://quannho.vn/thien-duong-overnight-gia-cuc-re/">Top 3
                                            thiên đường overnight giá cực rẻ cho anh em tại Hà Nội</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 sub-smallnews">
                                <div class="box-news">
                                    <div class="img-news">
                                        <a
                                                href="https://quannho.vn/top-5-mon-an-tai-quan-nho-giup-ban-don-tim-crush-ngay-tu-lan-hen-dau-tien/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1-768x512.png')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="top-5-mon-an-tai-quan-nho" decoding="async" loading="lazy"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1-768x512.png')}} 768w,
                                                         {{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1-1536x1024.png')}} 1536w,
                                                         {{asset('assets/client/wp-content/uploads/2023/08/top-5-mon-an-tai-quan-nho-1.png')}} 2048w"
                                                 sizes="(max-width: 768px) 100vw, 768px"/>
                                        </a>
                                    </div>
                                    <div class="info-news">
                                        <a class="name-news"
                                           href="https://quannho.vn/top-5-mon-an-tai-quan-nho-giup-ban-don-tim-crush-ngay-tu-lan-hen-dau-tien/">TOP
                                            5 món ăn tại Quán Nhỏ giúp bạn “đốn tim” crush ngay từ lần hẹn đầu
                                            tiên</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="readmore-section">
                    <a href="/category/news-events/">Xem thêm </a>
                </div>
            </div>
        </div>
    </section>
    <section id="section-app" class="sec-full fadeIn wow" data-wow-delay="0.5s">
        <img class="sec-img-full" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_08.jpg')}}"
             width="1920" height="816"
             alt="" decoding="async" loading="lazy"/>
        <div class="background-overlay">
            <div class="container">
                <div class="row content-app">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-app">
                        <img class="image-specail"
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"
                             width="156" height="111" alt="" decoding="async" loading="lazy"/>
                        <h3 class="specail-title">Kết nối zalo ngay
                        </h3>
                        <p class="btn-app">
                            <a class="btn-app-qr">
                                <img src="{{asset('assets/client/wp-content/uploads/2022/12/qr.png')}}"
                                     width="200" height="196"
                                     alt="" decoding="async" loading="lazy"/>
                            </a>
                            <a class="btn-app-play">
                                <img src="{{asset('assets/client/wp-content/uploads/2022/09/play.png')}}"
                                     width="206" height="68"
                                     alt="" decoding="async" loading="lazy"/>
                            </a>
                            <a class="btn-app-store">
                                <img src="{{asset('assets/client/wp-content/uploads/2022/09/store.png')}}"
                                     width="206"
                                     height="68" alt="" decoding="async" loading="lazy"/>
                            </a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 colums-app colums-app2">
                        <img src="{{asset('assets/client/wp-content/uploads/2023/08/phone3.png')}}" width="542"
                             height="579"
                             alt="" decoding="async" loading="lazy"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection