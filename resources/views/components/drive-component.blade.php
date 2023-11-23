@if(isset($datas))
   @php  $grups = array_chunk($datas->toArray(), 5) @endphp

{{--    @foreach($grups as $index=>$grup)--}}






        @php $grup=$grups[0] ?? null @endphp
        @if(isset($grup))
            @php
                $articles = collect(array_slice($grup, 0, 2)); // İlk 2 eleman
                $slides =collect( array_slice($grup, 2, 3)); // Son 3 eleman
            @endphp
        <section class="section section-mobile-app visible" id="section-mobile-app">
            <div class="dots-bg dots-11 fadeIn delay02">
                <!-- <svg class="dots dots-11-1" width="78" height="142"
                    viewBox="0 0 78 142">
                    <use
                        xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-11-1">
                    </use>
                </svg> <svg class="dots dots-11-2" width="83" height="96" viewBox="0 0 83 96">
                    <use
                        xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-11-2">
                    </use>
                </svg> -->
                <img src="/assets/images/dot2.svg" alt="" width="300" height="400"
                     style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(90deg);">
                <img src="/assets/images/dot2.svg" alt="" width="300" height="400"
                     style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(180deg);">

            </div>
            <div class="container-lg">
                <div class="section-content">
                    <div class="section-title  fadeInUp">
                        <div class="section-title-box heading-underline center">
                            <h2 class="h1 title-text">Custom Mobile App Development</h2> <span
                                class="section-sub-title outlined-big" aria-hidden="true">Mobile</span>
                        </div>
                    </div>
                    <div class="case-info">
                        <div class="row">
                            <div class="col-lg-auto case-card-col">
                                <div class="card-paper with-smart">
                                    <div class="smart-sign"><img src="/assets/images/decor-smart.svg" alt=""></div>
                                    @foreach( collect($articles) as $article)
                                        <article>
                                            <h3 class="h2 heading-underline">{{$article['title']}}</h3>
                                            <p>{{$article['description1']}}</p>
                                            <p>{{$article['description2']}}</p>
                                        </article>
                                    @endforeach

                                    <a href="/services/custom-mobile-app-development" class="text-link">
                                        Learn more </a>
                                </div>
                            </div>
                            <div class="col-lg slider-col">
                                <div class="section-fullsize-bg">
                                    <picture>
                                        <img alt="A camera of the mobile phone" class="optimized-img-loading"
                                             loading="lazy" src="/assets/images/bg-sidebar-mobile-1440.jpg.webp">
                                    </picture>
                                </div>
                                <div class="case-info-slider-box inverse"><span class="h2 heading-underline">Related
                                            Cases</span>
                                    <div class="slider-small-text-wrapper">
                                        <div
                                            class="mobile-app-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-e825c63e27586a16"
                                                 aria-live="polite">

                                                @foreach($slides as $index1=>$slide)
                                                    <div class="swiper-slide
                                        @if($index1==0) swiper-slide-active @endif
                                        @if($index1==1) swiper-slide-next @endif
                                        " style="width: 190px;"
                                                         role="group" aria-label=" {{ $index1+1 }} / {{ count($slides) }}">
                                                        <div class="swiper-slide-content">
                                                            <div class="h4">{{$slide['title']}}</div>
                                                            <p class="text-white-80">{{$slide['description1']}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>

                                            <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                        </div>
                                        <div class="swiper-button-prev mobile-app-slider-button-prev swiper-button-disabled"
                                             tabindex="-1" role="button" aria-label="Previous slide"
                                             aria-controls="swiper-wrapper-e825c63e27586a16" aria-disabled="true">
                                            <i class="fa-solid fa-chevron-left"></i>
                                        </div>
                                        <div class="swiper-button-next mobile-app-slider-button-next" tabindex="0"
                                             role="button" aria-label="Next slide"
                                             aria-controls="swiper-wrapper-e825c63e27586a16" aria-disabled="false">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif


   @php $grup1=$grups[1] ?? null @endphp
   @if(isset($grup1))
       @php
           $articles = collect(array_slice($grup1, 0, 2)); // İlk 2 eleman
           $slides =collect( array_slice($grup1, 2, 3)); // Son 3 eleman
       @endphp
        <section class="section section-enterprise-web-app visible" id="section-enterprise-web-app">
            <div class="dots-bg dots-12 fadeIn delay02">
                <!-- <svg class="dots dots-12-1" width="62" height="40"
                    viewBox="0 0 62 40">
                    <use
                        xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-12-1">
                    </use>
                </svg> <svg class="dots dots-12-2" width="161" height="140" viewBox="0 0 161 140">
                    <use
                        xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-12-2">
                    </use>
                </svg> -->
                <img src="/assets/images/dot2.svg" alt="" width="300" height="300"
                     style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(0deg);">
                <img src="/assets/images/dot2.svg" alt="" width="300" height="300"
                     style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(180deg);">

            </div>
            <div class="container-lg">
                <div class="section-content">
                    <div class="section-title  fadeInUp">
                        <div class="section-title-box heading-underline center">
                            <h2 class="h1 title-text">Bespoke Enterprise &amp; Web App</h2> <span
                                class="section-sub-title outlined-big" aria-hidden="true">Enterprise</span>
                        </div>
                    </div>
                    <div class="case-info">
                        <div class="row">
                            <div class="col-lg-auto case-card-col">
                                <div class="card-paper with-smart">
                                    <div class="smart-sign"><img src="/assets/images/decor-smart.svg" alt=""></div>
                                                                @foreach( collect($articles) as $article)
                                                                <article>
                                                                    <h3 class="h2 heading-underline">{{$article['title']}}</h3>
                                                                    <p>{{$article['description1']}}</p>
                                                                    <p>{{$article['description2']}}</p>
                                                                </article>
                                                                @endforeach
                                    <a href="" class="text-link"> Go to website design &amp; development
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg slider-col">
                                <div class="section-fullsize-bg">
                                    <picture>
                                        <img alt="A camera of the mobile phone" class="optimized-img-loading"
                                             loading="lazy" src="/assets/images/bg-sidebar-mobile-1440.jpg.webp">
                                    </picture>
                                </div>
                                <div class="case-info-slider-box inverse"><span class="h2 heading-underline">Related
                                            Cases</span>
                                    <div class="slider-small-text-wrapper">
                                        <div
                                            class="enterprise-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-174f5a10ff7c2b210a"
                                                 aria-live="polite">
                                                                                        @foreach($slides as $index1=>$slide)
                                                                                        <div class="swiper-slide
                                                                                        @if($index1==0) swiper-slide-active @endif
                                                                                        @if($index1==1) swiper-slide-next @endif
                                                                                        " style="width: 190px;"
                                                                                             role="group" aria-label=" {{ $index1+1 }} / {{ count($slides) }}">
                                                                                            <div class="swiper-slide-content">
                                                                                                <div class="h4">{{$slide['title']}}</div>
                                                                                                <p class="text-white-80">{{$slide['description1']}}</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        @endforeach
                                            </div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                        </div>
                                        <div class="swiper-button-prev enterprise-slider-button-prev swiper-button-disabled"
                                             tabindex="-1" role="button" aria-label="Previous slide"
                                             aria-controls="swiper-wrapper-174f5a10ff7c2b210a" aria-disabled="true">
                                            <i class="fa-solid fa-chevron-left"></i>
                                        </div>
                                        <div class="swiper-button-next enterprise-slider-button-next" tabindex="0"
                                             role="button" aria-label="Next slide"
                                             aria-controls="swiper-wrapper-174f5a10ff7c2b210a" aria-disabled="false">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   @endif

   @php $grup2=$grups[2] ?? null @endphp
   @if(isset($grup2))
       @php
           $articles = collect(array_slice($grup2, 0, 2)); // İlk 2 eleman
           $slides =collect( array_slice($grup2, 2, 3)); // Son 3 eleman
       @endphp
        <section class="section section-iot-cloud visible" id="section-iot-cloud">
            <div class="dots-bg dots-13 fadeIn delay02">
                <!-- <svg class="dots dots-13-1" width="115" height="144"
                    viewBox="0 0 115 144">
                    <use
                        xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-13-1">
                    </use>
                </svg> <svg class="dots dots-13-2" width="62" height="40" viewBox="0 0 62 40">
                    <use
                        xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-13-2">
                    </use>
                </svg> -->
                <img src="/assets/images/dot2.svg" alt="" width="300" height="400"
                     style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(0deg);">
                <img src="/assets/images/dot2.svg" alt="" width="300" height="400"
                     style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(0deg);">

            </div>
            <div class="container-lg">
                <div class="section-content">
                    <div class="section-title  fadeInUp">
                        <div class="section-title-box heading-underline center">
                            <h2 class="h1 title-text">IoT &amp; Cloud App Development</h2> <span
                                class="section-sub-title outlined-big" aria-hidden="true">IoT &amp; Cloud</span>
                        </div>
                    </div>
                    <div class="case-info">
                        <div class="row">
                            <div class="col-lg-auto case-card-col">
                                <div class="card-paper with-smart">
                                    <div class="smart-sign"><img src="/assets/images/decor-smart.svg" alt=""></div>
                                                                @foreach( collect($articles) as $article)
                                                                <article>
                                                                    <h3 class="h2 heading-underline">{{$article['title']}}</h3>
                                                                    <p>{{$article['description1']}}</p>
                                                                    <p>{{$article['description2']}}</p>
                                                                </article>
                                                                @endforeach
                                </div>
                            </div>
                            <div class="col-lg slider-col">
                                <div class="section-fullsize-bg">
                                    <picture>
                                        <img alt="A camera of the mobile phone" class="optimized-img-loading"
                                             loading="lazy" src="/assets/images/bg-sidebar-mobile-1440.jpg.webp">
                                    </picture>
                                </div>
                                <div class="case-info-slider-box inverse"><span class="h2 heading-underline">Related
                                            Cases</span>
                                    <div class="slider-small-text-wrapper">
                                        <div
                                            class="iot-cloud-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                                            <div class="swiper-wrapper" id="swiper-wrapper-46f5d11148248b66"
                                                 aria-live="polite">
                                                                                        @foreach($slides as $index1=>$slide)
                                                                                        <div class="swiper-slide
                                                                                        @if($index1==0) swiper-slide-active @endif
                                                                                        @if($index1==1) swiper-slide-next @endif
                                                                                        " style="width: 190px;"
                                                                                             role="group" aria-label=" {{ $index1+1 }} / {{ count($slides) }}">
                                                                                            <div class="swiper-slide-content">
                                                                                                <div class="h4">{{$slide['title']}}</div>
                                                                                                <p class="text-white-80">{{$slide['description1']}}</p>
                                                                                            </div>
                                                                                        </div>
                                                                                        @endforeach
                                            </div><span class="swiper-notification" aria-live="assertive"
                                                        aria-atomic="true"></span>
                                        </div>
                                        <div class="swiper-button-prev iot-cloud-slider-button-prev swiper-button-disabled"
                                             tabindex="-1" role="button" aria-label="Previous slide"
                                             aria-controls="swiper-wrapper-46f5d11148248b66" aria-disabled="true">
                                            <i class="fa-solid fa-chevron-left"></i>
                                        </div>
                                        <div class="swiper-button-next iot-cloud-slider-button-next" tabindex="0"
                                             role="button" aria-label="Next slide"
                                             aria-controls="swiper-wrapper-46f5d11148248b66" aria-disabled="false">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   @endif

{{--    <section class="section section-{{$index}} visible" id="section-{{$index}}">--}}
{{--    <div class="dots-bg dots-13 fadeIn delay02">--}}
{{--        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"--}}
{{--             style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(0deg);z-index: -40;">--}}
{{--        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"--}}
{{--             style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(0deg);z-index: -40;">--}}
{{--    </div>--}}
{{--    <div class="container-lg">--}}
{{--        <div class="section-content">--}}
{{--            <div class="section-title  fadeInUp">--}}
{{--                <div class="section-title-box heading-underline center">--}}
{{--                    <h2 class="h1 title-text">{{$datas->first()->name}}</h2> <span--}}
{{--                        class="section-sub-title outlined-big" aria-hidden="true">{{$datas->first()->sub_name}}</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="case-info">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-auto case-card-col">--}}
{{--                        <div class="card-paper with-smart">--}}
{{--                            <div class="smart-sign"><img src="{{asset('assets/images/decor-smart.svg')}}" alt=""></div>--}}

{{--                            @foreach( collect($articles) as $article)--}}
{{--                            <article>--}}
{{--                                <h3 class="h2 heading-underline">{{$article['title']}}</h3>--}}
{{--                                <p>{{$article['description1']}}</p>--}}
{{--                                <p>{{$article['description2']}}</p>--}}
{{--                            </article>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg slider-col">--}}
{{--                        <div class="section-fullsize-bg">--}}
{{--                            <picture>--}}
{{--                                <img alt="A camera of the mobile phone" class="optimized-img-loading"--}}
{{--                                     loading="lazy" src="{{asset('assets/images/bg-sidebar-mobile-1440.jpg.webp')}}">--}}
{{--                            </picture>--}}
{{--                        </div>--}}
{{--                        <div class="case-info-slider-box inverse"><span class="h2 heading-underline">Related--}}
{{--                                            Cases</span>--}}
{{--                            <div class="slider-small-text-wrapper">--}}
{{--                                <div--}}
{{--                                    class="{{$index}}-slider swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">--}}
{{--                                    <div class="swiper-wrapper" id="swiper-wrapper-46f5d11148248b66"--}}
{{--                                         aria-live="polite">--}}

{{--                                        @foreach($slides as $index1=>$slide)--}}
{{--                                        <div class="swiper-slide--}}
{{--                                        @if($index1==0) swiper-slide-active @endif--}}
{{--                                        @if($index1==1) swiper-slide-next @endif--}}
{{--                                        " style="width: 190px;"--}}
{{--                                             role="group" aria-label=" {{ $index1+1 }} / {{ count($slides) }}">--}}
{{--                                            <div class="swiper-slide-content">--}}
{{--                                                <div class="h4">{{$slide['title']}}</div>--}}
{{--                                                <p class="text-white-80">{{$slide['description1']}}</p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        @endforeach--}}

{{--                                    </div>--}}
{{--                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-button-prev {{$index}}-slider-button-prev swiper-button-disabled"--}}
{{--                                     tabindex="-1" role="button" aria-label="Previous slide"--}}
{{--                                     aria-controls="swiper-wrapper-46f5d11148248b66" aria-disabled="true">--}}
{{--                                    <i class="fa-solid fa-chevron-left"></i>--}}
{{--                                </div>--}}
{{--                                <div class="swiper-button-next {{$index}}-slider-button-next" tabindex="0"--}}
{{--                                     role="button" aria-label="Next slide"--}}
{{--                                     aria-controls="swiper-wrapper-46f5d11148248b66" aria-disabled="false">--}}
{{--                                    <i class="fa-solid fa-chevron-right"></i>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--    @endforeach--}}
@endif
