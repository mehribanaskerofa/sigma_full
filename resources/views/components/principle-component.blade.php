@if(!$data->isEmpty())
<section class="section section-principles visible">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -100px;left: -180px;transform: scale(2) rotate(0deg);z-index: -40;">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: 0px;right: -170px;transform: scale(2) rotate(0deg);z-index: -40;">
    </div>
    <div class="container-md px-md-0">
        <div class="section-title  fadeInUp ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text"> {{$data->name}}</h2>
                <span class="section-sub-title outlined-big"
                aria-hidden="true"> {{$data->sub_name}} </span>
            </div>
            <div class="section-title__text"> {{$data->description}}</div>
        </div>
        <div class="fadeInUp delay05 principles__container">
            <div class="principles__card">
                <div class="principles__img">
                    <picture class="for-img" style="--ratio: 310/190;">
                        <img alt="{{$data->title1}}" loading="lazy" class="optimized-img-loading"
                             src="{{asset('storage/'.$data->image1)}}">
                    </picture>
                </div>
                <div class="principles__title h3 heading-underline center"> {{$data->title1}}</div>
            </div>
            <div class="principles__card">
                <div class="principles__img">
                    <picture class="for-img" style="--ratio: 310/190;">
                        <img alt="{{$data->title2}}" loading="lazy" class="optimized-img-loading"
                             src="{{asset('storage/'.$data->image2)}}">
                    </picture>
                </div>
                <div class="principles__title h3 heading-underline center"> {{$data->title2}}</div>
            </div>
            <div class="principles__card">
                <div class="principles__img">
                    <picture class="for-img" style="--ratio: 310/190;">
                        <img alt="{{$data->title3}}" loading="lazy" class="optimized-img-loading"
                             src="{{asset('storage/'.$data->image3)}}">
                    </picture>
                </div>
                <div class="principles__title h3 heading-underline center"> {{$data->title3}}</div>
            </div>
        </div>
    </div>
</section>
@endif
