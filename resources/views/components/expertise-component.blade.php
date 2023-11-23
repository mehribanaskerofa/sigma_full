@if(isset($exps))
<section class="section section-expertise dots-holder visible">
    <div class="section-fullsize-bg d-none d-md-block">
        <picture>

            <img alt="Misty mountains"
                 src="{{asset('assets/images/dag.jpg')}}"
                 loading="lazy">
        </picture>
    </div>
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -40px;left: -115px;transform: scale(2) rotate(0deg); ">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">

    </div>
    <div class="container-lg">
        <div class="section-title  ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">Expertise We Deliver</h2> <span class="section-sub-title outlined-big"
                                                                          aria-hidden="true">Expertise</span>
            </div>
        </div>
        <div class="tile-bg-holder row">

            @foreach($exps as $exp)
            <div class="tile-bg-box show-bg-hover fadeInUp @if($index=1) delay02 @endif @if($index=2) delay03 @endif">
                <div class="content-animation">
                    <picture>
                        <img alt="{{$exp->title}}" loading="lazy" width="380" height="300"
                             src="{{asset('storage/'.$exp->image)}}">
                    </picture>
                    <div class="text-box"> <a href="javascript:void(0)" class="text-box-link">
                            <h3 class="text-box-title heading-underline center">{{$exp->title}}</h3>
                            <p>{{$exp->sub_title}}</p>
                        </a></div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
@endif
