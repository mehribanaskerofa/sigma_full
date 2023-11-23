<div class="other-projects-container">
    <div class="other-projects">
        <h2>{{$statics->where('id',23)->first()->title}}</h2>
        <div class="project-cards">
            @foreach($companies as $company)
            <div class="project-card">
                <div class="tags">
                    @foreach($company->options as $option)
                    <div class="v-tag"> <span class="p3 medium v-tag__label">{{$option->title}}</span> <!----></div>
                    @endforeach
                </div>

                <div class="image-container">
                    <img src="{{asset('storage/'.$company->image)}}" alt="">
                </div>
                <div class="other-info">
                    <h3>{{$company->name}}</h3>
                    <ul class="metro-wrap">
                        <li style="margin-right: 5px;">{{$company->context}} </li>
                    </ul>
                    <div class="count">
                        <p>{{$company->house_count}} {{$statics->where('id',24)->first()->title}}</p>
                        <p>{{$company->block_count}} {{$statics->where('id',25)->first()->title}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
