@if(isset($datas) && !$datas->isEmpty())

    <section class="section section-case-studies-list visible">
    <div class="container-md px-md-0">
        <div class="section-heading fadeInUp delay02">
            <h1 class="h1">Case Studies</h1>
{{--            <button id="show-filter-btn" class="btn-icon btn-icon-filter"--}}
{{--                    aria-label="Open filter" aria-controls="filter" aria-expanded="false">--}}
{{--                <i class="fa-solid fa-bars  "></i>--}}
{{--            </button>--}}
            <div class="tags-choosen d-none">
                <ul class="tag-list">
                    <li class="tag-item "><a
                            class="tag-link small-text tag-link_active flush-current-tag-js" href="#"
                            title="" aria-label=""></a> </li>
                    <li class="tag-item "><button
                            class="tag-link tag-link-text small-text flush-current-tag-js"
                            aria-label="">Clear</button></li>
                </ul>
            </div>
        </div>
        <ul class="case-studies-list fadeInUp delay02">

            @foreach($datas as $data)
            <li class="case-study-item" data-max-page="6">
                <div class="case-study-item-left">
                    <div class="case-study-item-img">
                        <img
                            src="{{asset('storage/'.$data->image)}}"
                            loading="lazy" width="160" height="50" alt="{{$data->title}}">
                    </div>
                    <div class="case-study-item-dots">
                        <svg class="dots dots-22-1" width="45" height="41"
                                                            viewBox="0 0 45 41">
                            <use
                                xlink:href="https://sigma.software/wp-content/themes/ems3/build/project/images/dots/sprite-dots.svg#dots-22-1">
                            </use>
                        </svg>
                    </div>
                </div>
                <div class="case-study-item-right">
                    <h2 class="case-study-item-title heading-underline">
                        <a class="case-study-item-link"
                           href="">{{$data->title}}</a></h2>
                    <div class="case-study-item-text">
                        <p>{!! $data->description !!}</p>
                    </div>
                    <ul class="tag-list tag-list_expandable">
{{--                        <li class="tag-item"> <a class="tag-link small-text "--}}
{{--                                                 href="https://sigma.software/case-studies?industry=blockchain"--}}
{{--                                                 title="#Blockchain" data-taxonomy="case-studies-industry"--}}
{{--                                                 data-term="blockchain" aria-label="">#Blockchain</a> </li>--}}
                        <li class="tag-item">
                            <a class="tag-link small-text "
                                                 href=""
                                                 title="{{$data->title}}" data-taxonomy="{{$data->title}}"
                                                 data-term="{{$data->title}}" aria-label="">{{$data->tags}}</a> </li>
                    </ul>
                </div>
            </li>
            @endforeach

        </ul> <a href="https://sigma.software/case-studies?pagenum=2" data-current-taxonomy=""
                 data-current-term="" data-current-page="1" data-next-page="2" data-max-pages="6"
                 id="case-study-load-more"
                 class="case-studies-action case-studies-trigger btn btn-outline-secondary "> Load more </a>
        <div id="desktop-pagination-wrapper">
            <div>
                <ul class="pagination mt-4">
                    <li><a class="current" href="https://sigma.software/case-studies">1</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=2">2</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=3">3</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=4">4</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=5">5</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=6">6</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=2">
                            <svg width="14" height="14"
                                                                                      viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 7 5 11.5V13l6-6-6-6v1.5z" fill="currentColor"
                                      fill-rule="evenodd"></path>
                            </svg> </a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=6"> <svg width="22" height="14"
                                                                                      viewBox="0 0 22 14" xmlns="http://www.w3.org/2000/svg">
                                <g fill="currentColor" fill-rule="evenodd">
                                    <path d="M17.5 7 13 11.5V13l6-6-6-6v1.5zM9.5 7 5 11.5V13l6-6-6-6v1.5z">
                                    </path>
                                </g>
                            </svg> </a></li>
                </ul>
            </div>
        </div>
        <div id="mobile-pagination-wrapper">
            <div>
                <ul class="pagination mt-4">
                    <li><a class="current" href="https://sigma.software/case-studies">1</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=2">2</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=3">3</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=4">...</a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=2"> <svg width="14" height="14"
                                                                                      viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 7 5 11.5V13l6-6-6-6v1.5z" fill="currentColor"
                                      fill-rule="evenodd"></path>
                            </svg> </a></li>
                    <li><a href="https://sigma.software/case-studies?pagenum=6"> <svg width="22" height="14"
                                                                                      viewBox="0 0 22 14" xmlns="http://www.w3.org/2000/svg">
                                <g fill="currentColor" fill-rule="evenodd">
                                    <path d="M17.5 7 13 11.5V13l6-6-6-6v1.5zM9.5 7 5 11.5V13l6-6-6-6v1.5z">
                                    </path>
                                </g>
                            </svg> </a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endif
