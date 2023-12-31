@php
    $config = \App\Models\Config::where('status', \App\Enums\ConfigStatus::ACTIVE)->first();
@endphp
<header role="banner">
    <nav class='navbar navbar-default sticky-nav' role='navigation'>
        <!-- Mobile Display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{route('home')}}">
                @if($config)
                    <img src="{{$config->logo}}" alt=""/>
                @endif
            </a>
            <h1 class="site-description">Quán Nhỏ - Quán Nhậu Xuyên Đêm Tại Hà Nội</h1>
            <a id="showmenu">
                        <span class="hamburger hamburger--collapse">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
            </a>
            <!-- /End Contact Info -->
            <!-- Menu Toggle -->
            <div class="collapse navbar-collapse" id="navbar_primary">
                <div class="header-search-wrap">
                    <button type="button" data-toggle="dropdown" class="btn dropdown-toggle">
                        <i class="fa fa-search"></i>
                    </button>
                    <div class="dropdown-search dropdown-menu">
                        <form role="search" method="get" id="searchform" class="searchform"
                              action="#">
                            <div>
                                <label class="screen-reader-text" for="s"></label>
                                <input type="text" class="form-control" placeholder="Tìm kiếm.." value=""
                                       name="s" id="s"/>
                                <button type="submit" id="searchsubmit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <ul id="menu-menu-chinh" class="nav navbar-nav navbar-right">
                    <li id="menu-item-499"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-499 active">
                        <a href="{{route('home')}}" style="font-size: 24px">Trang chủ</a>
                    </li>
                    <li id="menu-item-839"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-839 dropdown">
                        <a href="#" style="font-size: 24px">
                            Danh sách sản phẩm <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @php
                                $categories = \App\Models\Category::where('status', \App\Enums\CategoryStatus::ACTIVE)->get();
                            @endphp
                            @foreach($categories as $category)
                                <li id="menu-item-{{$category->id}}"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458">
                                    <a style="font-size: 20px"  href="{{route('menu.category.list', $category->id)}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li id="menu-item-453"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-453">
                        <a href="{{route('news.index')}}" style="font-size: 24px">Tin tức</a>
                    </li>
                    <li id="menu-item-494"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494">
                        <a href="{{route('about.us')}}" style="font-size: 24px">Về chúng tôi</a>
                    </li>
{{--                        <li id="menu-item-454"--}}
{{--                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-454">--}}
{{--                            <a href="{{route('recruitment.index')}}">Tuyển dụng</a>--}}
{{--                        </li>--}}
{{--                        <li id="menu-item-496"--}}
{{--                            class="menu-item menu-item-type-taxonomy menu-item-object-type_schools menu-item-496">--}}
{{--                            <a href="{{route('branch.index')}}">Chi nhánh</a>--}}
{{--                        </li>--}}
                </ul>
            </div>
            <!-- Menu Toggle -->
        </div>
    </nav>
    <div id="mobilenav">
        <div class="mobilenav__inner">
            <div class="toplg">
                <h3>MENU</h3>
            </div>
            <div class="menu-menu-chinh-container">
                <ul id="menu-main" class="mobile-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-13 current_page_item menu-item-499 active">
                        <a href="{{route('home')}}" aria-current="page">Trang chủ</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-839">
                        <a href="{{route('menu.index')}}">Danh sách sản phẩm</a>
                        <ul class="sub-menu">
                            @php
                                $categories = \App\Models\Category::where('status', \App\Enums\CategoryStatus::ACTIVE)->get();
                            @endphp
                            @foreach($categories as $category)
                                <li id="menu-item-{{$category->id}}"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-458">
                                    <a style="font-size: 18px" href="{{route('menu.category.list', $category->id)}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-453">
                        <a href="{{route('news.index')}}">Tin tức</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494">
                        <a href="{{route('about.us')}}" >Về chúng tôi</a>
                    </li>
{{--                    <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-454">--}}
{{--                        <a href="{{route('recruitment.index')}}">Tuyển dụng</a>--}}
{{--                    </li>--}}
{{--                    <li class="menu-item menu-item-type-taxonomy menu-item-object-type_schools menu-item-496">--}}
{{--                        <a href="{{route('branch.index')}}">Chi nhánh</a>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <a class="menu_close">
                <i class="fas fa-angle-left"></i>
            </a>
        </div>
    </div>
</header>