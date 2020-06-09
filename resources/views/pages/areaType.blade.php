@extends('layouts.adminLayout')
<?php $sectionType= 'এলাকা ধরন' ?>
@section('title',$sectionType)
@section('body')

    @include('layouts.adminBodyLayout',['section'=>$sectionType])

@endsection

@push('customJs')
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/Section.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="{{asset('js/pagination.js')}}"></script>

    <script>

        let areaType = new SectionClass({
            'sectionName':{'AreaType':'{{ $sectionType }}'},
            'table':{
                'AreaTypeId':'এলাকা ধরন আই ডি',
                'AreaTypeCode':'এলাকা ধরন কোড',
                'AreaTypeNameEnglish':'এলাকা ধরন নাম (ইংলিশ)',
                'AreaTypeNameBangla':'এলাকা ধরন নাম (বাংলা)',
                'Note':'নোট',
                'RecordStatus':'রেকর্ড স্ট্যাটার্স',
                'RecordVersion':'রেকর্ড ভার্সন',
            }
        });

        $(document).ready(function () {

            /* Load pagination */
            loadPagination();

            /* Add division field to sub table*/
            $('#addDivision').click(function () {
                inputFormField()

            })
        });

        {{--*******************************************************************
                    @ This function load pagination
                    @ Full Documentation : https://www.jqueryscript.net/other/flexible-paginator.html
                    @ Includes Click Event To Show Details in sub Table
            ******************************************************************* --}}
        function loadPagination(info = false) {
            areaType.loadWindowData(info)
            let currentPage = areaType.currentPage(info);

            axios.get('/areatype/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

                areaType.setPageCount(response.data['count'])

                paginator.initPaginator({
                    'previousPage': 'পূর্বের পাতা',
                    'nextPage': 'পরের পাতা',
                    'totalPage': response.data['count'],
                    'triggerFunc': loadTable,
                    'paginationClass': 'custom-paginator'
                });
                mainTableInsert(currentPage)

                function loadTable() {
                    var currentPage = $('.js-paginator').data('pageSelected');
                    mainTableInsert(currentPage)
                }
            }).catch((error)=>{
                console.log(error)
            })
        }

        {{--*******************************************************************
                    @  This function Run ajex call for input main table data
                    @ Input Receive data to main Table
                    @ Includes Click Event To Show Details in sub Table
            ******************************************************************* --}}
        function mainTableInsert(currentPage=1){

            /* Ajex Call with Axios */
            window.currentPage = currentPage;
            axios.get('/areatype/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

                filterDistrict(response);

                /* Click Event for show Details in sub Table*/

                $('.divi-table i').on('click',function(){

                    let info = {
                        AreaTypeId :$(this).attr("AreaTypeId"),
                        AreaTypeCode :$(this).attr("AreaTypeCode"),
                        AreaTypeNameEnglish :$(this).attr("AreaTypeNameEnglish"),
                        AreaTypeNameBangla :$(this).attr("AreaTypeNameBangla"),
                        Note :$(this).attr("Note"),
                        RecordStatus :$(this).attr("RecordStatus"),
                        RecordVersion :$(this).attr("RecordVersion"),
                    }

                    areaType.show(info);

                });
            }).catch((error)=>{
                $('#indexData').html("Ajex Call for load table data");
                console.log(error)
            });
        }

        function filterDistrict(response){
            let currentPage = window.currentPage;
            let table="";
            let i= areaType.counter(currentPage);
            let info = response.data['tableData'];
            table+=`<table>
                            <tr>
                                <th>ক্রমিক</th>
                                <th>আই ডি</th>
                                <th>কোড</th>
                                <th>নাম (ইংলিশ)</th>
                                <th>নাম (বাংলা)</th>
                                <th>নোট</th>
                                <th>রেকর্ড স্ট্যাটাস</th>
                                <th>রেকর্ড ভার্সন</th>
                                <th>দেখা</th>
                            </tr>`;

            info.forEach((data)=>{
                i++;
                table +=`
                               <tr id="divi-table-${i}" class="divi-table">
                               <td>${i}</td>
                                   <td>${data.AreaTypeId}</td>
                                   <td>${data.AreaTypeCode}</td>
                                   <td>${data.AreaTypeNameEnglish}</td>
                                  <td>${data.AreaTypeNameBangla}</td>
                                  <td>${data.Note}</td>
                                  <td>${data.RecordStatus}</td>
                                  <td>${data.RecordVersion}</td>
                                  <td><i id="divi-but-${i}"
                                   AreaTypeId ="${data.AreaTypeId}"
                                   AreaTypeCode ="${data.AreaTypeCode}"
                                   AreaTypeNameEnglish ="${data.AreaTypeNameEnglish}"
                                   AreaTypeNameBangla ="${data.AreaTypeNameBangla}"
                                   Note ="${data.Note}"
                                   RecordStatus ="${data.RecordStatus}"
                                   RecordVersion ="${data.RecordVersion}"
                                    class="fas fa-eye"></i></td></td>
                              </tr>`
            });
            table+=`</table>`;

            /* Insert Data to main table*/
            $('#indexData').html(table);
        };


        {{--************************************************************
                    @ This function return imput form Field
            ************************************************************ --}}
        function inputFormField() {
            var table = '';
            table+= areaType.insertHeader();
            table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>এলাকা ধরন আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaTypeId" ></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা ধরন কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaTypeCode"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা ধরন নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaTypeNameEnglish"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা ধরন নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaTypeNameBangla"></td>
                                    </tr>
                                    <tr>
                                        <th>নোট</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="Note"></td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড স্ট্যাটাস</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="RecordStatus"></td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড ভার্সন</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="RecordVersion"></td>
                                    </tr>
                                </table>

                            </div>
                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Messages: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <input id='addDivisionSubmit' type="submit" name="submit" value="অ্যাড">
                                    <button onclick="clearSubTable(event)">পিছনে</button>
                                </div>
                            </div>
                            <div>
                          </form>`;

            /* Insert Data to main table*/
            $('#sub_input').html(table);


            /* Ajex call for add data to database*/
            $('#addDivisionForm').submit(function (event) {
                event.preventDefault();
                var info = $('#addDivisionForm').serialize();
                axios.post('/areatype/create',info).then((response)=>{
                    mainTableInsert('lastPage');
                    inputFormField();
                    $('#message').html(response.data);

                }).catch((error)=>{
                    $('#message').html(error);
                    console.log(error)
                })
            })
        }

        function clearSubTable(e) {
            e.preventDefault();
            $('#sub_input').html('');
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endpush

