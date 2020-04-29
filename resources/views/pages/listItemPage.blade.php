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
        function loadPagination() {
            let currentPage=0;
            window.filterKey = 0;
            axios.get('/listitem/'+currentPage,{
            }).then((response)=>{

                paginator.initPaginator({
                    'previousPage': 'পূর্বের পাতা',
                    'nextPage': 'পরের পাতা',
                    'totalPage': response.data['count'],
                    'triggerFunc': loadTable,
                    'paginationClass': 'custom-paginator'
                });

                mainTableInsert(currentPage);

                function loadTable() {
                    let currentPage = $('.js-paginator').data('pageSelected');
                    mainTableInsert(currentPage)
                }

            })
        }

        {{--*******************************************************************
                    @  This function Run ajex call for input main table data
                    @ Input Receive data to main Table
                    @ Includes Click Event To Show Details in sub Table
            ******************************************************************* --}}
        function mainTableInsert(currentPage=0){
            /* Ajex Call with Axios */
            window.currentPage = currentPage;
            axios.get('/listitem/'+currentPage,{
                params: {
                    filterKey:window.filterKey
                }
            }).then((response)=>{

                // loadWindowsData(response);

                filterDistrict(response);


                $('.divi-table i').on('click',function(){
                    let ListItemId = $(this).attr('ListItemId');
                    let ListItemCode = $(this).attr('ListItemCode');
                    let CodeListCode = $(this).attr('CodeListCode');
                    let CodeListNameBangla = $(this).attr('CodeListNameBangla');
                    let ListItemNameEnglish = $(this).attr('ListItemNameEnglish');
                    let ListItemNameBangla = $(this).attr('ListItemNameBangla');
                    let Note = $(this).attr('Note');
                    let RecordStatus = $(this).attr('RecordStatus');
                    let RecordVersion = $(this).attr('RecordVersion');
                    console.log(response.data['CodeListName'])
                    let CodeListName = response.data['CodeListName'];
                    var table = '';
                    table+= insertHeader();
                    table+=`<div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>লিস্ট আইটেম আই ডি</th>
                                        <td class="clone">:</td>
                                        <td>${ListItemId}</td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম কোড</th>
                                        <td class="clone">:</td>
                                        <td>${ListItemCode}</td>
                                    </tr>
                                    <tr>
                                        <th>কোড লিস্ট</th>
                                        <td class="clone">:</td>
                                        <td>${CodeListNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td>${ListItemNameEnglish}</td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td>${ListItemNameBangla}</td>
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
                                    <button id="deleteDivision" key=${ListItemCode}>ডিলিট</button></div>
                                </div>
                            </div>
                            <div>`;

                    /* Insert Data to main table*/
                    $('#sub_input').html(table);

                    /* Ajex call for Delete record*/
                    $('#deleteDivision').click(function () {
                        key = $(this).attr('key');
                        if(confirm("Want to delete table")){
                            axios.delete('/listitem/'+key).then((response)=>{
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
                                        <th>লিস্ট আইটেম আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemId" value="${ListItemId}"></td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemCodeHidden" value="${ListItemCode}" disabled>
                                            <input type="hidden" name="ListItemCode" value="${ListItemCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>কোড লিস্ট</th>
                                        <td class="clone">:</td>
                                        <td><select name="CodeListCode">`
                        CodeListName.forEach((data)=>{
                            table+= `<option value="${data.CodeListCode}">${data.CodeListNameBangla}</option>`
                        });
                table+=`           </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemNameEnglish" value="${ListItemNameEnglish}"></td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemNameBangla" value="${ListItemNameBangla}"></td>
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
                                <div class="col-8"><p>Message: <span id="message"></span></p></div>
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
                            axios.patch('/listitem/update',info).then((response)=>{
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

        function filterDistrict(response) {
            let currentPage = window.currentPage;
            var table = '';
            let i = currentPage !==1 && currentPage !== 0 ? currentPage*10 : 0;
            let info = response.data['tableData'];
            let ListItemName = response.data['CodeListName'];

            table+=`<table>
                            <tr >
                                <th>ক্রমিক</th>
                                <th>
                                <select onchange="window.filterKey=this.value;mainTableInsert()">`;

            table+= `<option value="0">কোড লিস্ট</option>\n`;

            ListItemName.forEach((data)=>{
                table+= `<option value="${data.CodeListNameBangla}">${data.CodeListNameBangla}</option>\n`
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
                                   <td>${data.CodeListNameBangla} <span></span></td>
                                   <td>${data.ListItemId}</td>
                                   <td>${data.ListItemCode}</td>
                                   <td>${data.ListItemNameEnglish}</td>
                                   <td>${data.ListItemNameBangla}</td>
                                   <td>${data.Note}</td>
                                   <td>${data.RecordStatus}</td>
                                   <td>${data.RecordVersion}</td>
                                   <td><i id="divi-but-${i}"
                                   ListItemId ="${data.ListItemId}"
                                   ListItemCode ="${data.ListItemCode}"
                                   CodeListCode ="${data.CodeListCode}"
                                   ListItemNameBangla ="${data.ListItemNameBangla}"
                                   ListItemNameEnglish ="${data.ListItemNameEnglish}"
                                   CodeListNameBangla ="${data.CodeListNameBangla}"
                                   Note ="${data.Note}"
                                   RecordStatus ="${data.RecordStatus}"
                                   RecordVersion ="${data.RecordVersion}"
                                    class="fas fa-eye"></i></td></td>
                              </tr>`;
            });
            table+= `</table>`;
            $('#indexData').html(table)
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
            axios.post('data/gettable/ada_codelist',{
                selection:['CodeListCode','CodeListNameBangla'],
                condition:{
                }
            }).then((response)=>{
                let ListItemList = response.data;
                var table = '';

                table+= insertHeader();
                table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>লিস্ট আইটেম আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemId" ></td>
                                    </tr>
                                    <tr>
                                        <th>কোড লিস্ট</th>
                                        <td class="clone">:</td>
                                        <td><select name="CodeListCode" id="addDivisionList">`
                ListItemList.forEach((data)=>{
                    table+=`<option value="${data.CodeListCode}">${data.CodeListNameBangla}</option>`
                });

                table+=`</select></td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemCode"></td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemNameEnglish"></td>
                                    </tr>
                                    <tr>
                                        <th>লিস্ট আইটেম নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="ListItemNameBangla"></td>
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
                    axios.post('/listitem/create',info).then((response)=>{
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
