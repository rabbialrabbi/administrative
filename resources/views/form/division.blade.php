@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h1>This is the header</h1>
        </div>
        <div class="row">
            <div class="col-2 mt-4">
                <div>
                    <h4>Admin</h4>
                  <ul>
                      <li><a href="#">Division</a></li>
                      <li><a href="#">District</a></li>
                  </ul>
                </div>

            </div>
            <div class="col-8 mt-4">
                    <table>
                        <tr>
                            <th>District Name Bangla</th>
                            <th>District Name English</th>
                            <th>District Code</th>
                        </tr>

                            @foreach($division as $d)
                            <tr>
                                <td>{{$d->DivisionNameBangla}}</td>
                                <td>{{$d->DivisionNameEnglish}}</td>
                                <td>{{$d->DivisionCode}}</td>
                            </tr>
                                @endforeach

                    </table>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>
    @endsection
