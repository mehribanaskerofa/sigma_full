@if(isset($datas) && !$datas->isEmpty())

    <section class="section section-app-dev visible">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -20px;left: 0px;transform: scale(2) rotate(0deg);">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: 0px;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-title  fadeInUp delay02">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">{{$datas->first()?->name  }}</h2> <span
                    class="section-sub-title outlined-big" aria-hidden="true">{{$datas->first()?->sub_name }}</span>
            </div>
        </div>
        <div class="tile-flat-holder def-serction">
            @foreach($datas as $data)
            <div class="tile-flat-box">
                <div class="tile-box-icon">
                    <object class="decor-icon" data="{{asset('storage/'.$data->icon)}}" width="70" height="70"
                            role="img" aria-label="Logo"></object>
                </div>
                <div class="tile-box-heading">
                    <h3 class="h2 h2-lg heading-underline center">{{$data->title}}</h3>
                </div>
                <div class="tile-box-content">
                    <p>{!!  $data->description1 !!}</p>
                    <p>{!!  $data->description2 !!}</p>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>

@endif
