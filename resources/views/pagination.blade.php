<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>



<div class="container mt-5">

    <div class="align-items-center">
        <h1>District List</h1>
    </div>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name English</th>
            <th scope="col">Name Bangla</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>

        @foreach($district as $d)
        <tr>
            <th scope="row">{{$d->DistrictCode}}</th>
            <td>{{$d->DistrictNameEnglish}}</td>
            <td>{{$d->DistrictNameBangla}}</td>
            <td>{{$d->RecordStatus}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $district->links() }}
    </div>
</div>

</body>
</html>
