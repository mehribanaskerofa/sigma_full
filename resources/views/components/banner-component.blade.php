@if(isset($data))
    <section class="section section-red-banner red-banner-lifecycle inverse visible">
        <div class="section-fullsize-bg section-fullsize-bg-lifecycle">
            <picture>

                <img alt="Man is outlining outsourcing cybersecurity adoption process on the chart board"
                     class="optimized-img-loading" loading="lazy"
                     src="{{asset('assets/images/service-app-development-steps-1440-1440x968.jpg.webp')}}">
            </picture>
        </div>
        <div class="dots-bg fadeIn delay02">
            <img src="{{asset('assets/images/dot1.svg')}}" alt="" width="300" height="400"
                 style="position: absolute; top: -40px;left: -215px;transform: scale(2);">
            <img src="{{asset('assets/images/dot1.svg')}}" alt="" width="300" height="400"
                 style="position: absolute; top: 0;right: -200px;transform: scale(2) rotate(180deg);">

        </div>
        <div class="container-lg">
            <div class="section-title inverse fadeInUp">
                <div class="section-title-box heading-underline center">
                    <h2 class="h1 title-text">{{$data->name}}</h2> <span
                        class="section-sub-title outlined-big" aria-hidden="true">{{$data->sub_name}}</span>
                </div>
            </div>
            <div class="lifecycle-steps-wrapper">
                <div class="lifecycle-step-card">
                    <div class="lifecycle-step-header heading-underline" data-toggle="collapse" role="button"
                         data-target="#stepCard_01" aria-expanded="false" aria-controls="stepCard_01">
                        <div class="heading-box">
                            <div class="lifecycle-step-number">
                                01
                            </div>
                            <h3 class="h2">{{$data->title1}}</h3>
                        </div>
                        <div class="collapse-toggle">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="lifecycle-step-content collapse" id="stepCard_01">
                        <div class="step-brief"> {{$data->text1}}</div>
                        <div class="list-diamonds">
                            <div class="list-diamonds-brief">{{$data->sub_title1}}:</div>
                            <ul>
                               {!! $data->description1 !!}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lifecycle-step-card">
                    <div class="lifecycle-step-header heading-underline" data-toggle="collapse" role="button"
                         data-target="#stepCard_02" aria-expanded="false" aria-controls="stepCard_02">
                        <div class="heading-box">
                            <div class="lifecycle-step-number">
                                02
                            </div>
                            <h3 class="h2">{{$data->title2}}</h3>
                        </div>
                        <div class="collapse-toggle">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="lifecycle-step-content collapse" id="stepCard_02">
                        <div class="step-brief"> {{$data->text2}}</div>
                        <div class="list-diamonds">
                            <div class="list-diamonds-brief">{{$data->sub_title2}}:</div>
                            <ul>
                               {!! $data->description2 !!}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lifecycle-step-card">
                    <div class="lifecycle-step-header heading-underline" data-toggle="collapse" role="button"
                         data-target="#stepCard_03" aria-expanded="false" aria-controls="stepCard_03">
                        <div class="heading-box">
                            <div class="lifecycle-step-number">
                                03
                            </div>
                            <h3 class="h2">{{$data->title3}}</h3>
                        </div>
                        <div class="collapse-toggle">
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div class="lifecycle-step-content collapse" id="stepCard_03">
                        <div class="step-brief"> {{$data->text3}}</div>
                        <div class="list-diamonds">
                            <div class="list-diamonds-brief">{{$data->sub_title}}:</div>
                            <ul>
                               {!! $data->description !!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
