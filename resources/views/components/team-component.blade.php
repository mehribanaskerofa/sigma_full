@if(!$datas->isEmpty())
<div class="breadcrumb-box ">
    <div class="container-md px-md-0">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"> <a href="https://sigma.software"> Home </a> </li>
                <li class="breadcrumb-item active" aria-current="page"> {{ \Illuminate\Support\Str::upper($slug)}} </li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-md px-md-0">
    <section class="section section-blog-distribution-hero">
        <div class="row">
            <div class="col-lg">
                <div class="blog-distribution-hero-inner">
                    <h1 class="blog-distribution-hero-title"> Management Team and Board of Directors</h1>
                    <div class="blog-distribution-hero-text"> Meet our leadership board, founders, officers,
                        directors, and department managers, who lead superior software development &amp;
                        top-notch IT services in our company</div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="container-md px-md-0">
    <section class="filters-heads">
        <div class="scrolled-heads nav" id="nav-tab" role="tablist">
            @foreach($datas as $team=>$data)
                @php $tab=\Illuminate\Support\Str::slug($team) @endphp
            <a class="nav-item @if($loop->first) active @endif " id="{{$tab}}-tab" data-toggle="tab" href="#{{$tab}}Board" role="tab"
            aria-controls="{{$tab}}Board" aria-selected="@if($loop->first) true @else false @endif">
                <h2 class="h4">{{\Illuminate\Support\Str::ucfirst($team)}}</h2>
            </a>
            @endforeach
        </div>
    </section>
    <section class="tab-content">
        @foreach($datas as $team=>$teams)
            @php $tab=\Illuminate\Support\Str::slug($team) @endphp
        <div class="board tab-pane fade @if($loop->first) show active @endif " id="{{$tab}}Board" role="tabpanel"
             aria-labelledby="{{$tab}}-tab">

            @foreach($teams as $team)
            <div class="board__card">
                <div class="board__card-img">
                    <picture>
                        <img alt="{{$team->role}}" class="optimized-img-loading"
                             src="{{$team->image}}">
                    </picture>
                </div>
                <div class="board__card-name h3"> {{$team->fullname}}</div>
                <div class="board__card-role heading-underline"> {{$team->role}}</div>
                <a class="board__card-linkedin" target="_blank"
                   href="{{$team->in_url}}"> Linkedin profile </a>
            </div>
            @endforeach

        </div>
        @endforeach
        <div class="board tab-pane fade" id="directorsBoard" role="tabpanel" aria-labelledby="directors-tab">
            <div class="board__card">
                <div class="board__card-img">
                    <picture>
                        <source type="image/webp"
                                srcset="https://cdn.sigma.software/wp-content/smush-webp/2021/09/bod-carl-vikingsson@2x-300x300.jpg.webp 1x, https://cdn.sigma.software/wp-content/smush-webp/2021/09/bod-carl-vikingsson@2x-300x300.jpg.webp 2x">
                        <source type="image/jpeg"
                                srcset="https://cdn.sigma.software/wp-content/uploads/2021/09/bod-carl-vikingsson@2x-300x300.jpg 1x, https://cdn.sigma.software/wp-content/uploads/2021/09/bod-carl-vikingsson@2x-300x300.jpg 2x">
                        <img alt="Carl Vikingsson, Chairman of the Board, CEO at Sigma Technology Group AB"
                             class="optimized-img-loading"
                             src="https://cdn.sigma.software/wp-content/themes/ems3/build/project/images/1x1.png"
                             data-src="https://cdn.sigma.software/wp-content/uploads/2021/09/bod-carl-vikingsson@2x-300x300.jpg">
                    </picture>
                </div>
                <div class="board__card-name h3"> CARL VIKINGSSON</div>
                <div class="board__card-role heading-underline"> Chairman of the Board, Sigma Software
                    Group, CEO at Sigma Technology Group AB</div>
            </div>
        </div>
        <div class="board tab-pane fade" id="extraBoard" role="tabpanel" aria-labelledby="extra-tab">
            <div class="board__card">
                <div class="board__card-img">
                    <picture>
                        <source type="image/webp"
                                srcset="https://cdn.sigma.software/wp-content/smush-webp/2022/05/management-hanna-abdel-hamid@2x-300x300.jpg.webp 1x, https://cdn.sigma.software/wp-content/smush-webp/2022/05/management-hanna-abdel-hamid@2x-300x300.jpg.webp 2x">
                        <source type="image/jpeg"
                                srcset="https://cdn.sigma.software/wp-content/uploads/2022/05/management-hanna-abdel-hamid@2x-300x300.jpg 1x, https://cdn.sigma.software/wp-content/uploads/2022/05/management-hanna-abdel-hamid@2x-300x300.jpg 2x">
                        <img alt="Hanna Abdel Hamid" class="optimized-img-loading"
                             src="https://cdn.sigma.software/wp-content/themes/ems3/build/project/images/1x1.png"
                             data-src="https://cdn.sigma.software/wp-content/uploads/2022/05/management-hanna-abdel-hamid@2x-300x300.jpg">
                    </picture>
                </div>
                <div class="board__card-name h3"> HANNA ABDEL HAMID</div>
                <div class="board__card-role heading-underline"> Regional Director and Head of Sigma
                    Software Canada</div> <a class="board__card-linkedin" target="_blank"
                                             href="https://www.linkedin.com/in/hanna-abdel-hamid-mba-c-adm-c-m-c-45409b51/"> Linkedin
                    profile </a>
            </div>
        </div>
    </section>
</div>
@endif
