@if(isset($slides))
<section class="section section-featured dots-holder visible">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(90deg);">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-title ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">XÜSUSI HƏLLƏR VƏ PROQRAM TƏMİNATI XIDMƏTLƏRİ!</h2> <span
                    class="section-sub-title outlined-big" aria-hidden="true">HƏLLƏR</span>
            </div>
        </div>
        <div class="featured-slider-holder">
            <div class="slider-featured fadeInUp delay02 swiper-container-coverflow swiper-container-3d swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events"
                 style="cursor: grab;">
                <div class="swiper-wrapper" id="swiper-wrapper-e7a83d537f7a5aac" aria-live="polite"
                     style="transition-duration: 0ms; transform: translate3d(-6286px, 0px, 0px);">

                    @foreach($slides as $index=>$slide)

                    <div class="swiper-slide
                    @if($index==$slides->count()) swiper-slide-duplicate swiper-slide-prev @endif
                    @if($index==0) swiper-slide-active @endif
                    @if($index==1) swiper-slide-next @endif
                    "
                         data-responsive-background-image="responsive-background-image"
                         data-swiper-slide-index="{{$index}}" role="group" aria-label="{{$index+1}} / {{count($slides)}}"
                         style="transition-duration: 0ms; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(45deg) scale(1); z-index: 0;">
                        <picture>

                            <img alt="{{$slide->title}}"
                                 src="{{asset('storage/'.$slide->image)}}"
                                 loading="lazy">
                        </picture>
                        <div class="text-box ">
                            <h3 class="h1 heading-underline center">{{$slide->title}}</h3>
                            <p>{!!  $slide->description!!}</p> <a
                                href="{{$slide->url}}" target="_blank"
                                rel="noopener" class="btn btn-outline-secondary ">Learn more</a>
                        </div>
                        <div class="swiper-slide-shadow-left" style="opacity: 1; transition-duration: 0ms;">
                        </div>
                        <div class="swiper-slide-shadow-right"
                             style="opacity: 0; transition-duration: 0ms;"></div>
                    </div>

                    @endforeach


                </div>

                <div class="featured-slider-buttons-wrapper">
                    <div class="featured-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                         aria-controls="swiper-wrapper-e7a83d537f7a5aac">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="featured-button-next" tabindex="0" role="button" aria-label="Next slide"
                         aria-controls="swiper-wrapper-e7a83d537f7a5aac">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                    role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet"
                                                                          tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                            role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet"
                                                                                                                  tabindex="0" role="button" aria-label="Go to slide 5"></span><span
                    class="swiper-pagination-bullet" tabindex="0" role="button"
                    aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0"
                                                            role="button" aria-label="Go to slide 7"></span><span class="swiper-pagination-bullet"
                                                                                                                  tabindex="0" role="button" aria-label="Go to slide 8"></span></div>
        </div>
    </div>
</section>
@endif
