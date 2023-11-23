@if(isset($datas) && !$datas->isEmpty())

    <section class="section section-our-craft visible">
    <div class="dots-bg dots-15 fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(90deg);">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-content">
            <div class="section-title  fadeInUp">
                <div class="section-title-box heading-underline center">
                    <h2 class="h1 title-text">{{$datas->first()?->name}}</h2>
                    <span class="section-sub-title outlined-big"
                    aria-hidden="true">{{$datas->first()?->sub_name}}</span>
                </div>
            </div>
            <div class="accordion-to-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    @foreach($datas as $index=>$data)
                    <li class="nav-item" role="presentation">
                        <a class="nav-link @if($index==0) active @endif " id="tab_{{$index}}_tab_1"
                        data-toggle="tab" href="#tab_{{$index}}_1" role="tab" aria-controls="tab_{{$index}}_1"
                           aria-selected="true">
                            <span class="nav-link-icon" aria-hidden="true">
                                <img src="{{asset('assets/images/diamonds.svg')}}" alt="">
                            </span>
                            <h3 class="type-btn">{{$data->title}}</h3>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="tab-content accordion" id="accordionToTabsContent_1">
                    @foreach($datas as $index=>$data)
                    <div class="tab-pane fade @if($index==0)  active show @endif " id="tab_{{$index}}_1" role="tabpanel"
                         aria-labelledby="tab_{{$index}}_tab_1" style="min-height: 391px;">
                        <div id="heading_{{$index}}_1" class="card-header" role="button" data-toggle="collapse"
                             data-target="#collapse_{{$index}}_1" aria-expanded="true" aria-controls="collapse_{{$index}}_1">
                                        <span class="pr-3" aria-hidden="true">
                                            <img src="{{asset('assets/images/diamonds.svg')}}" alt="">
                                        </span>
                            <h3 class="type-btn">{{$data->title}}</h3>
                            <div class="collapse-toggle">
                                <img src="{{asset('assets/images/diamonds.svg')}}" alt="">
                            </div>
                        </div>
                        <div id="collapse_{{$index}}_1" class="collapse @if($index==0) show @endif " data-parent="#accordionToTabsContent_1"
                             aria-labelledby="heading_{{$index}}_1">
                            <div class="card-body">
                                <div class="section-fullsize-bg d-none d-md-block">
                                    <picture>

                                        <img alt="A scheme of custom app architecture from an app creation company"
                                             loading="lazy" class="optimized-img-loading"
                                             src="{{asset('storage/'.$data->image)}}">
                                    </picture>
                                </div>
                                <div class="box-text">
                                    <p>{!! $data->description1!!}</p>
                                </div>
                                <div class="box-list">
                                    <div class="h3"> We do:</div>
                                    <ul class="red-dot">
                                       {!! $data->description2 !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endif
