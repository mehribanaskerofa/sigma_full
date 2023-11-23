<div class=" hover-cards" id="hover-cards">
    <div class="container-inside-main flex-direction-column">
        <h2 class=" mt-50" >{{$statics->where('id',26)->first()->title}}</h2>
        <div class="cards-common d-flex ">
            @foreach($companies as $company)
            <div class="card-main" >
                <a href="{{route('card-index',$company->id)}}" class="card-link">
                    <div class="card-tags content-img" >
                        @foreach($company->options as $option)
                        <span>{{$option->title}} </span>
                        @endforeach
                    </div>
                    <div class="card-location" id="card-location" ><i class="fa-solid fa-location-dot"></i></div>
                    <div class="card" >
                        <div class="hidden-img ">
                            {!! $company->iframe !!}
                        </div>
                        <div class="card-content content-img">
                            <div class="content-img" >
                                <img src="{{asset('storage/'.$company->image)}}" alt="">
                            </div>
                            <h3> {{$company->name}}</h3>
                            <p class="car-circle">
                                <span><i class="fa-solid fa-circle"></i></span> {{$company->context}}
                            </p>
                        </div>

                        <div class="hidden-content down-hidden">
                            {!!  $company->content !!}
                        </div>
                    </div>
                </a>
            </div>
                @endforeach
        </div>
    </div>
</div>
