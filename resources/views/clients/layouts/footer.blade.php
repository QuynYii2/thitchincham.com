@php
    $config = \App\Models\Config::where('status', \App\Enums\ConfigStatus::ACTIVE)->first();
@endphp
<footer class="footer-sidebar" role="contentinfo">
    <div class="background-overlay"
         style="background-image:url({{asset('assets/client/wp-content/uploads/2022/09/bg_09.jpg')}})">
        <div class="container">
            <div class="footer-top">
                @if($config)
                    <a class="logo-top-footer">
                        <img src="{{$config->logo}}" width="156"
                             height="111" alt=""
                             decoding="async" loading="lazy"/>
                    </a>
                    <p class="hotline-footer">
                        <a class="hf-phone" href="tel:{{$config->hotline}}">Hotline: {{$config->hotline}} </a>
                        <a class="hf-phone" href="tel:{{$config->cskh}}">CSKH: {{$config->cskh}}</a>
                    </p>
                @endif
            </div>
            <div class="footer-bottom">
                <p class="notice-cn">
                    <a href="{{route('branch.index')}}" style="color:#ffffff;">Hệ Thống Chi Nhánh</a>
                </p>
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <h3 class="cn-h3">Cơ sở 1 </h3>
                        <p class="cn-p">
                            <a href="" style="color:#ffffff;">Ngõ 11 Ngọc Khánh, Ba Đình, Hà Nội </a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <h3 class="cn-h3">Cơ sở 2 </h3>
                        <p class="cn-p">
                            <a href="" style="color:#ffffff;">Số 18 ngõ 75 Trần Quang Diệu, Đống Đa, Hà
                                Nội</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <h3 class="cn-h3">Cơ sở 3 </h3>
                        <p class="cn-p">
                            <a href="" style="color:#ffffff;">Số 76 Ngọc Khánh, Ba Đình, Hà Nội </a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <h3 class="cn-h3">Cơ sở 118 </h3>
                        <p class="cn-p">
                            <a href="" style="color:#ffffff;">Ngõ 118 Nguyễn Khánh Toàn, Cầu Giấy, Hà
                                Nội</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <h3 class="cn-h3">Cơ sở 5 </h3>
                        <p class="cn-p">
                            <a href="" style="color:#ffffff;">31 Láng Hạ, Ba Đình, Hà Nội</a>
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <h3 class="cn-h3">Cơ sở 6 (NEW) </h3>
                        <p class="cn-p">
                            <a href="" style="color:#ffffff;">35B Lê Văn Thiêm, Thanh Xuân Trung, Thanh
                                Xuân, Hà Nội</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>