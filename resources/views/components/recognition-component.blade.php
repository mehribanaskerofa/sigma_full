@if(!$datas->isEmpty())
<section class="section section-recognition visible">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(0deg);">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(0deg);">
    </div>
    <div class="container-md">
        <div class="section-title  fadeInUp ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text"> {{$datas->first()?->name}}</h2> <span
                    class="section-sub-title outlined-big" aria-hidden="true"> {{$datas->first()?->sub_name}} </span>
            </div>
        </div>
        <div class="fadeInUp delay05 row swiper-recognitions">
            <div
                class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-d5c1e0ad22154b14" aria-live="polite"
                     style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                    @foreach($datas as $data)
                    <div class="swiper-slide
                    @if($index==0) swiper-slide-active @endif
                    @if($index==1) swiper-slide-next @endif"
                         style="width: 200px;height: 300px; margin-right: 50px;">
                        <img alt="IAOP Global Outsourcing 100 Provider" style="width: 100%;height: 100%;"
                            src="{{asset('storage/'.$data->logo)}}"
                            loading="lazy">
                    </div>
                    @endforeach
                </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>

            <button class="swiper-button-prev swiper-recognitions-button-prev swiper-button-disabled"
                    aria-label="Previous slide" tabindex="-1" aria-controls="swiper-wrapper-d5c1e0ad22154b14"
                    aria-disabled="true" disabled="">
                <i class="fa-solid fa-arrow-left"></i>
            </button>
            <button class="swiper-button-next swiper-recognitions-button-next"
                    aria-label="Next slide" tabindex="0" aria-controls="swiper-wrapper-d5c1e0ad22154b14"
                    aria-disabled="false">
                <i class="fa-solid fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>
@endif
