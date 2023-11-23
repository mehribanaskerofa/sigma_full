@if(isset($datas) && !$datas->isEmpty())

    <section class="section section-faq visible">
    <div class="dots-bg dots-13 fadeIn delay02">

        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; top: -40px;left: -115px;transform: scale(2) rotate(0deg); ">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400"
             style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-lg">
        <div class="section-content">
            <div class="section-title  fadeInUp ">
                <div class="section-title-box heading-underline center">
                    <h2 class="h1 title-text"> {{$datas->first()?->name}}</h2>
                    <span
                        class="section-sub-title outlined-big" aria-hidden="true">{{$datas->first()?->sub_name}}</span>
                </div>
            </div>
            <div class="accordion fadeInUp delay02" id="accordionExample">
                @foreach($datas as $index=>$data)
                <div class="accordion__card">
                    <div class="accordion__header collapsed" id="heading{{$index}}" role="button"
                         data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="false"
                         aria-controls="collapse{{$index}}">
                        <h3 class="h3 heading-underline">{{$data->title}}</h3>
                    </div>
                    <div id="collapse{{$index}}" class="accordion__collapse collapse" aria-labelledby="heading{{$index}}"
                         data-parent="#accordionExample">
                        <div class="accordion__body">
                            <p>{!!  $data->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<div class="section-spacer-sm"></div>

@endif
