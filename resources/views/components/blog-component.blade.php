@if(count($data)>0)
<div class="breadcrumb-box">
    <div class="container-lg">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href=""> Home </a> </li>
                <li class="breadcrumb-item active" aria-current="page"> {{ \Illuminate\Support\Str::upper($slug)}} </li>
            </ol>
        </nav>
    </div>
</div>
<section class="section section-blog">
    <div class="container-md px-md-0">
        <div class="block-with-sidebar-992">
            <div class="content section-text">
                <h1 class="page-title">{{$data->title}}</h1>
                <div class="section-blog__description description-red-line">
                    <p>{{$data->description1}}</p>
                </div>
                {{$data->description2}}
            </div>
            <div class="sidebar">

                <div class="sidebar-detail-block">
                    <div class="h2 blog-sidebar-h3"> Related cases</div>
                    @foreach($relateds as $related)
                    <a href="" class="case-box">
                        <div class="case-box__logo">
                            <img src="{{asset('storage/'.$related->image)}}"
                                loading="lazy" width="160" height="50" alt="aol logo"></div>
                        <div class="case-box__text"> {{$related->title}}</div>
                    </a>
                    @endforeach
                </div>

                <a class="btn btn-outline-secondary"
                          href="/case-studies?service=cto-services-tech-reviews"> All related cases </a>
            </div>
        </div>
    </div>
    <!-- <script>
    if (document.querySelector('.breadcrumb-box').classList.contains('inverse')) { document.querySelector('.breadcrumb-box').classList.remove('inverse') }
    </script> -->
</section>
@endif
