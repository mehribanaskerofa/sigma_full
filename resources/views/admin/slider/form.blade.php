@extends('admin.layouts.admin',['title'=>'Slider'])


@section('content')
    <?php  $routeName='admin.slider' ?><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset


                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            @foreach(config('app.languages') as $lang)
                                <li class="nav-item ">
                                    <a
                                        class="nav-link {{$loop->first ? 'active show' : ''}}@error("$lang.title") text-danger @enderror"
                                        id="custom-tabs-one-home-tab" data-toggle="pill" href="#tab-{{$lang}}"
                                        role="tab" aria-controls="custom-tabs-one-home"
                                        aria-selected="true">{{$lang}}</a>
                                </li>

                            @endforeach

                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            @foreach(config('app.languages') as $lang)
                                <div class="tab-pane fade {{$loop->first ? 'active show' : ''}}" id="tab-{{$lang}}"
                                     role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" placeholder="Title" name="{{$lang}}[title]"
                                               value="{{old($lang.'title', isset($model) ? $model->translateOrDefault($lang)->title : '' )}}"
                                               class="form-control">
                                        @error("$lang.title")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Text</label>
                                        <input type="text" placeholder="text" name="{{$lang}}[text]"
                                               value="{{old($lang.'text', isset($model) ? $model->translateOrDefault($lang)->text : ''  )}}"
                                               class="form-control">
                                        @error("$lang.text")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>button_text</label>
                                        <input id="summary-ckeditor" type="text" placeholder="button_text" name="{{$lang}}[button_text]"
                                               value="{{old($lang.'button_text', isset($model) ? $model->translateOrDefault($lang)->button_text : ''  )}}"
                                               class="form-control">
                                        @error("{{$lang}}[button_text]")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label>button url</label>
                    <input type="text" placeholder="button_url" name="button_url" value="{{old('button_url',$model->button_url ?? '')}}" class="form-control">
                    @error('button_url')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>slider_img</label>
                    @isset($model)
                        <br>
                        <img width="200" src="{{asset('storage/'.$model->slider_img)}}">
                    @endisset
                    <input type="file" name="slider_img" class="form-control">
                    @error('slider_img')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection


