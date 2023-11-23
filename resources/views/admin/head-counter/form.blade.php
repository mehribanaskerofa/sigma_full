@extends('admin.layouts.admin',['title'=>'Head Counter'])


@section('content')
    <?php  $routeName='admin.head-counter' ?><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset
                <div class="row">
                    <div class="form-group col-4">
                        <label>Menu</label>
                        <select name="menu_id" class="form-control">
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
                                          @error("$langKey.title1" )
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
                                       <div class="form-group col-4">
                                           <label>Title1</label>
                                           <input type="text" placeholder="title1 {{$lang}}" name="{{$lang}}[title1]"
                                                  value="{{old("$lang.title1",isset($model) ? ($model->translateOrDefault($lang)->title1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Title2</label>
                                           <input type="text" placeholder="title2 {{$lang}}" name="{{$lang}}[title2]"
                                                  value="{{old("$lang.title2",isset($model) ? ($model->translateOrDefault($lang)->title2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Title3</label>
                                           <input type="text" placeholder="title3 {{$lang}}" name="{{$lang}}[title3]"
                                                  value="{{old("$lang.title3",isset($model) ? ($model->translateOrDefault($lang)->title3 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title3")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-2">
                                           <label>Counter1 {{$lang}}</label>
                                           <input type="text" placeholder="Counter1 {{$lang}}" name="{{$lang}}[counter1]"
                                                  value="{{old("$lang.counter1",isset($model) ? ($model->translateOrDefault($lang)->counter1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.counter1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-2">
                                           <label>Name1 {{$lang}}</label>
                                           <input type="text" placeholder="Name1 {{$lang}}" name="{{$lang}}[name1]"
                                                  value="{{old("$lang.name1",isset($model) ? ($model->translateOrDefault($lang)->name1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.name1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-2">
                                           <label>Counter2 {{$lang}}</label>
                                           <input type="text" placeholder="Counter2 {{$lang}}" name="{{$lang}}[counter2]"
                                                  value="{{old("$lang.counter2",isset($model) ? ($model->translateOrDefault($lang)->counter2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.counter2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-2">
                                           <label>Name2 {{$lang}}</label>
                                           <input type="text" placeholder="Name2 {{$lang}}" name="{{$lang}}[name2]"
                                                  value="{{old("$lang.name2",isset($model) ? ($model->translateOrDefault($lang)->name2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.name2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-2">
                                           <label>Counter3 {{$lang}}</label>
                                           <input type="text" placeholder="Counter3 {{$lang}}" name="{{$lang}}[counter3]"
                                                  value="{{old("$lang.counter3",isset($model) ? ($model->translateOrDefault($lang)->counter3 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.counter3")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-2">
                                           <label>Name3 {{$lang}}</label>
                                           <input type="text" placeholder="Name3 {{$lang}}" name="{{$lang}}[name3]"
                                                  value="{{old("$lang.name3",isset($model) ? ($model->translateOrDefault($lang)->name3 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.name3")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>


                                       <div class="form-group col-4">
                                           <label>Sub Title1</label>
                                           <input type="text" placeholder="sub title1 {{$lang}}" name="{{$lang}}[sub_title1]"
                                                  value="{{old("$lang.sub_title1",isset($model) ? ($model->translateOrDefault($lang)->sub_title1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.sub_title1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Sub Title2</label>
                                           <input type="text" placeholder="sub title2 {{$lang}}" name="{{$lang}}[sub_title2]"
                                                  value="{{old("$lang.sub_title2",isset($model) ? ($model->translateOrDefault($lang)->sub_title2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.sub_title2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-4">
                                           <label>Sub Title3</label>
                                           <input type="text" placeholder="sub title3 {{$lang}}" name="{{$lang}}[sub_title3]"
                                                  value="{{old("$lang.sub_title3",isset($model) ? ($model->translateOrDefault($lang)->sub_title3 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.sub_title3")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                   </div>
                                </div>
                            @endforeach
                        </div>
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
