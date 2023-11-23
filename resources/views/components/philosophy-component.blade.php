@if(isset($data))

    <section class="section section-philosophy visible">
    <div class="section-fullsize-bg d-none d-md-block">
        <picture>
            <img alt="Snow-covered mountains" loading="lazy" class="optimized-img-loading"
                 src="{{asset('assets/images/1440.jpg')}}">
        </picture>
    </div>
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -40px;left: -115px;transform: scale(2) rotate(180deg); ">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-title  fadeInUp">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">{{$data->name}}</h2> <span
                    class="section-sub-title outlined-big" aria-hidden="true">{{$data->sub_name}}</span>
            </div>
        </div>
        <div class="component-toggle fadeIn delay02">
            <a class="dropdown-toggle" data-toggle="collapse"
            href="#cardsTransparentContainer" role="button" aria-expanded="false"
            aria-controls="cardsTransparentContainer">
                <i class="fa-solid fa-chevron-down"></i>
            </a></div>
        <div class="component-container collapse " id="cardsTransparentContainer">
            <div class="cards-transparent-wrapper">
                <div class="card-transparent">
                    <h3 class="h2 heading-underline">{{$data->title1}}</h3>
                    <ul class="red-dot">
                        {!! $data->description1 !!}
                    </ul>
                </div>
                <div class="card-transparent">
                    <h3 class="h2 heading-underline">{{$data->title2}}</h3>
                    <ul class="red-dot">
                        {!! $data->description2 !!}
                    </ul>
                </div>
                <div class="card-transparent">
                    <h3 class="h2 heading-underline">{{$data->title3}}</h3>
                    <ul class="red-dot">
                        {!! $data->description3 !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endif
