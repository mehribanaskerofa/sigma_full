@extends('admin.layouts.admin',['title'=>'Section team'])


@section('content')
    <?php  $routeName='admin.team' ?><br>
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
                    <div class="form-group col-6">
                        <label>Team</label>
                        <select name="team" class="form-control"  >
                            @foreach( \App\Enums\Teams::cases() as $type)
                                <option value="{{$type->value}}"
                                    @selected(old('team',(isset($model) ? $model->team : null))==$type->value)
                                >{{$type->name}}</option>
                            @endforeach

                        </select>
                        @error('team')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
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
                    <div class="form-group col-8">
                        <label>Role</label>
                        <input type="text" placeholder="role" name="role"
                               value="{{old("role",isset($model) ? ($model->role ?? '') : '')}}"
                               class="form-control">
                        @error("role")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-8">
                        <label>Linkedln url</label>
                        <input type="text" placeholder="url " name="in_url"
                               value="{{old("in_url",isset($model) ? ($model->in_url ?? '') : '')}}"
                               class="form-control">
                        @error("in_url")
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
                                           <label>FullName</label>
                                           <input type="text" placeholder="fullname {{$lang}}" name="{{$lang}}[fullname]"
                                                  value="{{old("$lang.fullname",isset($model) ? ($model->translateOrDefault($lang)->fullname ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.fullname")
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
