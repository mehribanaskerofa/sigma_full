@extends('admin.layouts.admin',['title'=>'Section Media'])


@section('content')
    <?php  $routeName='admin.team-media' ?><br>
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
                                       <div class="form-group col-6">
                                           <label>Name</label>
                                           <input type="text" placeholder="name {{$lang}}" name="{{$lang}}[name]"
                                                  value="{{old("$lang.name",isset($model) ? ($model->translateOrDefault($lang)->name ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.name")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-6">
                                           <label>Sub Name</label>
                                           <input type="text" placeholder="sub_name {{$lang}}" name="{{$lang}}[sub_name]"
                                                  value="{{old("$lang.sub_name",isset($model) ? ($model->translateOrDefault($lang)->sub_name ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.sub_name")
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
                    <div class="form-group col-3">
                        @isset($model->image)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->image)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>Image</label>
                        <input type="file"  name="image" class="form-control">
                        @error('image')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group col-4">
                        <label>Title sub 1</label>
                        <input type="text" placeholder="title1 " name="sub_title1"
                               value="{{old("sub_title1",isset($model) ? ($model->sub_title1 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title1")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 2</label>
                        <input type="text" placeholder="title2" name="sub_title2"
                               value="{{old("sub_title2",isset($model) ? ($model->sub_title2 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title2")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 3</label>
                        <input type="text" placeholder="title3" name="sub_title3"
                               value="{{old("sub_title3",isset($model) ? ($model->sub_title3 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title3")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 4</label>
                        <input type="text" placeholder="title4" name="sub_title4"
                               value="{{old("sub_title4",isset($model) ? ($model->sub_title4 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title4")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 5</label>
                        <input type="text" placeholder="title5" name="sub_title5"
                               value="{{old("sub_title5",isset($model) ? ($model->sub_title5 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title5")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 6</label>
                        <input type="text" placeholder="title6" name="sub_title6"
                               value="{{old("sub_title6",isset($model) ? ($model->sub_title6 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title6")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 7</label>
                        <input type="text" placeholder="title7" name="sub_title7"
                               value="{{old("sub_title7",isset($model) ? ($model->sub_title7 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title7")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 8</label>
                        <input type="text" placeholder="title8" name="sub_title8"
                               value="{{old("sub_title8",isset($model) ? ($model->sub_title8 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title8")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 9</label>
                        <input type="text" placeholder="title9" name="sub_title9"
                               value="{{old("sub_title9",isset($model) ? ($model->sub_title9 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title9")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Title sub 10</label>
                        <input type="text" placeholder="title10" name="sub_title10"
                               value="{{old("sub_title10",isset($model) ? ($model->sub_title10 ?? '') : '')}}"
                               class="form-control">
                        @error("sub_title10")
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
