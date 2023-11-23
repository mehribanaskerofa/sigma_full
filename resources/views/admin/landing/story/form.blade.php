@extends('admin.layouts.admin',['title'=>'Section Story'])


@section('content')
    <?php  $routeName='admin.story' ?><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset

                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                            <li class="pt-2 px-3"><h3 class="card-title">Title</h3></li>
                            @foreach(config('app.languages') as $langKey)
                                <li class="nav-item ">
                                    <a class="nav-link
                                    {{$loop->first ? ' active ' : '' }}
                                          @error("$langKey.title" ||
                                            "$langKey.description")
                                                 text-danger @enderror"
                                       id="custom-tabs-two-home-tab" data-toggle="pill" href="#title-{{$langKey}}"
                                       role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">
                                        {{\Illuminate\Support\Str::upper($langKey)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            @foreach(config('app.languages') as $index=>$lang)
                                <div class="tab-pane fade {{$loop->first ? ' active show' : '' }}" id="title-{{$lang}}"
                                     role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                                   <div class="row">
                                       <div class="form-group col-12">
                                           <label>Name</label>
                                           <input type="text" placeholder="name {{$lang}}" name="{{$lang}}[name]"
                                                  value="{{old("$lang.name",isset($model) ? ($model->translateOrDefault($lang)->name ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.name")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-8">
                                           <label>Sub Name</label>
                                           <input type="text" placeholder="sub_name {{$lang}}" name="{{$lang}}[sub_name]"
                                                  value="{{old("$lang.sub_name",isset($model) ? ($model->translateOrDefault($lang)->sub_name ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.sub_name")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>



                                       <div class="form-group col-4">
                                           <label>Title 1</label>
                                           <input type="text" placeholder="title1 {{$lang}}" name="{{$lang}}[title1]"
                                                  value="{{old("$lang.title1",isset($model) ? ($model->translateOrDefault($lang)->title1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Tag 1</label>
                                           <input type="text" placeholder="tag1 {{$lang}}" name="{{$lang}}[tag1]"
                                                  value="{{old("$lang.tag1",isset($model) ? ($model->translateOrDefault($lang)->tag1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.tag1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>description 1</label>
                                           <input type="text" placeholder="description1 {{$lang}}" name="{{$lang}}[description1]"
                                                  value="{{old("$lang.description1",isset($model) ? ($model->translateOrDefault($lang)->description1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.description1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>



                                       <div class="form-group col-4">
                                           <label>Title 2</label>
                                           <input type="text" placeholder="title2 {{$lang}}" name="{{$lang}}[title2]"
                                                  value="{{old("$lang.title2",isset($model) ? ($model->translateOrDefault($lang)->title2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Tag</label>
                                           <input type="text" placeholder="tag2 {{$lang}}" name="{{$lang}}[tag2]"
                                                  value="{{old("$lang.tag2",isset($model) ? ($model->translateOrDefault($lang)->tag2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.tag2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-4">
                                           <label>description 2</label>
                                           <input type="text" placeholder="description2 {{$lang}}" name="{{$lang}}[description2]"
                                                  value="{{old("$lang.description2",isset($model) ? ($model->translateOrDefault($lang)->description2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.description2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                   </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        @isset($model->image)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->image)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>Image </label>
                        <input type="file"  name="image" class="form-control">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        @isset($model->icon1)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->icon1)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>icon 1</label>
                        <input type="file"  name="icon1" class="form-control">
                        @error('icon1')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        @isset($model->icon2)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->icon2)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>Icon 2</label>
                        <input type="file"  name="icon2" class="form-control">
                        @error('icon2')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{asset('js/summernote.js')}}"></script>
@endpush
