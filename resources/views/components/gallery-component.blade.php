@if(!$datas->isEmpty())
    <section class="section section-gallery fadeInUp delay02 visible">
        <div class="container-lg">
            <div class="gallery">
                <div
                    class="swiper gallery-slider2 gallerySlider2 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                    <div class="swiper-wrapper" id="swiper-wrapper-6871e2578ff7d803" aria-live="polite"
                         style="transform: translate3d(0px, 0px, 0px);">

                        @foreach($datas as $index=>$data)
                        <div class="swiper-slide @if($index==0) swiper-slide-active @endif  @if($index==1) swiper-slide-next @endif "
                             style="width: 829px; margin-right: 70px;"
                             role="group" aria-label="{{intval($index)}} / {{count($datas)}}">
                            <picture class="for-img" style="--ratio: 1010/480;">
                                <img alt="" loading="lazy" class="optimized-img-loading"
                                     src="{{asset('storage/'.$data->image)}}">
                            </picture>
                        </div>
                        @endforeach
                    </div>
                    <div class="gallery-slider-button-next" tabindex="0" role="button" aria-label="Next slide"
                         aria-controls="swiper-wrapper-6871e2578ff7d803" aria-disabled="false">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="gallery-slider-button-prev swiper-button-disabled" tabindex="-1" role="button"
                         aria-label="Previous slide" aria-controls="swiper-wrapper-6871e2578ff7d803"
                         aria-disabled="true">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div
                    class="swiper gallery-slider1 gallerySlider swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events swiper-container-free-mode swiper-container-thumbs">
                    <div class="swiper-wrapper" id="swiper-wrapper-88e1171f5919cca4" aria-live="polite"
                         style="transform: translate3d(0px, 0px, 0px);">
                        @foreach($datas as $data)
                        <div class="swiper-slide
                        @if($index==0)  swiper-slide-active swiper-slide-thumb-active @endif
                        @if($index==1)  swiper-slide-next @endif "
                             style="width: 199.75px; margin-right: 10px;" role="group" aria-label="{{intval($index)}} / {{count($datas)}}">
                            <picture class="for-img" style="--ratio: 1010/480;">
                                <img alt="" loading="lazy" class="optimized-img-loading"
                                     src="{{asset('storage/'.$data->image)}}">
                            </picture>
                        </div>
                        @endforeach
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            </div>
        </div>
    </section>

@endif
