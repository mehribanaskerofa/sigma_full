@extends('front.layouts.front',['title'=>$slug])
@section('content')

    <x-header-component :slug="$slug"/>


    <x-dev-component :slug="$slug"/>

    <x-cta1-component/>

    <x-drive-component :slug="$slug"/>

    <x-banner-component :slug="$slug"/>

{{--    text--}}
    <x-red-banner-component/>

    <x-craft-component :slug="$slug"/>

    <x-related-component />
    <x-technology-component />


    <x-philosophy-component :slug="$slug"/>

    <x-cta2-component/>


    <x-faq-component :slug="$slug"/>
    <x-appdev-component :slug="$slug"/>
    <x-cases-component :slug="$slug"/>


    <x-blog-component :slug="$slug"/>
    <x-recognition-component :slug="$slug"/>
    <x-principle-component :slug="$slug"/>
    <x-team-component :slug="$slug"/>
    <x-gallery-component :slug="$slug"/>
@endsection
