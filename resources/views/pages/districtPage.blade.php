@extends('layouts.adminLayout')

@section('title','Admin')
@section('body')

    {{--***************************
            @ Table data
     ***************************** --}}
    <div class="row body_top">
        <div class="col-2"><h3>প্রশাসনিক</h3> </div>
        <div class="col-1 clone">:</div>
        <div class="col-8"><h3>জেলা</h3></div>
    </div>
    <div class="row body_search-panel">
        <div class="col-8"></div>
        <div class="col-4">
            <input type="text">
            <input type="text">
            <span class="dropdownIcon">...</span>
        </div>
    </div>

    {{--****************************************************************
            @ data from database will fetch with ajex and append here
     ******************************************************************* --}}
    <div id="indexData" class="row body_bottom">
    </div>

    {{--****************************************************************
            @ Below div containt pageination and button
     ******************************************************************* --}}
    <div class="row body_pagination">
        <div class="col-8 paginator js-paginator d-flex justify-content-center"></div>
        <div class="col-4">
            <button id="addDivision">অ্যাড</button>
        </div>
    </div>

    {{--**********************************************************
        @ Sub Table Body
        @ data from database will fetch with ajex and append here
    *************************************************************** --}}
    <div id="sub_input"></div>

@endsection

@push('customJs')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="{{asset('js/pagination.js')}}"></script>
    <script>

        $(document).ready(function () {

            loadPagination();

            /* Add district field to sub table*/
            $('#addDivision').click(function () {

                inputFormField();

            })
        });

        {{--*******************************************************************
                    @ This function load pagination
                    @ Full Documentation : https://www.jqueryscript.net/other/flexible-paginator.html
                    @ Includes Click Event To Show Details in sub Table
            ******************************************************************* --}}
        function loadPagination(value=0) {
            let currentPage=0;
            axios.get('/district/'+currentPage+'/'+value,{
            }).then((response)=>{

                paginator.initPaginator({
                    'previousPage': 'পূর্বের পাতা',
                    'nextPage': 'পরের পাতা',
                    'totalPage': response.data['count'],
                    'triggerFunc': loadTable,
                    'paginationClass': 'custom-paginator'
                });

                    mainTableInsert(currentPage,value);

                function loadTable() {
                    var currentPage = $('.js-paginator').data('pageSelected');
                    mainTableInsert(currentPage,value)
                }

            })
        }

        function filterDistrict(response) {
            let currentPage = window.currentPage;
            var table = '';
            let i = '';
            let info = response.data['tableData'];
            let divisionName = response.data['DivisionName'];

                table+=`<table>
                            <tr >
                                <th>ক্রমিক</th>
                                <th>
                                <select id='dist_filter-button' name="division" onchange="loadPagination(this.value)">`;

                table+= `<option value="0">District</option>\n`;

       divisionName.forEach((data)=>{
                table+= `<option value="${data}">${data}</option>\n`
                }) ;

                table+= `<option value="0">All</option>`;

                table += `</select>
                                </th>
                                <th>আই ডি</th>
                                <th>কোড</th>
                                <th>নাম (ইংলিশ)</th>
                                <th>নাম (বাংলা)</th>
                                <th>নোট</th>
                                <th>রেকর্ড স্ট্যাটাস</th>
                                <th>রেকর্ড ভার্সন</th>
                                <th>দেখা</th>
                            </tr>
                            `;
                info.forEach((data)=>{
                    i++;
                    table +=`
                               <tr id="divi-table-${i}" class="divi-table">
                               <td>${i}</td>
                                   <td>${data.DivisionNameBangla} <span></span></td>
                                   <td>${data.DistrictId}</td>
                                   <td>${data.DistrictCode}</td>
                                   <td>${data.DistrictNameEnglish}</td>
                                   <td>${data.DistrictNameBangla}</td>
                                   <td>${data.Note}</td>
                                   <td>${data.RecordStatus}</td>
                                   <td>${data.RecordVersion}</td>
                                   <td><i id="divi-but-${i}"
                                   DistrictId ="${data.DistrictId}"
                                   DistrictCode ="${data.DistrictCode}"
                                   DivisionCode ="${data.DivisionCode}"
                                   DivisionNameBangla ="${data.DivisionNameBangla}"
                                   DistrictNameEnglish ="${data.DistrictNameEnglish}"
                                   DistrictNameBangla ="${data.DistrictNameBangla}"
                                   Note ="${data.Note}"
                                   RecordStatus ="${data.RecordStatus}"
                                   RecordVersion ="${data.RecordVersion}"
                                    class="fas fa-eye"></i></td></td>
                              </tr>`;
                    });
                table+= `</table>`;
                $('#indexData').html(table)
        }

        {{--*******************************************************************
                    @  This function Run ajex call for input main table data
                    @ Input Receive data to main Table
                    @ Includes Click Event To Show Details in sub Table
            ******************************************************************* --}}
        function mainTableInsert(currentPage=0,filterKey=0){
            /* Ajex Call with Axios */
            window.currentPage = currentPage;
            window.filterKey = filterKey
            axios.get('/district/'+currentPage+'/'+filterKey,{
                filterKey:filterKey
            }).then((response)=>{

                loadWindowsData(response);

                filterDistrict(response);


                $('.divi-table i').on('click',function(){
                    let DistrictId = $(this).attr('DistrictId')
                    let DistrictCode = $(this).attr('DistrictCode')
                    let DivisionCode = $(this).attr('DivisionCode')
                    let DivisionNameBangla = $(this).attr('DivisionNameBangla')
                    let DistrictNameEnglish = $(this).attr('DistrictNameEnglish')
                    let DistrictNameBangla = $(this).attr('DistrictNameBangla')
                    let Note = $(this).attr('Note')
                    let RecordStatus = $(this).attr('RecordStatus')
                    let RecordVersion = $(this).attr('RecordVersion')

                        var district = response.data;
                        var table = '';
                        table+= insertHeader();
                        table+=`<div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>জেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td>${DistrictId}</td>
                                    </tr>
                                    <tr>
                                        <th>জেলা কোড</th>
                                        <td class="clone">:</td>
                                        <td>${DistrictCode}</td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td>${DivisionNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>জেলা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td>${DistrictNameEnglish}</td>
                                    </tr>
                                    <tr>
                                        <th>জেলা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td>${DistrictNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>নোট</th>
                                        <td class="clone">:</td>
                                        <td>${Note}</td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড স্ট্যাটাস</th>
                                        <td class="clone">:</td>
                                        <td>${RecordStatus}</td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড ভার্সন</th>
                                        <td class="clone">:</td>
                                        <td>${RecordVersion}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Message: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <button id="editDivision">এডিট</button>
                                    <button id="deleteDivision" key=${DistrictCode}>ডিলিট</button></div>
                                </div>
                            </div>
                            <div>`;

                        /* Insert Data to main table*/
                        $('#sub_input').html(table);

                        /* Ajex call for Delete record*/
                        $('#deleteDivision').click(function () {
                            key = $(this).attr('key');
                            if(confirm("Want to delete table")){
                                axios.delete('/district/'+key).then((response)=>{
                                    $('#message').html(response.data)
                                    mainTableInsert(window.currentPage);
                                    $('#sub_input').html('');
                                }).catch((error)=>{
                                    $('#message').html(error)
                                    console.log(error)
                                })
                            }
                        });

                        /* Click Event for Edit record*/
                        $('#editDivision').click(function () {
                            var table = '';
                            table+= insertHeader();
                            table+=`<form id="saveDivision" action="">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>জেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictId" value="${DistrictId}"></td>
                                    </tr>
                                    <tr>
                                        <th>জেলা কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictCodeHidden" value="${DistrictCode}" disabled>
                                            <input type="hidden" name="DistrictCode" value="${DistrictCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionNameBangla" value="${DivisionNameBangla}" disabled>
                                            <input type="hidden" name="DivisionCode" value="${DivisionCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>জেলা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictNameEnglish" value="${DistrictNameEnglish}"></td>
                                    </tr>
                                    <tr>
                                        <th>জেলা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictNameBangla" value="${DistrictNameBangla}"></td>
                                    </tr>
                                    <tr>
                                        <th>নোট</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="Note" value="${Note}"></td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড স্ট্যাটাস</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="RecordStatus" value="${RecordStatus}"></td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড ভার্সন</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="RecordVersion" value="${RecordVersion}"></td>
                                    </tr>
                                </table>
                           </div>
                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Messages: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <input type="submit" name="submit" value="আপডেট">
                                    <button onclick="clearSubTable(event)">পিছনে</button>
                                </div>
                            </div>
                            <div>
                        </form>`;

                            /* Insert Data to sub table*/
                            $('#sub_input').html(table);

                            /* Ajex call for Update record*/
                            $('#saveDivision').submit(function (event) {
                                event.preventDefault();
                                let info = $('#saveDivision').serialize();
                                // console.log(info);
                                axios.patch('/district/update',info).then((response)=>{
                                    $('#message').html(response.data)
                                    mainTableInsert(window.currentPage);
                                }).catch((error)=>{
                                    $('#message').html(error);
                                    console.log(error)
                                })
                            });
                        })
                });
            }).catch((error)=>{
                $('#indexData').html("Ajex Call for load table data");
                console.log(error)
            });
        }

        {{--************************************************************
                    @ This function Only Return Table header data
            ************************************************************ --}}
        function insertHeader(){
            return `<div class="row body_top">
                                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                                <div class="col-1 clone">:</div>
                                <div class="col-8"><h3>জেলা</h3></div>
                            </div>`
        }

        {{--************************************************************
                    @ This function return imput form Field
            ************************************************************ --}}
        function inputFormField() {
            axios.get('/data/divisionList').then((response)=>{
                let DistrictList = response.data;
                var table = '';

                table+= insertHeader();
                table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>জেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictId" ></td>
                                    </tr>
                                    <tr>
                                        <th>District কোড</th>
                                        <td class="clone">:</td>
                                        <td><select name="DivisionCode" id="addDivisionList">`
                DistrictList.forEach((data)=>{
                    table+=`<option value="${data.DivisionCode}">${data.DivisionNameBangla}</option>`
                });

                table+=`</select></td>
                                    </tr>
                                    <tr>
                                        <th>জেলা কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictCode"></td>
                                    </tr>
                                    <tr>
                                        <th>জেলা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictNameEnglish"></td>
                                    </tr>
                                    <tr>
                                        <th>জেলা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictNameBangla"></td>
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
                    axios.post('/district/create',info).then((response)=>{
                        mainTableInsert('lastPage');
                        inputFormField();
                        $('#message').html(response.data);

                    }).catch((error)=>{
                        $('#message').html(error);
                        console.log(error)
                    })
                })
            })

        }

        function clearSubTable(e) {
            e.preventDefault();
            $('#sub_input').html('');
        }

        function loadWindowsData(response) {
            window.divisionList = response.data['DivisionName'];
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endpush
