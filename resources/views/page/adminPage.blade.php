@extends('layouts.admin')

@section('title','Admin')
@section('table')

    <table>
        <tr>
            <th>ক্রমিক</th>
            <th>আই ডি</th>
            <th>কোড</th>
            <th>নাম (ইংলিশ)</th>
            <th>নাম (বাংলা)</th>
            <th>নোট</th>
            <th>স্ট্যাটাস</th>
            <th>?????</th>
            <th>দেখা</th>
        </tr>
<?php $i = 0 ?>
        @foreach($division as $d)
            <?php $i++ ?>
            <tr id="divi-table-{{$i}}" class="divi-table"><td>{{$i}}</td>
                <td>{{$d->DivisionId}}</td>
                <td>{{$d->DivisionCode}}</td>
                <td>{{$d->DivisionNameEnglish}}</td>
                <td>{{$d->DivisionNameBangla}}</td>
                <td>{{$d->Note}}</td>
                <td>{{$d->RecordStatus}}</td>
                <td>{{$d->RecordVersion}}</td>
                <td>
                    <button id="divi-but-{{$i}}" key="{{$d->DivisionCode}}">Click</button></td>
            </tr>

        @endforeach

    </table>

    @endsection


@section('sub_table')

    <div id="sub_input"></div>

@endsection

@push('customJs')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        $(document).ready(function () {

            $('.divi-table button').on('click',function(){
                var key = $(this).attr('key');
                axios.get('/division/'+key).then((response)=>{

                    var division = response.data;

                    var table = '';
    table+=`<div class="row body_top mt-5">
        <div class="col-4">Status</div>
        <div class="col-8">District</div>
    </div>

    <div class="row body_bottom sub_table-body">
        <table>
           <tr>
                <th>বিভাগ আই ডি</th>
                <td>${division[0].DivisionId}</td>
            </tr>
            <tr>
                <th>বিভাগ কোড</th>
                <td>${division[0].DivisionCode}</td>
            </tr>
            <tr>
                <th>বিভাগ নাম (ইংলিশ)</th>
                <td>${division[0].DivisionNameEnglish}</td>
            </tr>
            <tr>
                <th>বিভাগ নাম (বাংলা)</th>
                <td>${division[0].DivisionNameBangla}</td>
            </tr>
            <tr>
                <th>নোট</th>
                <td>${division[0].Note}</td>
            </tr>
            <tr>
                <th>স্ট্যাটাস</th>
                <td>${division[0].RecordStatus}</td>
            </tr>
            <tr>
                <th>??????</th>
                <td>${division[0].RecordVersion}</td>
            </tr>
        </table>

    </div>`;
                   $('#sub_input').html(table);
                })
            })
        })



    </script>
    @endpush
