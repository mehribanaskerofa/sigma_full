@extends('admin.layouts.admin',['title'=>'Section faq'])


@section('content')
    <?php  $routeName='admin.faq' ?><br>
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
                                       <div class="form-group col-8">
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

                                       <div class="form-group col-8">
                                           <label>Title</label>
                                           <input type="text" placeholder="title {{$lang}}" name="{{$lang}}[title]"
                                                  value="{{old("$lang.title",isset($model) ? ($model->translateOrDefault($lang)->title ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-12">
                                           <label>Description</label>
                                           <textarea id="summernote{{$index+3}}"  name="{{$lang}}[description]"
                                                     class="form-control">
                                           {{old("$lang.description",isset($model) ? ($model->translateOrDefault($lang)->description ??
                                            '   <p>Our application development experts use a variety of technologies for
        customized software solutions, including but not limited to:</p>
    <p><strong>Programming Languages:</strong></p>
    <ul class="red-dot">
        <li>Java</li>
        <li>Python</li>
        <li>JavaScript</li>
        <li>C#</li>
        <li>Ruby</li>
        <li>PHP</li>
    </ul>
   ') : '   <p>Our application development experts use a variety of technologies for
        customized software solutions, including but not limited to:</p>
    <p><strong>Programming Languages:</strong></p>
    <ul class="red-dot">
        <li>Java</li>
        <li>Python</li>
        <li>JavaScript</li>
        <li>C#</li>
        <li>Ruby</li>
        <li>PHP</li>
    </ul>
   ')}}
                                           </textarea>
                                           @error("$lang.description")
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
