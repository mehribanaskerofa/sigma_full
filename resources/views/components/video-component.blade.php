@if(isset($videos))
<section class="section section-testimonials dots-holder" id="feedback-anchor">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -40px;left: -115px;transform: scale(2) rotate(180deg); ">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-title ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">REFERANSLAR</h2>
                <span class="section-sub-title outlined-big" aria-hidden="true">REFERANSLAR</span>
            </div>
        </div>
        <div class="video-testimonials fadeInUp show">
            <div class="video-box">
                <div class="video-box-inner">
                    <picture>
                        <img class="video-box-item" alt="Video testimonial preview" loading="lazy"
                             src="{{$videos->first()->image}}">
                    </picture>
                    <iframe class="video-box-item" src="about:blank"
                                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                      allowfullscreen=""></iframe>
                </div>
                <button type="button" class="hexagon-button play-btn-js"
                               data-title="{{$videos->first()->title}}" data-id="70oIR0l_9PE">
                    <small class="sr-only">Play video  testimonial</small>
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                                 viewBox="0 0 80 80">
                        <g fill="none" fill-rule="evenodd">
                            <path d="M0 0H80V80H0z"
                                  transform="translate(-254 -3939) translate(24 3451) translate(0 355) translate(230 133)">
                            </path>
                            <g fill="#FFF">
                                <path fill-rule="nonzero"
                                      d="M54.581-.005H25.418c-3.84 0-7.39 2.049-9.31 5.375L1.528 30.625c-1.92 3.326-1.92 7.424 0 10.75L16.11 66.63c1.92 3.326 5.47 5.375 9.31 5.375h29.163c3.84 0 7.39-2.049 9.31-5.375l14.58-25.255c1.92-3.326 1.92-7.424 0-10.75L63.89 5.37c-1.92-3.326-5.47-5.375-9.31-5.375zm-29.163 1.5h29.163c3.305 0 6.358 1.763 8.01 4.625l14.581 25.255c1.653 2.862 1.653 6.388 0 9.25L62.592 65.88c-1.652 2.862-4.705 4.625-8.01 4.625H25.419c-3.305 0-6.358-1.763-8.01-4.625L2.828 40.625c-1.653-2.862-1.653-6.388 0-9.25L17.408 6.12c1.652-2.862 4.705-4.625 8.01-4.625z"
                                      transform="translate(-254 -3939) translate(24 3451) translate(0 355) translate(230 133) translate(0 4)">
                                </path>
                                <path d="M43.056 27.575L53.811 45.909 32.3 45.909z"
                                      transform="translate(-254 -3939) translate(24 3451) translate(0 355) translate(230 133) translate(0 4) rotate(90 43.056 36.742)">
                                </path>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
            <div class="video-thumbs" data-simplebar="init" style="height: 447.667px;">
                <div class="simplebar-wrapper" style="margin: -15px 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                                <div class="simplebar-content" style="padding: 15px 0px;">
                                    @foreach($videos as $video)
                                    <a href="" class="video-thumb play-btn-js "
                                            data-title="{{$video->title}}"
                                            data-id="70oIR0l_9PE">
                                        <div class="img bg-prop"
                                             style="background-image: url({{asset('storage/'.$video->image)}})">
                                        </div>
                                        <div class="text"> <span>{{$video->title}}</span>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: auto; height: 442px;"></div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar simplebar-visible"
                         style="width: 0px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                    <div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
