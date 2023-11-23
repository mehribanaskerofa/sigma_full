@extends('admin.layouts.admin',['title'=>'Slider'])
@section('content')

    <?php  $routeName='admin.slider' ?>
    <a class="btn btn-primary my-1" href="{{route('admin.slider.create')}}">Add</a>
    <br>
    <div class="card ">
        <div class="card-body">
            <table class="table table-bordered" style="text-align: center">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>title</th>
                    <th>text</th>
                    <th>button_text</th>
                    <th>button_url</th>
                    <th>slider_img</th>

                    <th style="width: 50px">Edit</th>
                    <th style="width: 50px">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($models  as $model)
                    <tr>
                        <td>{{$model->id}}</td>
                        <td>{{$model->title}}</td>
                        <td>{{$model->text}}</td>
                        <td>{{$model->button_text}}</td>
                        <td>{{$model->button_url}}</td>
                        <td><img width="100" src="{{asset('storage/'.$model->slider_img)}}" alt=""></td>

                        <td>
                            <a href="{{route($routeName.'.edit',$model->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form class="delete-form" action="{{ route($routeName.'.destroy',$model->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            {{$models->links('pagination::bootstrap-4')}}
        </div>
    </div>
@endsection
