@if(isset($data))
<div class="nav-featured-box fadeIn visible">
    <div class="h4">{{$data->title}}</div>
    <div class="collapse" id="featuresNav">
        <div class="nav-featured-list">
            <div class="nav-featured">
                <i class="fa-regular fa-circle-dot"></i>
                <span>{{$data->title1}}</span>
            </div>
            <div class="nav-featured">
                <i class="fa-regular fa-circle-dot"></i>
                <span>{{$data->title2}}</span>
            </div>
            <div class="nav-featured">
                <i class="fa-regular fa-circle-dot"></i>
                <span>{{$data->title3}}</span>
            </div>
        </div>
    </div><a class="dropdown-toggle" data-toggle="collapse" href="#featuresNav" role="button"
             aria-expanded="false" aria-controls="featuresNav">
        <i class="fa-solid fa-chevron-down"></i>
    </a>
</div>
@endif
