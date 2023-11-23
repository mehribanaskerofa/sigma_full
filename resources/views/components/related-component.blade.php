<section class="section section-related-services visible">
    <div class="dots-bg fadeIn delay02">
    </div>
    <div class="container-lg">
        <div class="section-title no-height">
            <div class="section-title-box heading-underline center">
                <h2 class="h1 title-text">Related services</h2> <span class="section-sub-title outlined-big"
                                                                      aria-hidden="true"></span>
            </div>
        </div>
        <div class="fadeInUp delay05">
            <div class="tile-flip-holder row three-pack">
                @foreach($relateds as $related)
                <div class="col-12 col-md-4 px-0"> <a href="{{ url($related->url ?? '') }}"
                                                      class="tile-flip-box tile-flip-box_sm">
                        <div class="visible-box-link">
                            <h3 class="h3">{{$related->name}}</h3>
                        </div>
                        <div class="hide-box">
                            <div class="hide-box-inner"> {!!  $related->description !!}<br>
                                <span class="text-link">Read   More</span></div>
                        </div>
                    </a></div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
