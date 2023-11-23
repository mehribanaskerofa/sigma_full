@extends('admin.layouts.admin',['title'=>'Section Part'])


@section('content')
    <?php  $routeName='admin.part' ?><br>
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



                                       <div class="form-group col-6">
                                           <label>Title 1</label>
                                           <input type="text" placeholder="title1 {{$lang}}" name="{{$lang}}[title1]"
                                                  value="{{old("$lang.title1",isset($model) ? ($model->translateOrDefault($lang)->title1 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-12">
                                           <label>Description1</label>
                                           <textarea id="summernote{{$index}}"  name="{{$lang}}[description1]"
                                                     class="form-control">
                                           {{old("$lang.description1",isset($model) ? ($model->translateOrDefault($lang)->description1 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description1")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-6">
                                           <label>Title 2</label>
                                           <input type="text" placeholder="title2 {{$lang}}" name="{{$lang}}[title2]"
                                                  value="{{old("$lang.title2",isset($model) ? ($model->translateOrDefault($lang)->title2 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title2")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-12">
                                           <label>Description2</label>
                                           <textarea id="summernote{{$index+3}}"  name="{{$lang}}[description2]"
                                                     class="form-control">
                                           {{old("$lang.description2",isset($model) ? ($model->translateOrDefault($lang)->description2 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description2")
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

                                       <div class="form-group col-12">
                                           <label>Description 3</label>
                                           <textarea id="summernote{{$index+6}}"  name="{{$lang}}[description3]"
                                                     class="form-control">
                                           {{old("$lang.description3",isset($model) ? ($model->translateOrDefault($lang)->description3 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description3")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-6">
                                           <label>Title 4</label>
                                           <input type="text" placeholder="title4 {{$lang}}" name="{{$lang}}[title4]"
                                                  value="{{old("$lang.title4",isset($model) ? ($model->translateOrDefault($lang)->title4 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title4")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-12">
                                           <label>Description 4</label>
                                           <textarea id="summernote{{$index+6}}"  name="{{$lang}}[description4]"
                                                     class="form-control">
                                           {{old("$lang.description4",isset($model) ? ($model->translateOrDefault($lang)->description4 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description4")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-6">
                                           <label>Title 5</label>
                                           <input type="text" placeholder="title5 {{$lang}}" name="{{$lang}}[title5]"
                                                  value="{{old("$lang.title5",isset($model) ? ($model->translateOrDefault($lang)->title5 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title5")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-12">
                                           <label>Description 5</label>
                                           <textarea id="summernote{{$index+6}}"  name="{{$lang}}[description5]"
                                                     class="form-control">
                                           {{old("$lang.description5",isset($model) ? ($model->translateOrDefault($lang)->description5 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description5")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-6">
                                           <label>Title 6</label>
                                           <input type="text" placeholder="title6 {{$lang}}" name="{{$lang}}[title6]"
                                                  value="{{old("$lang.title6",isset($model) ? ($model->translateOrDefault($lang)->title6 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title6")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-12">
                                           <label>Description 6</label>
                                           <textarea id="summernote{{$index+6}}"  name="{{$lang}}[description6]"
                                                     class="form-control">
                                           {{old("$lang.description6",isset($model) ? ($model->translateOrDefault($lang)->description6 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description6")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>
                                       <div class="form-group col-6">
                                           <label>Title 7</label>
                                           <input type="text" placeholder="title7 {{$lang}}" name="{{$lang}}[title7]"
                                                  value="{{old("$lang.title7",isset($model) ? ($model->translateOrDefault($lang)->title7 ?? '') : '')}}"
                                                  class="form-control">
                                           @error("$lang.title7")
                                           <span class="text-danger">{{$message}}</span>
                                           @enderror
                                       </div>

                                       <div class="form-group col-12">
                                           <label>Description 7</label>
                                           <textarea id="summernote{{$index+6}}"  name="{{$lang}}[description7]"
                                                     class="form-control">
                                           {{old("$lang.description7",isset($model) ? ($model->translateOrDefault($lang)->description7 ??
                                            '<li class="dotted-list-item">your team</li>')
                                            : '<li class="dotted-list-item">your team</li>')}}
                                           </textarea>
                                           @error("$lang.description7")
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
