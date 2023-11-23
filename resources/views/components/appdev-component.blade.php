@if(isset($datas) && !$datas->isEmpty())
    @foreach($datas as $data)
        <section class="section section-app-dev salam-m visible">
            <div class="dots-bg fadeIn delay02">
                <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
                     style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(0deg);">
                <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
                     style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(0deg);">
            </div>
            <div class="container-lg">
                <div class="section-title  fadeInUp ">
                    <div class="section-title-box heading-underline center">
                        <h2 class="h1 title-text"> {{$datas->first()->name}}</h2> <span
                            class="section-sub-title outlined-big"
                            aria-hidden="true">  {{$datas->first()->sub_name}} </span>
                    </div>
                </div>
                <div class="accordion-to-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        @foreach($datas as $index=>$data1)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tab_{{$index}}_tab"
                                   data-toggle="tab" href="#tab_{{$index}}" role="tab" aria-controls="tab_{{$index}}"
                                   aria-selected="true"> <span class="nav-link-icon" aria-hidden="true">
                                        <img src="{{asset('assets/images/diamonds.svg')}}" alt="">
                                    </span>
                                    <h3 class="type-btn"> {{$data1->title1}}</h3>
                                </a></li>
                        @endforeach
                    </ul>


                    <div class="tab-content accordion" id="accordionToTabsContent">
                        @foreach($datas as $index=>$data1)
                            <div class="tab-pane fade active show" id="tab_{{$index}}" role="tabpanel"
                                 aria-labelledby="tab_{{$index}}_tab" style="min-height: 574px;">
                                <div id="heading_{{$index}}" class="card-header" role="button" data-toggle="collapse"
                                     data-target="#collapse_{{$index}}" aria-expanded="true"
                                     aria-controls="collapse_{{$index}}"> <span
                                        class="card-header-icon" aria-hidden="true">
                                        <img src="{{asset('assets/images/diamonds.svg')}}" alt="">
                                    </span>

                                    <h3 class="type-btn">{{$data->title1}}</h3>
                                    <div class="collapse-toggle">
                                        <i class="fa-solid fa-chevron-down"></i>
                                    </div>
                                </div>
                                <div id="collapse_{{$index}}" class="collapse @if($index==0) active show @endif "
                                     aria-labelledby="heading_{{$index}}"
                                     data-parent="#accordionToTabsContent">
                                    <div class="card-body">
                                        <div class="box-description">
                                            <p>{!!  $data->description1 !!}</p>

                                        </div>
                                        <div class="box-grid">
                                            <div class="tile-flip-holder row">
                                                <div class="col-12 col-md-6 px-0">
                                                    <div class="tile-flip-box tile-flip-box_sm">
                                                        <div class="visible-box-link">
                                                            <h4 class="h3"> {{$data->title2}}</h4>
                                                        </div>
                                                        <div class="hide-box">
                                                            <div class="hide-box-inner"> {{ Str::limit($data->description2,100)}} <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 px-0">
                                                    <div class="tile-flip-box tile-flip-box_sm">
                                                        <div class="visible-box-link">
                                                            <h4 class="h3"> {{$data->title3}}</h4>
                                                        </div>
                                                        <div class="hide-box">
                                                            <div class="hide-box-inner"> {{ Str::limit($data->description3,100)}}
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 px-0">
                                                    <div class="tile-flip-box tile-flip-box_sm">
                                                        <div class="visible-box-link">
                                                            <h4 class="h3"> {{$data->title4}}</h4>
                                                        </div>
                                                        <div class="hide-box">
                                                            <div class="hide-box-inner"> {{ Str::limit($data->description4,100)}} <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 px-0">
                                                    <div class="tile-flip-box tile-flip-box_sm">
                                                        <div class="visible-box-link">
                                                            <h4 class="h3"> {{$data->title5}}</h4>
                                                        </div>
                                                        <div class="hide-box">
                                                            <div class="hide-box-inner">{{ Str::limit($data->description5,100)}}<br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 px-0">
                                                    <div class="tile-flip-box tile-flip-box_sm">
                                                        <div class="visible-box-link">
                                                            <h4 class="h3"> {{$data->title6}}</h4>
                                                        </div>
                                                        <div class="hide-box">
                                                            <div class="hide-box-inner"> {{ Str::limit($data->description6,100)}} <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 px-0">
                                                    <div class="tile-flip-box tile-flip-box_sm">
                                                        <div class="visible-box-link">
                                                            <h4 class="h3">{{$data->title7}}</h4>
                                                        </div>
                                                        <div class="hide-box">
                                                            <div class="hide-box-inner"> {{ Str::limit($data->description7,100)}}
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endif
