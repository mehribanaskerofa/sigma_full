@extends('admin.layouts.admin',['title'=>'Section principle'])


@section('content')
    <?php  $routeName='admin.principle' ?><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset
                <div class="row">
                    <div class="form-group col-4">
                        <label>Menu</label>
                        <select name="menu_id" class="form-control">
                            <option value="0">index</option>
                            @foreach(\App\Models\Menu::all() ?: [] as $item)
                                <option value="{{$item->id}}"
                                    @selected(old('menu_id',(isset($model) ? $model->menu_id : null))==$item->id)
                                >{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('menu_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
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




                                       <div class="form-group col-12">
                                           <label>Description</label>
                                           <textarea id="summernote{{$index}}"  name="{{$lang}}[description]"
                                                     class="form-control">
                                           {{old("$lang.description",isset($model) ? ($model->translateOrDefault($lang)->description ??
                                            '')
                                            : '')}}                                             </textarea>
                                           @error("$lang.description")
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
                                           <label>Title 2</label>
                                           <input type="text" placeholder="title2 {{$lang}}" name="{{$lang}}[title2]"
                                                  value="{{old("$lang.title2",isset($model) ? ($model->translateOrDefault($lang)->title2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>


                                       <div class="form-group col-6">
                                           <label>Title 3</label>
                                           <input type="text" placeholder="title3 {{$lang}}" name="{{$lang}}[title3]"
                                                  value="{{old("$lang.title3",isset($model) ? ($model->translateOrDefault($lang)->title3 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title3")
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
                    <div class="form-group col-4">
                        @isset($model->image1)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->image1)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>Image1</label>
                        <input type="file"  name="image1" class="form-control">
                        @error('image1')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        @isset($model->image2)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->image2)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>Image2</label>
                        <input type="file"  name="image2" class="form-control">
                        @error('image2')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        @isset($model->image3)
                            <div class="form-group col-2 pt-3">
                                <img src="{{asset('storage/'.$model->image3)}}" alt="image" width="100px" >
                            </div>
                        @endisset
                        <label>Image3</label>
                        <input type="file"  name="image3" class="form-control">
                        @error('image3')
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
