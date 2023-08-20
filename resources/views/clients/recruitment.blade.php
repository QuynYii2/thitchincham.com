@extends('clients.layouts.master')

@section('title', 'Recruitment')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707" src="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/client/wp-content/uploads/2022/10/LEO09129-scaled.jpg')}} 2560w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-360x240.jpg')}} 360w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-750x500.jpg')}} 750w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-120x80.jpg')}} 120w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-768x512.jpg')}} 768w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-1536x1024.jpg')}} 1536w,
                 {{asset('assets/client/wp-content/uploads/2022/10/LEO09129-2048x1365.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px" />
            <div class="containter">
                <div class="sb-content">
                    <img class="sb-content-img" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_tuyendung.png')}}"
                         width="545" height="162" alt="" decoding="async" loading="lazy" />
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
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}" width="156" height="111" alt=""
                             decoding="async" loading="lazy" />
                        <h2 class="page-title">
                            <span>Tuyển dụng</span>
                        </h2>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/820-2/">
                                            <img width="768" height="480"
                                                 src="{{asset('assets/client/wp-content/uploads/2022/11/312561850_125571803627485_702376089882402763_n-768x480.jpeg')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="QUÁN NHỎ TUYỂN DỤNG &#8211; LỄ TÂN NHÀ HÀNG"
                                                 decoding="async"
                                                 title="QUÁN NHỎ TUYỂN DỤNG &#8211; LỄ TÂN NHÀ HÀNG"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2022/11/312561850_125571803627485_702376089882402763_n-768x480.jpeg')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2022/11/312561850_125571803627485_702376089882402763_n-360x225.jpeg')}} 360w,
                                                 {{asset('assets/client/wp-content/uploads/2022/11/312561850_125571803627485_702376089882402763_n-1536x960.jpeg')}} 1536w,
                                                 {{asset('assets/client/wp-content/uploads/2022/11/312561850_125571803627485_702376089882402763_n.jpeg')}} 2048w"
                                                 sizes="(max-width: 768px) 100vw, 768px" />
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts" href="https://quannho.vn/820-2/">QUÁN NHỎ TUYỂN
                                            DỤNG &#8211;LỄ TÂN NHÀ HÀNG</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                <div class="box-posts">
                                    <div class="img-posts">
                                        <a href="https://quannho.vn/quan-nho-tuyen-dung-quan-ly-giam-sat/">
                                            <img width="768" height="512"
                                                 src="{{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-768x512.jpg')}}"
                                                 class="attachment-medium_large size-medium_large wp-post-image"
                                                 alt="QUÁN NHỎ TUYỂN DỤNG &#8211; QUẢN LÝ/GIÁM SÁT"
                                                 decoding="async" loading="lazy"
                                                 title="QUÁN NHỎ TUYỂN DỤNG &#8211; QUẢN LÝ/GIÁM SÁT"
                                                 srcset="{{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-768x512.jpg')}} 768w,
                                                 {{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-360x240.jpg')}} 360w,
                                                 {{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-750x500.jpg')}} 750w,
                                                 {{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-120x80.jpg')}} 120w,
                                                 {{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-1536x1024.jpg')}} 1536w,
                                                 {{asset('assets/client/wp-content/uploads/2022/10/U3Z00582-2048x1365.jpg')}} 2048w"
                                                 sizes="(max-width: 768px) 100vw, 768px" />
                                        </a>
                                    </div>
                                    <div class="info-posts">
                                        <a class="name-posts"
                                           href="https://quannho.vn/quan-nho-tuyen-dung-quan-ly-giam-sat/">QUÁN
                                            NHỎ TUYỂN DỤNG &#8211;QUẢN LÝ/GIÁM SÁT</a>
                                    </div>
                                </div>
                            </div>

                            <div class="paginations"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Blog & Sidebar Section -->
    <div class="clearfix"></div>
@endsection