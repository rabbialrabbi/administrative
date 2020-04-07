<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    font awesome CDN--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

<div id="app" class="container-fluid">


    <admin-head></admin-head>

    <div class="row">

        <admin-sidebar></admin-sidebar>

        <div class="col-10 body">
            <admin-body></admin-body>
        </div>

    </div>


</div>


{{--@stack('customJs')--}}
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
