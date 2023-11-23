<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <title>{{\Illuminate\Support\Str::upper($title)}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="{{asset('/assets/css/project.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">

    @stack('css')
</head>

<body>


{{--{{$title}}--}}
<div class="page-preloader loaded"></div>
<div class="general-wrapper">

    @include('front.includes.header')

    <main>
        @yield('content')
    </main>

    @include('front.includes.footer')

</div>


<script src="{{asset('/assets/js/libs.min.js')}}"></script>
<script src="{{asset('/assets/js/main1.min.js')}}"></script>
<script src="{{asset('/assets/js/cookie-2.2.1.min.js')}}"></script>

@stack('js')
</body>
</html>
