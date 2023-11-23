@extends('front.layouts.front',['title'=>'Azerelli'])
@section('content')
    <x-head-index-component/>

    <x-header-component :slug="$slug ?? 'index'"/>
    <x-service-component/>
    <x-slide-index-component/>
    <x-expertise-component/>

{{--    <x-video-component/>--}}
    <x-news-component/>



@endsection
