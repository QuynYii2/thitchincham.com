@extends('clients.layouts.master')

@section('title', 'Menu Detail')

@section('content')
    <section id="section-banner" class="section-bread">
        <div class="background-overlay">
            <img width="2560" height="1707"
                 src="{{asset('assets/img/mon-ga-nhanh.jpg')}}"
                 class="image-banner-full" alt="" decoding="async" loading="lazy"
                 srcset="{{asset('assets/img/mon-ga-nhanh.jpg')}} 2560w,
                 {{asset('assets/img/mon-ga-nhanh.jpg')}} 360w,
                 {{asset('assets/img/mon-ga-nhanh.jpg')}} 750w,
                 {{asset('assets/img/mon-ga-nhanh.jpg')}} 120w,
                 {{asset('assets/img/mon-ga-nhanh.jpg')}} 768w,
                 {{asset('assets/img/mon-ga-nhanh.jpg')}} 1536w,
                 {{asset('assets/img/mon-ga-nhanh.jpg')}} 2048w"
                 sizes="(max-width: 2560px) 100vw, 2560px"/>
        </div>
    </section>

    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{$menu->thumbnail}}" alt="">
                            </div>
                            <form>
                                <div class="col-md-6">
                                    <h2 class="title-single">{{ $menu->name }}</h2>
                                    <div class="">Danh mục: {{$menu->category->name}}</div>
                                    <div class="diprice">
                                        <div class="pname">Giá bán:</div>
                                        <div class="pnews">{{$menu->price}}.000đ</div>
                                    </div>
                                    <div class="entry-content">
                                        {!!$menu->short_description!!}
                                        {!!$menu->description!!}
                                    </div>
                                    <!-- .entry-content -->
                                    <div class="quantity">
                                        <label for="quantity">Số lượng</label>
                                        <input type="number" min="1" value="1" name="quantity" id="quantity"
                                               class="form-control">
                                    </div>

                                    <a class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Đặt
                                        ngay
                                    </a>
                                </div>
                            </form>
                        </div>

                        <div class="related-post">
                            <!-- Hiển thị bài viết theo category -->
                            <h3 class="related-title">
                                <span>Sản phẩm tương tự</span>
                            </h3>

                            <div class="row list-related">
                                @if(!$moreMenus->isEmpty())
                                    @foreach($moreMenus as $moreMenusItem)
                                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 colums-posts">
                                            <div class="box-posts">
                                                <div class="img-posts">
                                                    <a href="{{route('menu.detail', $moreMenusItem->id)}}">
                                                        <img width="768" height="512"
                                                             src="{{ $moreMenusItem->thumbnail }}"
                                                             class="attachment-medium_large size-medium_large wp-post-image"
                                                             alt="{{$moreMenusItem->title}}"
                                                             decoding="async"
                                                             title="{{$moreMenusItem->title}}"
                                                             srcset="{{ $moreMenusItem->thumbnail }} 768w,
                                                         {{ $moreMenusItem->thumbnail }} 1500w"
                                                             sizes="(max-width: 768px) 100vw, 768px"/>
                                                    </a>
                                                </div>
                                                <div class="info-posts">
                                                    <a class="name-posts"
                                                       href="{{route('menu.detail', $moreMenusItem->id)}}">{{$moreMenusItem->name}}</a>
                                                    <div class="dsprice">
                                                        <div class="pname">Giá:</div>
                                                        <div class="pnews">{{$moreMenusItem->price}}.000đ</div>
                                                    </div>
                                                    <div class="dsview">
                                                        <div class="viewfood">
                                                            <a href="{{route('menu.detail', $moreMenusItem->id)}}">XEM
                                                                CHI TIẾT</a>
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
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin người đặt đơn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="submitInformation" method="post" action="{{route('create.information')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fullName">Họ và Tên</label>
                            <input type="text" class="form-control" name="fullName" id="fullName"
                                   placeholder="Nguyen Minh">
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail">
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Số điện thoại</label>
                                <input type="text" class="form-control" name="phoneNumber" id="inputPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Địa chỉ</label>
                            <input type="text" class="form-control" name="address" id="inputAddress"
                                   placeholder="1234 Main St">
                        </div>
                        <input type="number" value="1" name="quantity" id="quantity-modal" style="display: none">
                        <input type="text" value="{{$menu->id}}" name="menu_id" style="display: none">
                        <input type="text" style="display: none" value="{{$menu->price}}" name="price">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#quantity').on('change', function () {
                let quantity = $(this).val();
                $('#quantity-modal').val(quantity);
            })
        })
    </script>
@endsection