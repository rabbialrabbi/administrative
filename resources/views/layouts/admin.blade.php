<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

<div id="app" class="container-fluid">

    {{--***************************
                @ Header Part
    ***************************** --}}
    <div class="row header">
        <div class="col-2 header_logo">
            <img src="{{asset('storage/logo/bdlogo.png')}}" alt="Logo Bangladesh" width="100px" height="100px">
        </div>
        <div class="col-7 header_middle">
           <h1 class="pb-2">বাংলাদেশ কৃষি আবহাওয়া তথ্য পোর্টাল</h1>
            <p>কৃষি আবহাওয়া তথ্য পদ্ধতি উন্নতকরণ প্রকল্প</p>
            <p>কৃষি সম্প্রসারণ অধিদপ্তর</p>
        </div>
        <div class="col-3 header_right">
            <div class="header_right-part_top">
                <p><span>ইংলিশ</span>
                    <span class="pl-4">বাংলা</span></p>
            </div>
            <div class="header_right-part_bottom">
                <p>সোমবার মার্চ ০৪, ২০১৯</p>
                <p>ব্যবহারকারিঃ জনাব এসান উদ্দিন আহমেদ</p>
                <p>(অ্যাডমিনিস্ট্রেটর) । লগ আউট</p>
            </div>


        </div>
    </div>

    {{--***************************
                @ SideBar Panel
    ***************************** --}}

    <div class="row">
        <div class="col-2 ">
            <div class="side-bar">
                <h4>পরামর্শ ব্যবস্থাপনা </h4>
                <a href="#"><p>ড্যশবোর্ড</p></a>
                <a href="#"><p>পরামর্শ</p></a>
                <a href="#"><p>ফিডব্যাক সার্ভিস</p></a>
                <a href="#"><p>এসএএও</p></a>
                <a href="#"><p>সেটিংস</p></a>
                <a href="#"><p>মোবাইল অ্যাপ</p></a>
                <a href="#"><p>সাহায্য</p></a>
            </div>
        </div>

        {{--***************************
                @ Table Body
        ***************************** --}}

        <div class="col-10 body">
            <div class="row body_top">
                <div class="col-4">প্রশাসনিক </div>
                <div class="col-8">District</div>
            </div>
            <div class="row body_bottom">
                @yield('table')
            </div>

            {{--***************************
                @ Table Body
            ***************************** --}}

            @yield('sub_table')

        </div>
    </div>
</div>


@stack('customJs')
</body>
</html>
