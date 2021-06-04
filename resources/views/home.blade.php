<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="storage/logo/favicon-32x32.png">
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-4.5.0/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name','Administrative Area')}}</title>
</head>
<body>
<div id="app">
    <administrative-area></administrative-area>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
