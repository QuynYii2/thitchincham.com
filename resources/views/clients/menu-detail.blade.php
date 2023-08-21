@extends('clients.layouts.master')

@section('title', 'Menu Detail')

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
                    <img class="sb-content-img" src="{{asset('assets/client/wp-content/uploads/2022/09/bg_menu.png')}}"
                         width="272" height="119" alt="" decoding="async" loading="lazy"/>
                </div>
            </div>
        </div>
    </section>

    <section class="page-wrapper">
        <div class="background-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img class="image-intro" style="margin:auto;margin-bottom:15px;"
                             src="{{asset('assets/client/wp-content/uploads/2022/09/logo.png')}}"/>
                        <h2 class="title-single">{{ $menu->name }}</h2>
                        <div class="entry-content">
                            {!!$menu->short_description!!}
                            {!!$menu->description!!}
                        </div>
                        @php
                            $isCookie = false;
                            if (isset($_COOKIE["information_id"])){
                                $isCookie = true;
                            }
                        @endphp
                        @if($isCookie == true)
                            <button class="btn btn-success" data-toggle="modal" data-target="#modalOrder">Đặt ngay</button>
                        @else
                            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Đặt ngay</button>
                        @endif
                        <!-- .entry-content -->
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
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin ngừoi đặt Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="submitInformation" method="post" action="{{route('create.information')}}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" name="fullName" id="fullName"
                                   placeholder="Nguyen Minh">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword">Phone Number</label>
                                <input type="text" class="form-control" name="phoneNumber" id="inputPassword">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" name="address" id="inputAddress"
                                   placeholder="1234 Main St">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalOrder" tabindex="-1" role="dialog" aria-labelledby="modalOrderLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalOrderLabel">Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection