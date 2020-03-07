@extends('layouts.admin')

@section('title','Admin')
@section('table')


    {{--***************************
            @ Table data
     ***************************** --}}
    <div class="row body_search-panel">
    </div>

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

{{--***************************
        @ Sub Table data
 ***************************** --}}


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
                    table += addDivision(division[0].DivisionId,division[0].DivisionCode,division[0].DivisionNameEnglish,division[0].DivisionNameBangla,division[0].Note,division[0].RecordStatus,division[0].RecordVersion);

                   $('#sub_input').html(table);
                })
            })
        })



function addDivision(divisionId,divisionCode,divisionNameEng,divisionNameBan,note,status,version) {
return  `<div class="row body_top mt-5">
        <div class="col-4">Status</div>
        <div class="col-8">District</div>
    </div>

    <div class="row body_bottom sub_table-body">
        <table>
           <tr>
                <th>বিভাগ আই ডি</th>
                <td>${divisionId}</td>
            </tr>
            <tr>
                <th>বিভাগ কোড</th>
                <td>${divisionCode}</td>
            </tr>
            <tr>
                <th>বিভাগ নাম (ইংলিশ)</th>
                <td>${divisionNameEng}</td>
            </tr>
            <tr>
                <th>বিভাগ নাম (বাংলা)</th>
                <td>${divisionNameBan}</td>
            </tr>
            <tr>
                <th>নোট</th>
                <td>${note}</td>
            </tr>
            <tr>
                <th>স্ট্যাটাস</th>
                <td>${status}</td>
            </tr>
            <tr>
                <th>?????</th>
                <td>${version}</td>
            </tr>
        </table>

    </div>
<div>`
}

    </script>
    @endpush
