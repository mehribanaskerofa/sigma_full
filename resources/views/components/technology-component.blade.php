<section class="section section-technologies inverse visible">
    <div class="section-fullsize-bg">
        <picture>
            <img alt="" loading="lazy" class="optimized-img-loading"
                 src="{{asset('assets/images/red-tech.webp')}}">
        </picture>
    </div>
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -40px;left: -115px;transform: scale(2) rotate(0deg); ">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-title  fadeInUp">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">ÇALIŞDIĞIMIZ TEXNOLOGİYALAR</h2> <span
                    class="section-sub-title outlined-big" aria-hidden="true">Technologies</span>
            </div>
        </div>
        <div class="fadeInUp delay05">
            <div class="grid-technologies">

                @foreach($datas as $data)
                <div class="grid-technologies-item">
{{--                    <object--}}
{{--                        data="https://cdn.sigma.software/wp-content/themes/ems3/build/project/images/technologies/dot-net.svg"--}}
{{--                        width="70" height="70" type="image/svg+xml" role="img" aria-label="Logo">--}}

{{--                    </object>--}}
                    <img src="{{asset('storage/'.$data->image)}}" width="70" height="70" aria-label="Logo">
                    <div class="grid-technologies-item-name"> {{$data->title}}</div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</section>
