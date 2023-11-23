@stack('css')
@stack('js')
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <title>Augmented and Virtual Reality (AR/VR) software development - Sigma Software</title>
    <!-- <meta name="description"
      content="Our Augmented and Virtual Reality app development services create new dimension for games, information representation, remote tools, and metaverse objects to come.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Augmented and virtual reality (AR/VR) Development">
    <meta property="og:description"
      content="Our Augmented and Virtual Reality app development services create new dimension for games, information representation, remote tools, and metaverse objects to come.">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="https://sigma.software/landing/ar-vr/img/bg-5-human-black.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:site_name" content="Sigma Software">
    <meta property="og:url" content="https://sigma.software/landing/ar/">

    <meta name="title" content="Augmented and Virtual Reality (AR/VR) software development - Sigma Software">
    <meta name="keywords"
      content="ar software development, ar technology company, virtual reality development, augmented reality development, android virtual reality development">
     -->
    <!-- <link rel="canonical" href="https://sigma.software/landing/ar/"> -->

    <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
    <style>
        @font-face {
            font-family: 'UniversCond';
            src: url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-59UltCond.eot");
            src: local("☺"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-59UltCond.woff") format("woff"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-59UltCond.ttf") format("truetype"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-59UltCond.svg") format("svg");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "UniversCond";
            src: url("https://cdn.sigma.software/landing/ar-vr/fonts/4a916908-f6f7-4df6-90a1-176fb83137d9.eot?#iefix");
            src: url("https://cdn.sigma.software/landing/ar-vr/fonts/4a916908-f6f7-4df6-90a1-176fb83137d9.eot?#iefix") format("eot"), url("https://cdn.sigma.software/landing/ar-vr/fonts/bf8f8741-5f64-4db9-a877-a44624092e68.woff2") format("woff2"), url("https://cdn.sigma.software/landing/ar-vr/fonts/7ce02c2c-45d4-4dee-90f2-f8034e29ac24.woff") format("woff"), url("https://cdn.sigma.software/landing/ar-vr/fonts/0955c906-88fc-47e8-8ea2-0765bdf88050.ttf") format("truetype"), url("https://cdn.sigma.software/landing/ar-vr/fonts/2fec7d2f-9df6-445b-8d59-892ed9b8ab56.svg#2fec7d2f-9df6-445b-8d59-892ed9b8ab56") format("svg");
            font-weight: 400;
            font-display: swap;
        }

        @font-face {
            font-family: 'UniversCond';
            src: url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-57CondensedObl.eot");
            src: local("☺"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-57CondensedObl.woff") format("woff"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-57CondensedObl.ttf") format("truetype"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-57CondensedObl.svg") format("svg");
            font-weight: 400;
            font-style: italic;
            font-display: swap;
        }

        @font-face {
            font-family: 'UniversCond';
            src: url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-47LightCond.eot");
            src: local("☺"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-47LightCond.woff") format("woff"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-47LightCond.ttf") format("truetype"), url("https://cdn.sigma.software/landing/ar-vr/fonts/UniversLTCYR-47LightCond.svg") format("svg");
            font-weight: 300;
            font-style: normal;
            font-display: swap;
        }

        .bottom-triangle {
            background: url({{asset('assets/images/section-1-line.webp')}}) no-repeat;
        }

        .no-webp .bottom-triangle {
            background-image: url({{asset('assets/images/section-1-line.webp')}});
        }

        .list-hex.red-style .hex {
            background: url({{asset('assets/images/hex-red-shadow.webp')}}) no-repeat 50% 50%/cover;
        }

        .no-webp .list-hex.red-style .hex {
            background-image: url({{asset('assets/images/hex-red-shadow.webp')}});
        }

        .list-hex .hex {
            background: url({{asset('assets/images/hex-white-shadow.png')}}) no-repeat 50% 50%/cover;
        }

        .no-webp .list-hex .hex {
            background-image: url({{asset('assets/images/hex-white-shadow.png')}});
        }

        #sectionCases {
            background: url({{asset('assets/images/bg-5-m.webp')}}) no-repeat 50% 0/cover;
        }

        .no-webp #sectionCases {
            background: url({{asset('assets/images/bg-5-m.webp')}}) no-repeat 50% 0/cover;
        }


        @media (min-width: 768px) {
            #sectionCases {
                background: url({{asset('assets/images/bg-5@2x.webp')}}) no-repeat 50% 100%/cover;
            }

            .no-webp #sectionCases {
                background-image: url({{asset('assets/images/bg-5@2x.webp')}});
            }

            #sectionCases:before {
                background: url({{asset('assets/images/bg-5-el-white-top@2x.webp')}}) no-repeat 50% 0/cover;
            }

            .no-webp #sectionCases:before {
                background-image: url({{asset('assets/images/bg-5-el-white-top@2x.webp')}});
            }
        }

        .bg-gallery:after {
            background: url({{asset('assets/images/bg-6-mask@2x.png')}}) no-repeat 50% 100%/cover;
        }

        #sectionContact:after {
            background: url({{asset('assets/images/bg-mask.png')}}) no-repeat 50% 0/cover;
        }

        .no-webp #sectionContact:after {
            background: url({{asset('assets/images/bg-mask.png')}}) no-repeat 50% 0/cover;
        }

        @media (min--moz-device-pixel-ratio: 1.3),
        (-webkit-min-device-pixel-ratio: 1.3),
        (min-device-pixel-ratio: 1.3),
        (min-resolution: 1.3dppx) {
            #sectionContact:after {
                background-image: url({{asset('assets/images/bg-mask@2x.webp')}});
            }

            .no-webp #sectionContact:after {
                background-image: url({{asset('assets/images/bg-mask@2x.webp')}});
            }
        }

        .no-webp #sectionSolution {
            background: url({{asset('assets/images/bg-10-m.png')}}) no-repeat 50% 100%/cover;
        }


        @media (min-width: 768px) {
            #sectionSolution {
                background: url({{asset('assets/images/bg-10@2x.webp')}}) no-repeat 50% 100%/cover;
            }

            .no-webp #sectionSolution {
                background: url({{asset('assets/images/bg-10@2x.webp')}}) no-repeat 50% 100%/cover;
            }

            .list-solution li:active:before,
            .list-solution li:focus:before,
            .list-solution li:focus:hover:before,
            .list-solution li:hover:before {
                background: url({{asset('assets/images/hex-point-active.svg')}}) no-repeat 0% 50%/cover;
            }
        }

        .list-solution li:before {
            background: url({{asset('assets/images/hex-point-active.svg')}}) no-repeat 0% 50%/cover;
        }

        @media (min-width: 768px) {
            .list-solution li:before {
                background: url({{asset('assets/images/hex-point-disable.svg')}}) no-repeat 0% 50%/cover;
            }
        }

        #sectionBanner {
            background:  no-repeat 50% 79%/cover;
        }

        .no-webp #sectionBanner {
            background: no-repeat 50% 79%/cover;
        }

        @media (min-width: 768px) {
            #sectionBanner {
                background:  no-repeat 50% 100%/cover;
            }

            .no-webp #sectionBanner {
                background:  no-repeat 50% 100%/cover;
            }
        }

        @media (min-width: 768px) {
            .teams .hex.has-hex:after {
                background: url({{asset('assets/images/hex-black.svg')}}) no-repeat 50% 50%/cover;
            }

            .caption:before {
                background: url({{asset('assets/images/hex-white-dotted.svg')}}) no-repeat 50% 50%/cover;
            }
        }

        .slide-holder .image:before {
            background: url({{asset('assets/images/hex-light-double.svg')}}) no-repeat 0 0/cover;
        }

        .carousel-control.left {
            background: url({{asset('assets/images/btn-arrow@2x.webp')}}) no-repeat 0 0/cover;
        }

        .no-webp .carousel-control.left {
            background: url({{asset('assets/images/btn-arrow@2x.webp')}}) no-repeat 0 0/cover;
        }

        .carousel-control.right {
            background: url({{asset('assets/images/btn-arrow@2x.webp')}}) no-repeat 0 0/cover;
        }

        .no-webp .carousel-control.right {
            background: url({{asset('assets/images/btn-arrow@2x.webp')}}) no-repeat 0 0/cover;
        }

        .contact-us {
            background: url({{asset('assets/images/ic-letter.svg')}}) no-repeat 50% 50%/cover;
        }

        .video-holder {
            background: #000 url({{asset('assets/images/bg-1.webp')}}) no-repeat 50% 50%/cover;
        }

        .no-webp .video-holder {
            background: #000 url({{asset('assets/images/bg-1.webp')}}) no-repeat 50% 50%/cover;
        }

        #sectionInfo {
            background:  no-repeat 50% 100%/cover;
        }

        .no-webp #sectionInfo {
            background:  no-repeat 50% 100%/cover;
        }



        @media (min-width: 768px) {
            #sectionInfo {
                background: no-repeat 50% 100%/cover;
            }


            .content-text:after {
                background: url({{asset('assets/images/hex-red-line-gradient.svg')}}) no-repeat 50% 50%/cover;
            }
        }

        #contact-us .modal-header .close {
            background-image: url({{asset('assets/images/close-icon\ \(1\).svg')}});
        }
    </style>
</head>

<body data-target="#paging" data-aos-easing="ease" data-aos-duration="1200" data-aos-delay="0">

<div class="wrapper">
    <button class="contact-us visible-xs" data-bs-toggle="modal" data-bs-target="#contact-us"></button>
    <button class="btn btn-default hidden-xs contactUs" data-bs-toggle="modal" data-bs-target="#contact-us">Contact
        us</button>
    <div id="paging" class="hidden-xs">
        <ul class="nav" role="tablist">
            <li role="tab"><a aria-label="section visual" href="#section-visual"></a></li>
            <li role="tab"><a aria-label="section Info" href="#sectionInfo"></a></li>
            <li role="tab"><a aria-label="section Talk" href="#sectionTalk"></a></li>
            <li role="tab"><a aria-label="section Offer" href="#sectionOffer"></a></li>
            <li role="tab"><a aria-label="section Cases" href="#sectionCases"></a></li>
            <li role="tab"><a aria-label="section Gallery" href="#sectionGallery"></a></li>
            <li role="tab"><a aria-label="section Examples" href="#sectionExamples"></a></li>
            <li role="tab"><a aria-label="section Team" href="#sectionTeam"></a></li>
            <li role="tab"><a aria-label="section Contact" href="#sectionContact"></a></li>
            <li role="tab"><a aria-label="section Solution" href="#sectionSolution"></a></li>
            <li role="tab"><a aria-label="section Banner" href="#sectionBanner"></a></li>
        </ul>
    </div>


    @if(isset($page1))
    <section id="section-visual" class="text-white header">
        <div class="video-holder bg-video-holder video-active"
             style="background-image: url({{asset('assets/images/video-frame.webp')}}); background-repeat: no-repeat; background-size: cover;">
            <video poster="{{asset('assets/images/video-frame.webp')}}" class="bg-video" loop=""
                   autoplay="" muted="" playsinline=""
                   style="width: 1263.33px; height: 710.623px; margin-top: -171.583px; margin-left: 0px;">
                <source type="video/mp4" src="{{asset('assets/videos/video.mp4')}}">
            </video>
        </div>
        <div class="container">
            <div class="logo">
                <a href="">
                    <img src="{{asset('assets/images/logo-ssw-white.svg')}}" height="43" width="152"
                         alt="" loading="lazy">
                </a>
            </div>
            <div class="centered">
                <header class="intro text-center">
                    <h1 class="text-white aos-init aos-animate" data-aos="fade-up" data-aos-delay="1000">
                        {{$page1->title}} </h1>
                    <small data-aos="fade-up" data-aos-delay="1000" class="aos-init aos-animate">{{$page1->sub_title}}</small>
                </header>
                <div class="info-text text-center aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-back"
                     data-aos-delay="1000" data-aos-offset="0">
            <span>{{$page1->description}}</span>
                </div>
            </div>
        </div>
        <a href="#sectionInfo" class="scroll-down smooth-scroll hidden-xs" ><span></span></a>
    </section>
    @endif

    @if(isset($page2))
    <div class="section" id="sectionInfo" style="background: url({{asset('assets/images/m-bg-2.webp')}}) no-repeat 50% 100%/cover;">
      <span class="parallax hex" style="top: 150px; right: 200px; transform: translateY(236.667px);">
        <img src="{{asset('assets/images/hex-light.svg')}}" height="101" width="86" alt="hex-light"
             loading="lazy">
      </span>
        <span class="parallax hex" style="bottom: 150px; left: 200px; opacity: 0.3; transform: translateY(236.667px);">
        <img src="{{asset('assets/images/hex-light-double.svg')}}" height="101" width="86"
             alt="hex-light-double" loading="lazy">
      </span>
        <div class="container">
            <div class="content-text text-center text-white">
                <div class="holder aos-init aos-animate" data-aos="zoom-in" data-aos-duration="2000">
                    <p>
                        {!! $page2->description !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(isset($page3))
    <section id="sectionTalk">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="h2">
                            {{$page3->title}} <br> {{$page3->sub_title}}
                        </h2>
                    </div>
                    <button class="btn btn-default aos-init aos-animate" data-bs-toggle="modal" data-bs-target="#contact-us"
                            data-aos="fade-up" data-aos-duration="1000">{{$page3->btn}}</button>
                </div>
            </div>
        </div>
        <span class="decor">
        <picture>

          <img src="{{asset('assets/images/bg-3-img.jpg')}}" width="551" height="570"
               alt="" loading="lazy">
        </picture>
      </span>
        <div class="bottom-triangle"></div>
        <span class="parallax hex bottom right visible-xs" style="bottom: -76px; transform: translateY(85.4479px);">
        <picture>
          <img src="{{asset('assets/images/dotted-half.png')}}" alt="" width="114"
               height="249" loading="lazy">
        </picture>
      </span>
        <span class="parallax hex bottom  hidden-xs" style="right: 60px; transform: translateY(85.4479px);">
        <picture>
          <img src="{{asset('assets/images/hex-dotted-line.png')}}" height="272" width="265"
               alt="hex-dotted-line" loading="lazy">
        </picture>
      </span>
        <span class="parallax line hidden-xs" style="bottom: 76px; left: 20%; transform: translateY(85.4479px);">
        <img src="{{asset('assets/images/line-red-1.svg')}}" alt="line-red-1" width="232" height="137"
             loading="lazy">
      </span>
    </section>
    @endif

    @if(isset($talks))
    <section id="sectionCases">
      <span class="parallax hex bottom left hidden-xs"
            style="bottom: 50px; z-index: 1; transform: translateY(187.646px);">
        <img src="{{asset('assets/images/hex-light.svg')}}" height="101" width="86" alt="hex-light"
             loading="lazy">
      </span>
        <span class="parallax hex" style="right: 40%; top: 25%; transform: translateY(187.646px);">
        <img src="{{asset('assets/images/hex-white-dotted.svg')}}" height="101" width="86"
             alt="hex-white-dotted" loading="lazy">
      </span>
        <span class="decor-man hidden-xs">
        <!--TODO: picture tag-->
        <picture>
          <img src="{{asset('assets/images/bg-5-human.png')}}"
               alt="" height="1025" width="835" loading="lazy">
        </picture>
      </span>
        <div class="container">
        <span class="hex top right" style="top: 50px; right: 50px; width: 100px; transform: rotate(-10deg);">
          <img src="{{asset('assets/images/hex-white-dotted.svg')}}" alt="hex-white-dotted"
               loading="lazy">
        </span>
            <div class="row">
                <div class="col-sm-12 text-white">
                    <div class="heading text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="h2">Top ar/vr use cases</h2>
                    </div>
                    <ul class="list-cases">
                        @foreach($talks as $talk)
                        <li>
                            <div class="image">
                                <img src="{{asset('storage/'.$talk->image)}}" height="40" width="40"
                                     alt="{{$talk->title}}" loading="lazy">
                            </div>
                            {{$talk->title}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(isset($offers))
    <section id="sectionOffer">
      <span class="parallax hex top hidden-xs" style="transform: translateY(637.411px);">
        <picture>

          <img src="{{asset('assets/images/hex-with-black.png')}}" height="156" width="132"
               alt="hex-with-black" loading="lazy">
        </picture>
      </span>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="heading aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="h1 brand-color">WE OFFER</div>
                    </div>
                    <h2 class="h2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1100">Going augmented and virtual
                    </h2>
                    <ul class="list-hex">
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
                                {{$offers->nth(1)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position left bottom hidden-xs"
                                 src="{{asset('assets/images/hex-red.svg')}}" alt="hex-red" width="120" height="123"
                                 loading="lazy">
                        </li>
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="1700">
                                {{$offers->nth(2)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position left top " src="{{asset('assets/images/hex-red.svg')}}"
                                 alt="hex-red" width="120" height="123" loading="lazy">
                        </li>
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                                {{$offers->nth(3)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position right bottom" src="{{asset('assets/images/hex-red.svg')}}"
                                 alt="hex-red" width="120" height="123" loading="lazy">
                        </li>
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                                {{$offers->nth(4)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position right top hidden-xs"
                                 src="{{asset('assets/images/hex-red.svg')}}" alt="hex-red" width="120" height="123"
                                 loading="lazy">
                        </li>
                        <li class="divider aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1500"
                            data-aos-delay="1000"></li>
                    </ul>
                    <h2 class="h2 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">What goes together...</h2>
                    <ul class="list-hex red-style">
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">
                                {{$offers->nth(5)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position right top hidden-xs"
                                 src="{{asset('assets/images/hex-red.svg')}}" alt="hex-black" width="120"
                                 height="123" loading="lazy">
                        </li>
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="1700">
                                {{$offers->nth(6)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position left top" src="{{asset('assets/images/hex-black.svg')}}"
                                 alt="hex-black" width="120" height="123" loading="lazy">
                        </li>
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500">
                                {{$offers->nth(7)->first()->title  ?? null}}
                            </div>
                            <img class="hex-position right bottom" src="{{asset('assets/images/hex-black.svg')}}"
                                 alt="hex-black" width="120" height="123" loading="lazy">
                        </li>
                        <li>
                            <div class="hex aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                                {{$offers->nth(8)->first()->title ?? null}}
                            </div>
                            <img class="hex-position left top hidden-xs"
                                 src="{{asset('assets/images/hex-black.svg')}}" alt="hex-black" width="120"
                                 height="123" loading="lazy">
                        </li>
                        <li class="divider aos-init" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1000"></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(isset($albums))
    <section id="sectionGallery">
      <span class="parallax hex top right ">
        <picture>
          <img src="{{asset('assets/images/hex-half-red.png')}}" alt="hex-half-red" height="174"
               width="95" loading="lazy">
        </picture>
      </span>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading text-center">
              <span class="parallax line hidden-xs" style="left:125px; top: -50px;">
                <img src="{{asset('assets/images/line-red-1.svg')}}" alt="line-red-1" height="131"
                     width="227" loading="lazy">
              </span>
                        <h2 data-aos="fade-up" data-aos-duration="1000" class="aos-init">Devices we have on board</h2>
                    </div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="tab">
                            <a aria-controls="Augmented" data-toggle="tab">
                                <h3 class="span">{{App\Enums\Boards::REAL->value}}</h3>
                            </a>
                        </li>
                        <li role="tab" class="active">
                            <a aria-controls="Virtual" data-toggle="tab">
                                <h3 class="span">{{App\Enums\Boards::VIRTUAL->value}}</h3>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="text-white bg-gallery">
      <span class="parallax hex hidden-xs" style="left: 100px; bottom: 15%;">
        <img src="{{asset('assets/images/hex-white-dotted.svg')}}" height="101" width="86"
             alt="hex-white-dotted" loading="lazy">
      </span>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-content">
                        <div class="tab-pane " id="Augmented">
                            <div class="carousel slide" data-bs-ride="carousel" id="carousel2">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($albums->where('board',App\Enums\Boards::REAL->value) as $album)
                                    <div role="option" class="carousel-item item @if($loop->first) active @endif">
                                        <div class="slide-holder">
                                            <div class="image">
                                                <picture>
                                                    <img src="{{asset('storage/'.$album->image)}}" height="227"
                                                         width="488" alt="{{$album->title}}" loading="lazy">
                                                </picture>
                                            </div>
                                            <div class="caption">{{$album->title}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach($albums->where('board',App\Enums\Boards::REAL->value) as $index=>$album)
                                    <li data-bs-target="#carousel2" data-bs-slide-to="{{$index}}" @if($loop->first) class="active" @endif ></li>
                                    @endforeach
                                </ol>
                                <!-- Controls -->
                                <a class="left carousel-control hidden-xs" href="#carousel2" role="button" data-bs-target="#carousel2"
                                   data-bs-slide="prev"></a>
                                <a class="right carousel-control hidden-xs" href="#carousel2" role="button"
                                   data-bs-target="#carousel2" data-bs-slide="next"></a>
                            </div>
                        </div>
                        <div class="tab-pane active" id="Virtual">
                            <div class="carousel slide" data-bs-ride="carousel" id="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($albums->where('board',App\Enums\Boards::VIRTUAL->value) as $album)
                                    <div role="option" class="carousel-item item @if($loop->first) active @endif">
                                        <div class="slide-holder">
                                            <div class="image">
                                                <picture>
                                                    <img src="{{asset('storage/'.$album->image)}}" height="324"
                                                         width="341" alt="{{$album->title}}" loading="lazy">
                                                </picture>
                                            </div>
                                            <div class="caption">{{$album->title}}</div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach($albums->where('board',App\Enums\Boards::VIRTUAL->value) as $index=>$album)
                                    <li data-bs-target="#carousel" data-bs-slide-to="{{$index}}"  @if($loop->first)  class="active" aria-current="true" @endif></li>
                                    @endforeach
                                </ol>
                                <!-- Controls -->
                                <a class="left carousel-control hidden-xs" href="#carousel" data-bs-target="#carousel" role="button"
                                   data-bs-slide="prev"></a>
                                <a class="right carousel-control hidden-xs" href="#carousel" data-bs-target="#carousel" role="button"
                                   data-bs-slide="next"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="heading text-center">
                        <h2 class="h2">Technology behind</h2>
                    </div>
                    <ul class="logos">
                        <li data-aos="fade-up" data-aos-duration="1000" class="aos-init">
                            <picture>

                                <img src="/assets/images/logo-unity.png" alt="logo-unity"
                                     loading="lazy">
                            </picture>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1400" class="aos-init">
                            <picture>

                                <img src="/assets/images/logo-unity.png" alt="logo-u4" loading="lazy">
                            </picture>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1200" class="aos-init">
                            <picture>

                                <img src="/assets/images/logo-unity.png" alt="logo-oculus"
                                     loading="lazy">
                            </picture>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1500" class="aos-init">
                            <picture>

                                <img src="/assets/images/logo-unity.png" alt="logo-opengl"
                                     loading="lazy">
                            </picture>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1300" class="aos-init">
                            <picture>

                                <img src="/assets/images/logo-unity.png" alt="logo-steamvr"
                                     loading="lazy">
                            </picture>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(isset($page4))
        {{--        5,6,7--}}
        <section id="sectionExamples">
      <span class="parallax line hidden-xs" style="bottom: 50px; right: 20px;">
        <img src="{{asset('assets/images/line-red-3.svg')}}" alt="line-red-3" width="153" height="89"
             loading="lazy">
      </span>
            <span class="parallax hex hidden-xs" style="top: 800px; right: 0;">
        <picture>

          <img src="{{asset('assets/images/hex-red-3.png')}}" alt="hex-red-3" width="151" height="271"
               loading="lazy">
        </picture>
      </span>
            <span class="parallax hex top">
        <picture>

          <img src="{{asset('assets/images/hex-black-half.png')}}" alt="hex-black-half" width="84"
               height="157" loading="lazy">
        </picture>
      </span>
            <span class="parallax line centered hidden-xs" style="top: 900px; left: 50%;">
        <img src="{{asset('assets/images/line-red-2.svg')}}" alt="line-red-2" width="140" height="155"
             loading="lazy">
      </span>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="heading text-center aos-init" data-aos="fade-up" data-aos-duration="1000">
              <span class="parallax line  hidden-xs" style="top: 50px; right: 100px;">
                <img src="{{asset('assets/images/line-black-1.svg')}}" alt="line-black-1" width="89"
                     height="155" loading="lazy">
              </span>
                            <h2 class="brand-color">Examples of<br> completed projects</h2>
                        </div>
                        @if(isset($page4))
                            <div class="content-media">
                                <div class="image right aos-init" data-aos="fade-up" data-aos-duration="1000">
                                    <picture>
                                        <img src="{{asset('storage/'.$page4->image)}}" height="451" width="401"
                                             alt="{{$page4->title}}" loading="lazy">
                                    </picture>
                                    <a href="https://youtu.be/Clhwn8N0i4E" class="play bla-1 aos-init aos-animate" data-aos="zoom-in-down"
                                       data-aos-duration="1300"></a>
                                </div>
                                <div class="text aos-init" data-aos="fade-up" data-aos-duration="1300">
                                    <h3 class="h4">{{$page4->title}}</h3>
                                    <p>{{$page4->description}}</p>
                                </div>
                            </div>
                        @endif

                        @if(isset($page5))
                            <div class="content-media">
                                <div class="image aos-init" data-aos="fade-up" data-aos-duration="1000">
                                    <picture>

                                        <img src="{{asset('storage/'.$page5->image)}}" height="451"
                                             width="401" alt="{{$page5->title}}" loading="lazy">
                                    </picture>
                                </div>
                                <div class="text aos-init" data-aos="fade-up" data-aos-duration="1300">
                                    <h3 class="h4">{{$page5->title}}</h3>
                                    <p>{{$page5->description}}</p>
                                </div>
                            </div>
                        @endif

                        @if(isset($page6))
                            <div class="content-media">
                                <div class="image right aos-init" data-aos="fade-up" data-aos-duration="1300">
                                    <picture>

                                        <img src="{{asset('storage/'.$page6->image)}}" height="451"
                                             width="401" alt="{{$page6->title}}" loading="lazy">
                                    </picture>
                                </div>
                                <div class="text aos-init" data-aos="fade-up" data-aos-duration="1000">
                                    <h3 class="h4">{{$page6->title}}</h3>
                                    <p>{{$page6->description}} </p>
                                </div>
                            </div>
                        @endif

                        @if(isset($page7))
                            <div class="content-media">
                                <div class="image aos-init" data-aos="fade-up" data-aos-duration="1000">
                                    <picture>

                                        <img src="{{asset('storage/'.$page7->image)}}" height="451" width="401"
                                             alt="{{$page7->title}}" loading="lazy">
                                    </picture>
                                    <a href="{{$page7->video_url}}" class="play bla-1 aos-init aos-animate" data-aos="zoom-in-down"
                                       data-aos-duration="1300"></a>
                                </div>
                                <div class="text aos-init" data-aos="fade-up" data-aos-duration="1300">
                                    <h3 class="h4">{{$page7->title}}</h3>
                                    <p>{{$page7->description}}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    {{--                <div class="col-sm-8 col-sm-offset-2 text-center aos-init" data-aos="fade-up" data-aos-duration="1000">--}}
                    {{--                    <a class="btn btn-default btn-block load-more" data-bs-toggle="collapse" href="#collapseExample"--}}
                    {{--                       aria-expanded="false" aria-controls="collapseExample">Load more</a>--}}
                    {{--                </div>--}}
                    {{--                <div class="col-sm-12 collapse" id="collapseExample">--}}
                    {{--                    <div class="content-media">--}}
                    {{--                        <div class="image right aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">--}}
                    {{--                            <picture>--}}

                    {{--                                <img src="{{asset('assets/images/img-3-inerio.jpg')}}" height="451" width="401"--}}
                    {{--                                     alt="Origami tutor for epson Moverio Smart Glasses" loading="lazy">--}}
                    {{--                            </picture>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">--}}
                    {{--                            <h3 class="h4">Origami tutor for Epson Moverio Smart Glasses</h3>--}}
                    {{--                            <p>A simple app teaches to make paper origami in simple steps with a full size and side view modes.</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="content-media">--}}
                    {{--                        <div class="image aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">--}}
                    {{--                            <picture>--}}

                    {{--                                <img src="/assets/images/img-3-inerio.jpg" height="451" width="401"--}}
                    {{--                                     alt="Retail warehouse/supermarket AR Application for Sony Smarteyeglass" loading="lazy">--}}
                    {{--                            </picture>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">--}}
                    {{--                            <h3 class="h4">Retail warehouse/supermarket ar application for sony smarteyeglass</h3>--}}
                    {{--                            <p>By scanning a product barcode with built-in camera, a customer can get product details on the glasses--}}
                    {{--                                screen. The system calculates the total price of goods placed in a shopping cart.</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="content-media">--}}
                    {{--                        <div class="image right aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">--}}
                    {{--                            <picture>--}}

                    {{--                                <img src="/assets/images/img-3-inerio.jpg" height="451" width="401"--}}
                    {{--                                     alt="Embedded development for field training helmet" loading="lazy">--}}
                    {{--                            </picture>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">--}}
                    {{--                            <h3 class="h4">Embedded development for field training helmet</h3>--}}
                    {{--                            <p>The helmet is equipped with a camera, GPS sensor, Wi-Fi transmitter, headphones and a microphone--}}
                    {{--                                enabling the instructor to see all the trainee’s actions and to give instructions.</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="content-media">--}}
                    {{--                        <div class="image aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">--}}
                    {{--                            <picture>--}}

                    {{--                                <img src="/assets/images/img-3-inerio.jpg" height="451" width="401"--}}
                    {{--                                     alt="AR checkers" loading="lazy">--}}
                    {{--                            </picture>--}}
                    {{--                        </div>--}}
                    {{--                        <div class="text aos-init aos-animate" data-aos="fade-up" data-aos-duration="1300">--}}
                    {{--                            <h3 class="h4">Augmented reality checkers</h3>--}}
                    {{--                            <p>A proof of concept game built at Sigma Software Research and Development lab with Qualcomm AR SDK for--}}
                    {{--                                Android.</p>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    {{--                </div>--}}
                </div>
            </div>
        </section>
    @endif

    <section id="sectionTeam">
      <span class="parallax hex hidden-xs" style="left :100px; top: -100px;">
        <picture>

          <img src="{{asset('assets/images/hex-dotted-line.png')}}" alt="hex-dotted-line" width="120"
               height="157" loading="lazy">
        </picture>
      </span>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading text-center aos-init" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="brand-color">Say hello to our<br> AR/VR Experts!</h2>
                    </div>
                    <div class="teams">
                        <div class="shadow hex has-hex bottom hidden-xs aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     height="323" width="289" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="199"
                                     alt="Antipov, augmented reality expert" loading="lazy">
                            </picture>
                        </div>
                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="199"
                                     alt="Shuster, augmented and virtual reality product manager" loading="lazy">
                            </picture>
                        </div>
                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="198"
                                     alt="Lisakov, augmented/virtual reality team lead" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex hidden-xs shadow aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     width="289" height="323" loading="lazy">
                            </picture>
                        </div>
                        <div class="hex visible-xs shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     height="323" width="289" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="200"
                                     alt="Ivanychko, AR/VR developer" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex visible-xs shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     height="323" width="289" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="198"
                                     alt="Kovtun, augmented reality and virtual reality software architect" loading="lazy">
                            </picture>
                        </div>
                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="199"
                                     alt="Rebriy, VR/AR developer" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex visible-xs shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     height="323" width="289" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="199"
                                     alt="Timofeev, virtual reality expert" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex visible-xs shadow aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     height="323" width="289" loading="lazy">
                            </picture>
                        </div>
                        <div class="shadow hidden-xs hex aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" alt="hex-white-shadow"
                                     height="323" width="289" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="222" width="199"
                                     alt="Bolbat, AR/VR software developer" loading="lazy">
                            </picture>
                        </div>
                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="222" width="199"
                                     alt="Zheltukhina, AR/VR consultant" loading="lazy">
                            </picture>
                        </div>
                        <div class="hex">
                            <picture>

                                <img src="/assets/images/img-Antipov.png" height="223" width="199"
                                     alt="Golubovich, VR/AR engineer" loading="lazy">
                            </picture>
                        </div>

                        <div class="hex hidden-xs shadow has-hex top right aos-init" data-aos="fade-up" data-aos-duration="1000">
                            <picture>

                                <img src="{{asset('assets/images/hex-white-shadow.png')}}" height="323" width="289"
                                     alt="hex-white-shadow" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(isset($page8))
    <div id="sectionContact" class="flex-row align-middle text-center">
        <div class="video-holder bg-video-holder"
             style="background-image: url({{asset('assets/images/section-2-frame.webp')}}); background-repeat: no-repeat; background-size: cover;">
            <video class="bv-video bg-video"
                   width="640" height="360" loop="" autoplay="" muted="" playsinline=""
                   style="width: 1263.33px; height: 710.623px; margin-top: -195.645px; margin-left: 0px;">
                <source type="video/mp4" src="{{asset('assets/videos/section-2.mp4')}}">
            </video>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading text-white aos-init" data-aos="fade-up" data-aos-duration="1000">
                        <div class="h1">{{$page8->title}}</div>
                    </div>
                    <button class="btn btn-primary aos-init" data-bs-toggle="modal" data-bs-target="#contact-us"
                            data-aos="fade-up" data-aos-duration="1200">{{$page8->btn}}</button>
                </div>
            </div>
        </div>
    </div>
    @endif

    @if(isset($solutions))
    <section id="sectionSolution" class="background-image-lazy">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-white">
                    <div class="heading text-center aos-init" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="h2">We are equipped to build <br> your AR/VR solution</h2>
                    </div>
                    <ul class="list-solution">
                        @foreach($solutions as $solution)
                        <li><span>{{$solution->title}}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if(isset($page9))
    <section id="sectionBanner" class="flex-row align-middle text-center background-image-lazy"
             style="background: url({{asset('assets/images/bg-11@2x.webp')}}) no-repeat 50% 79%/cover;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="heading aos-init" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="h2">{{$page9->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif

</div>


<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/landing-footer.css')}}">


<div class="landing-footer viewport-21" id="landing-footer" data-map-background="#000000"
     data-map-text-color="#ffffff" data-continent-background="#212121" data-chapter="footer"
     data-section-name="additional-information">
    <div class="container">
        <div class="footer-row">
            <div class="footer-col footer-col-left">
                <small class="footer-title">Engineering the future</small>
                <div class="footer-text">
                    <p>Sigma Software provides top-quality software development, graphic design, testing, and support
                        services. Systems we develop deliver benefit to customers in automotive, telecommunications,
                        aviation, advertising, gaming industry, banking, real estate, and healthcare. We have advanced
                        skills and ample resources to create large-scale solutions as well as guide startups from idea
                        to profit.</p>
                </div>
                <div class="footer-copyright">
                    <a href="/terms-of-use">Terms of Use</a><br>
                    <a href="/privacy-notice">Privacy Notice</a>
                    <p>© 2002 - 2023 Sigma Software</p>
                </div>
            </div>
            <div class="footer-map">
                <div class="map-dropdown map-nav-sm">
                    <small>Countries</small>
                    <button class="map-dropdown-toggle" type="button" id="dropdownMap" aria-haspopup="true"
                            aria-label="Open all countries" aria-expanded="false">
                        All
                    </button>
                </div>
            </div>

            <div class="footer-col footer-col-right">
                <small class="footer-title" id="offices-title">ALL OFFICES WORLDWIDE</small>
                <div class="footer-text" id="offices-text">
                    <p>Sigma Software has offices in multiple locations in Europe, Middle East, Northern and Latin America.</p>
                    <p>Our development centers are located at the cities known for their IT education facilities and large IT
                        communities.</p>
                    <small class="footer-title">Get in touch with us</small>
                    <p>Email: <a href="mailto:info@sigma.software"> info@sigma.software</a></p>
                </div>
                <div class="footer-buttons">
                    <div id="footer-btn">
                        <button class="footer-contact-btn popup-link" data-bs-toggle="modal" data-bs-target="#contact-us">Contact
                            us</button>
                    </div>
                    <div class="footer-social">
                        <a href="http://www.facebook.com/pages/Sigma-Ukraine/212892328731329" target="_blank" rel="noreferrer">
                            <i class="f-icon f-icon-footer-fb">facebook</i>
                        </a>
                        <a href="https://twitter.com/sigmaswgroup" target="_blank" rel="noreferrer">
                            <i class="f-icon f-icon-footer-tw">twitter</i>
                        </a>
                        <a href="http://www.linkedin.com/company/68326" target="_blank" rel="noreferrer">
                            <i class="f-icon f-icon-footer-linkedin">linkedin</i>
                        </a>
                        <a href="http://www.youtube.com/user/SigmaUkraine" target="_blank" rel="noreferrer">
                            <i class="f-icon f-icon-footer-youtube">youtube</i>
                        </a>
                        <a href="https://www.instagram.com/sigma_software/" target="_blank" rel="noreferrer">
                            <i class="f-icon f-icon-footer-instagram">instagram</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="contact-us" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="h2 modal-title contact-us-title">Contact us</div>
                <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p class="text-center">
                    Thank you for reaching out to Sigma Software!<br> Please fill the form below. Our team will contact you
                    shortly.
                </p>
                <div class="contact-iframe-container"></div>
            </div>
        </div>
    </div>
</div>



<script src="{{asset('assets/js/bootstrap-5.0.min.js')}}"></script>
<script src="{{asset('assets/js/app.min.js')}}"></script>
<script defer="" src="{{asset('assets/js/landing-footer.js')}}"></script>

</body>

</html>
