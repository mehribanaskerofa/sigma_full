@if(isset($head))
    @if($slug!='index')
<div class="breadcrumb-box inverse">
    <div class="container-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href=""> Azerelli </a> </li>
                <li class="breadcrumb-item active" aria-current="page">
                        {{ \Illuminate\Support\Str::upper($slug)}}  </li>
            </ol>
        </nav>
    </div>
</div>
   @endif
<section class="section section-hero section-hero-home visible">
    <div class="section-fullsize-bg bg-prop">
        <!-- <picture>     -->
        <img alt="App developers at work" class="optimized-img-loading"
             src="{{asset('storage/'.$head->image)}}">
        <!-- </picture> -->
    </div>
    <div class="container-lg fadeIn ">

        <div class="hero-main-title text-center white_color">
            <h1 class="h1 hero-title-heading"><span id="h1-adapt" class="white_color">{{$head->sub_title}}</span></h1>
            <p class="hero-subtext d-none d-md-block white_color">{!! $head->description!!}</p>
        </div>
        <div class="hero-secondary-title">
            <h2 class="h2 white_color">{{$head->title}}</h2>
        </div>
        @if($head_sub)
        <div class="row">
            <div class="hero-slider-holder text-center">
                <div class="hero-slider-wrapper">
                    <div
                        class="hero-slider swiper-container fadeInUp delay1 swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">
                        <div class="swiper-wrapper" id="swiper-wrapper-ce10fffb69be1024d5"
                             aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
{{--@dd(count($head_sub))--}}
                            @foreach($head_sub as $index=>$sub)
                            <div class="swiper-slide show-bg-hover  @if($index==0) swiper-slide-active @endif  @if($index==1) swiper-slide-next  @endif "
                                 style="width: 320px;" role="group" aria-label=" {{ $index+1 }} / {{ count($head_sub) }}">
                                <div class="content-animation bg-prop">
                                    <picture>
                                        <img src="{{asset('storage/'.$sub->image)}}"
                                             alt="{{$sub->title}}"
                                             loading="lazy" width="294" height="330">
                                    </picture>
                                    <div class="text-box">
                                        <div class="img-holder"> <img
                                                src="{{asset('storage/'.$sub->icon)}}"
                                                loading="lazy" width="120" height="38" alt="{{$sub->title}}">
                                        </div>
                                        <p>{{$sub->title}}</p>
                                        <p class="hide-text">{{$sub->sub_title}}</p>
                                    </div>
                                </div>
                            </div>
                          @endforeach

                        </div><span class="swiper-notification" aria-live="assertive"
                                    aria-atomic="true"></span>
                    </div>
                    <div class="swiper-button-prev hero-button-prev swiper-button-disabled" tabindex="-1"
                         role="button" aria-label="Previous slide"
                         aria-controls="swiper-wrapper-ce10fffb69be1024d5" aria-disabled="true">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="swiper-button-next hero-button-next" tabindex="0" role="button"
                         aria-label="Next slide" aria-controls="swiper-wrapper-ce10fffb69be1024d5"
                         aria-disabled="false">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif
@if($head_counter)
<div class="section section-counter bg-prop visible">
    <div class="section-fullsize-bg bg-prop" id="counterFixedBg">
        <picture>
            <img alt="" class="optimized-img-loading" loading="lazy"
                 src="{{asset('assets/images/service-app-development-KPI-1440-scaled-1-1440x1080.jpg.webp')}}">
        </picture>
    </div>
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot1.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -40px;left: -215px;transform: scale(2);">
        <img src="{{asset('assets/images/dot1.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">
        <img src="{{asset('assets/images/dot1.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: -300px;right: 40%;transform: scale(2) rotate(0deg);">
    </div>
    <div class="container-lg">
        <div class="row fadeIn">
            @php
                if ($head_counter->counter3) $i=4;
                else $i=6;
            @endphp
            <div class="counter-col col-md-{{$i}}" data-count="{{intval($head_counter->counter1)}}">
                <div class="h2 counter-title h2-lg heading-underline center"> {{$head_counter->title1}}</div>
                <span class="large-title large-title-lg counter-number"> {{$head_counter->name1}}
                    <span @if(is_int(intval($head_counter->counter1))) class="count" @endif>{{$head_counter->counter1}}</span></span>
                <p class="desc">{{$head_counter->sub_title1}}</p>
            </div>
            <div class="counter-col col-md-{{$i}}" @if($head_counter->counter2)  data-count="{{intval($head_counter->counter2)}}"@endif >
                <div class="h2 counter-title h2-lg heading-underline center">{{$head_counter->title2}}</div>
                <span
                    class="large-title large-title-lg counter-number"> {{$head_counter->name2}}
                    <span @if(intval($head_counter->counter2)) class="count" @endif >{{$head_counter->counter2}}</span> </span>
                <p class="desc">{{$head_counter->sub_title2}}</p>
            </div>
            @if($head_counter->name3)
            <div class="counter-col col-md-{{$i}}" data-count="{{is_int(intval($head_counter->counter3))}}">
                <div class="h2 counter-title h2-lg heading-underline center"> {{$head_counter->title3}}</div>
                <span
                    class="large-title large-title-lg counter-number">
                    <span @if(is_int(intval($head_counter->counter3))) class="count" @endif>{{$head_counter->counter3}}</span>
                                <span>&nbsp;{{$head_counter->name3}}</span> </span>
                <p class="desc">{{$head_counter->sub_title3}}</p>
            </div>
            @endif
        </div>
    </div>
    <div id="bgCounterTrigger" aria-hidden="true"></div>
</div>
@endif
