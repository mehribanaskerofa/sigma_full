@extends('admin.layouts.admin',['title'=>'Menu'])


@section('content')
    <?php  $routeName='admin.menu' ?><br>
    <div class="card">
        <div class="card-body">
            <form action="{{ isset($model) ? route($routeName.'.update',$model->id) :  route($routeName.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @isset($model)
                    @method('PUT')
                @endisset


                <div class="row">
                    <div class="form-group col-6">
                        <label>Parent Menu</label>
                        <select name="parent_id" class="form-control">
                            <option value="">Select</option>

                            @foreach($menus->where('id','!=',isset($model) ? $model->id : null) as $item)
                                <option value="{{$item->id}}"
                                    @selected(old('parent_id',(isset($model) ? $model->parent_id : null))==$item->id)
                                >{{$item->name}}</option>
                            @endforeach

                        </select>
                        @error('parent_id')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-2 m-auto">
                        <label>Landing</label>
                        <input type="checkbox" name="landing" value="1" @checked(old('landing',$model->landing ?? ''))>
                        @error('landing')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label>Url</label>
                        <input type="text" placeholder="url" name="url"
                               value="{{old("url",isset($model) ? ($model->url ?? '') : '')}}"
                               @if(isset($model->url)) readonly @endif
                               class="form-control">
                        @error("url")
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
                                    <a class="nav-link {{$loop->first ? ' active ' : '' }}
                                          @error("$langKey.title") text-danger @enderror"
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
                                            <label>Name {{$lang}}</label>
                                            <input type="text" placeholder="Name {{$lang}}" name="{{$lang}}[name]"
                                                   value="{{old("$lang.name",isset($model) ? ($model->translateOrDefault($lang)->name ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$lang.name")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-6">
                                            <label>Slug {{$lang}}</label>
                                            <input type="text" placeholder="Slug {{$lang}}" name="{{$lang}}[slug]"
                                                   value="{{old("$lang.slug",isset($model) ? ($model->translateOrDefault($lang)->slug ?? '') : '')}}"
                                                   class="form-control">
                                            @error("$lang.slug")
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group col-12">
                                        <label>Description</label>
                                        <textarea id="summernote{{$index+3}}"  placeholder="Description {{$lang}}" name="{{$lang}}[description]"
                                                  class="form-control">
                                           {{old("$lang.description",isset($model) ? ($model->translateOrDefault($lang)->description ?? '') : '')}}
                                           </textarea>
                                        @error("$lang.description")
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="form-group col-2">
                    <label>Active</label>
                    <input type="checkbox" name="active" value="1" @checked(old('active',$model->active ?? ''))>
                    @error('active')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                </div>
                <button class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
@endsection

{{--@push('js')--}}
{{--    <script>--}}
{{--        $(document).ready(function (){--}}
{{--            getCategoryAttributes($('.product-category').trigger('change').val());--}}
{{--            const $product_id={{@isset($model) ? $model->id : ''}};--}}
{{--            $('.product-category').on('change',function (){--}}
{{--                getCategoryAttributes($(this).val());--}}
{{--            });--}}

{{--            function getCategoryAttributes($category_id){--}}
{{--                $.ajax({--}}
{{--                    method: 'get',--}}
{{--                    url: "{{route('admin.category-attributes',['categoryId','productId'])}}"--}}
{{--                        .replace('categoryId',$category_id)--}}
{{--                        .replace('productId',$('.product-category').val()),--}}
{{--                    success(response) {--}}
{{--                        $('#attributes-area').html(response);--}}
{{--                        $('#select2').select2();--}}
{{--                    }--}}
{{--                });--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
@push('js')
    <script src="{{asset('js/summernote.js')}}"></script>
@endpush
