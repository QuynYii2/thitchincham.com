@php
    $config = \App\Models\Config::where('status', \App\Enums\ConfigStatus::ACTIVE)->first();
@endphp
<footer class="footer-sidebar" role="contentinfo">
    <div class="background-overlay"
         style="background-image:url({{asset('assets/client/wp-content/uploads/2022/09/bg_09.jpg')}})">
        <div class="container">
            <div class="footer-top">
                @if($config)
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
{{--                <div class="">--}}
{{--                    <h3 class="cn-h3">Cơ sở 1 </h3>--}}
{{--                    <p class="cn-p">--}}
{{--                        <a href="" style="color:#ffffff;">Ngõ 11 Ngọc Khánh, Ba Đình, Hà Nội </a>--}}
{{--                    </p>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>