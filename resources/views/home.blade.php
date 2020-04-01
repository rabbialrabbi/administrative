@extends('layouts.app')

@section('content')
    {{$errors}}

    <div id="showField">
        <form action="/upazila/create" method="post">
            @csrf()
            <input type="submit" value="Submit">
        </form>

    </div>

@endsection
