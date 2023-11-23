@if(isset($news))
<section class="section section-news dots-holder">
    <div class="dots-bg fadeIn delay02">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400" style="position: absolute; top: -40px;left: -115px;transform: scale(2) rotate(0deg); ">
        <img src="{{asset('assets/images/dot2.svg')}}" alt="" width="300" height="400" style="position: absolute; bottom: 0;right: -200px;transform: scale(2) rotate(180deg);">
    </div>
    <div class="container-md">
        <div class="section-title ">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">İSTİ XƏBƏRLƏR</h2>
                <span class="section-sub-title outlined-big" aria-hidden="true">XƏBƏRLƏR</span>
            </div>
        </div>
        <div class="row">
            <div class="col-auto ml-auto">
                <a class="go-to-news-page btn text-link-big "
                    href="/about/media"> <span>More News</span>
                    <i class="fa-solid fa-arrow-right-long"></i>
{{--                    <i class="fa-solid fa-arrow-right-long"></i>--}}
                </a>
            </div>
        </div>
        <div class="articles-list news-featured">
            <div class="card-group">
                @foreach($news as $new)
                <div class="card">
                    <div class="card-inner">
                        <a href=""
                            class="card-img-holder">
                            <picture>
                                <img alt="{{$new->title}}" loading="lazy"
                                     src="{{asset('storage/'.$new->image)}}">
                            </picture>
                        </a>
                        <a href=""
                            class="card-body">
                            <div class="h3 heading-underline">{{$new->title}}</div>
                            <p class="card-date small-text"> <time datetime="{{$new->created_at}}">{{$new->created_at}}</time> </p>
                            <p>{{implode(' ', array_slice(str_word_count(strip_tags($new->description), 1), 0, 15))}}...</p>
                            <span class="card-arrow"><i class="fa-solid fa-arrow-right-long"></i></span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <a href="/about/media" class="more-news-btn btn btn-outline-secondary btn-block d-lg-none">More News</a>
    </div>
</section>
@endif
