@extends('layouts.adminLayout')

@section('title','Admin')
@section('body')

    {{--***************************
            @ Table data
     ***************************** --}}
    <div class="row body_top">
        <div class="col-2"><h3>প্রশাসনিক</h3> </div>
        <div class="col-1 clone">:</div>
        <div class="col-8"><h3>এলাকা</h3></div>
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
    <script src="{{asset('js/app.js')}}"></script>
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
        function loadPagination(info) {

            if(info && info.DivisionKey){
                window.DivisionKey = info.DivisionKey
                window.DistrictKey = info.DistrictKey?info.DistrictKey:0
                window.UpazilaKey = info.UpazilaKey?info.UpazilaKey:0

            }else if(info && info.DistrictKey){
                window.DistrictKey = info.DistrictKey
                window.UpazilaKey = info.UpazilaKey?info.UpazilaKey:0
            }else if(info && info.UpazilaKey){
                window.UpazilaKey = info.UpazilaKey
            }else{
                window.DivisionKey = 0;
                window.DistrictKey = 0;
                window.UpazilaKey = 0;
            }
            var currentPage = '';
            if(info && info.currentPage){
                currentPage = info.currentPage
            }else{
                currentPage = 1
            }

            axios.get('/area/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

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
            axios.get('/area/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

                filterDistrict(response);

                $('.divi-table i').on('click',function(){
                    let DivisionNameBangla = $(this).attr('DivisionNameBangla');
                    let DivisionCode = $(this).attr('DivisionCode');
                    let DistrictNameBangla = $(this).attr('DistrictNameBangla');
                    let DistrictCode = $(this).attr('DistrictCode');
                    let UpazilaNameBangla = $(this).attr('UpazilaNameBangla');
                    let UpazilaCode = $(this).attr('UpazilaCode');
                    let AreaTypeNameBangla = $(this).attr('AreaTypeNameBangla');
                    let AreaTypeCode= $(this).attr('AreaTypeCode');
                    let AreaId = $(this).attr('AreaId');
                    let AreaCode = $(this).attr('AreaCode');
                    let AreaNameEnglish = $(this).attr('AreaNameEnglish');
                    let AreaNameBangla = $(this).attr('AreaNameBangla');
                    let Note = $(this).attr('Note');
                    let RecordStatus = $(this).attr('RecordStatus');
                    let RecordVersion = $(this).attr('RecordVersion');

                    var district = response.data;
                    var table = '';
                    table+= insertHeader();
                    table+=`<div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td>${DivisionNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>জেলা</th>
                                        <td class="clone">:</td>
                                        <td>${DistrictNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা</th>
                                        <td class="clone">:</td>
                                        <td>${UpazilaNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td>${AreaId}</td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা কোড</th>
                                        <td class="clone">:</td>
                                        <td>${AreaCode}</td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td>${AreaNameEnglish}</td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td>${AreaNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা ধরন</th>
                                        <td class="clone">:</td>
                                        <td>${AreaTypeNameBangla}</td>
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
                                    <button id="deleteDivision" key=${AreaCode}>ডিলিট</button></div>
                                </div>
                            </div>
                            <div>`;

                    /* Insert Data to main table*/
                    $('#sub_input').html(table);

                    /* Ajex call for Delete record*/
                    $('#deleteDivision').click(function () {
                        key = $(this).attr('key');
                        if(confirm("Want to delete table")){
                            axios.delete('/area/'+key).then((response)=>{
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
                        table+=`<form id="updateUpazila" action="">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" value="${DivisionNameBangla}" disabled>
                                            <input type="hidden" name="DivisionCode" value="${DivisionCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>জেলা</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" value="${DistrictNameBangla}" disabled>
                                            <input type="hidden" name="DistrictCode" value="${DistrictCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" value="${UpazilaNameBangla}" disabled>
                                            <input type="hidden" name="UpazilaCode" value="${UpazilaCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaId" value="${AreaId}"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaCode" value="${AreaCode}"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaNameEnglish" value="${AreaNameEnglish}"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaNameBangla" value="${AreaNameBangla}"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা ধরন</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" value="${AreaTypeNameBangla}" disabled>
                                        <input type="hidden" name="AreaTypeCode" value="${AreaTypeCode}"></td>
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
                        $('#updateUpazila').submit(function (event) {
                            event.preventDefault();
                            let info = $('#updateUpazila').serialize();
                            axios.patch('/area/update',info).then((response)=>{
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
            let i = (currentPage-1)*10;
            let info = response.data['tableData'];
            let divisionName = response.data['DivisionName'];
            let districtName = response.data['DistrictName'];
            let upazilaName = response.data['UpazilaName'];

            table+=`<table>
                            <tr >
                                <th>ক্রমিক</th>
                                <th>
                                    <select id='dist_filter-button' onchange="loadPagination({'DivisionKey':this.value})">`;
                                table+= `<option value="0">বিভাগ</option>`;

                            divisionName.forEach((data)=>{
                                table+= `<option value="${data.DivisionNameBangla}">${data.DivisionNameBangla}</option>`
                            }) ;

                            table+= `<option value="0">All</option>
                                                    </select>
                                </th>`;

            table+=`<th>
                                    <select id='dist_filter-button' onchange="loadPagination({'DistrictKey':this.value})">`;
            table+= `<option value="0">জেলা</option>\n`;

            districtName.forEach((data)=>{
                table+= `<option value="${data.DistrictNameBangla}">${data.DistrictNameBangla}</option>`
            }) ;

            table+= `<option value="0">All</option>
                                    </select></th>`;

            table+=`<th>
                                    <select id='dist_filter-button' onchange="loadPagination({'UpazilaKey':this.value})">`;
            table+= `<option value="0">উপজেলা</option>\n`;

            upazilaName.forEach((data)=>{
                table+= `<option value="${data.UpazilaNameBangla}">${data.UpazilaNameBangla}</option>`
            }) ;

            table+= `<option value="0">All</option>
                                    </select>`;
            table +=`</th>
                                <th>এলাকা ধরন</th>
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
                                   <td>${data.DivisionNameBangla}</td>
                                   <td>${data.DistrictNameBangla}</td>
                                   <td>${data.UpazilaNameBangla}</td>
                                   <td>${data.AreaTypeNameBangla}</td>
                                   <td>${data.AreaId}</td>
                                   <td>${data.AreaCode}</td>
                                   <td>${data.AreaNameEnglish}</td>
                                   <td>${data.AreaNameBangla}</td>
                                   <td>${data.Note}</td>
                                   <td>${data.RecordStatus}</td>
                                   <td>${data.RecordVersion}</td>
                                   <td><i id="divi-but-${i}"
                                   DivisionNameBangla="${data.DivisionNameBangla}"
                                   DivisionCode="${data.DivisionCode}"
                                   DistrictNameBangla="${data.DistrictNameBangla}"
                                   DistrictCode="${data.DistrictCode}"
                                   UpazilaNameBangla="${data.UpazilaNameBangla}"
                                   UpazilaCode="${data.UpazilaCode}"
                                   AreaTypeNameBangla="${data.AreaTypeNameBangla}"
                                   AreaTypeCode="${data.AreaTypeCode}"
                                   AreaId="${data.AreaId}"
                                   AreaCode="${data.AreaCode}"
                                   AreaNameEnglish="${data.AreaNameEnglish}"
                                   AreaNameBangla="${data.AreaNameBangla}"
                                   Note="${data.Note}"
                                   RecordStatus="${data.RecordStatus}"
                                   RecordVersion="${data.RecordVersion}"
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
                                <div class="col-8"><h3>এলাকা</h3></div>
                            </div>`
        }

        {{--************************************************************
                    @ This function return imput form Field
            ************************************************************ --}}
        function inputFormField() {
            axios.get('/data/all').then((response)=>{
                var data = response;

                loadAddForm(data);

                /* Ajex call for add data to database*/
                $('#addDivisionForm').submit(function (event) {

                    event.preventDefault();

                    var info = $('#addDivisionForm').serialize();

                    axios.post('/area/create',info).then((response)=>{

                        loadPagination({
                            'currentPage':'lastPage',
                            'DivisionKey':window.DivisionKey,
                            'DistrictKey':window.DistrictKey,
                            'UpazilaKey':window.UpazilaKey
                        });
                        loadAddForm(data);
                        $('#message').html(response.data);

                    }).catch((error)=>{
                        $('#message').html(error);
                        console.log(error)
                    })
                })
            })

        }
        function loadDataList(section,filterKey){
            var code = section+'Code';
            var name = section+'NameBangla';
            var selector = $("#addDivisionForm select[name="+section+"Code]");
            var info = '';
            axios.get('data/section',{
                params:{
                    section:section,
                    filterKey:filterKey
                }
            }).then(response=> {
                var respData = response.data;
                var info = '';
                respData.forEach(function (data) {
                    info += `<option value="${data[code]}" key="${data[name]}">${data[name]}</option>`
                });
                selector.html(info)

            })
        }

        /* Input Form*/
        function loadAddForm(response) {
            let DivisionList = response.data['division'];
            let DistrictList = response.data['district'];
            let UpazilaList = response.data['upazila'];
            let areaTypeList = response.data['areaType'];
            var table = '';

            table+= insertHeader();
            table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td>
                                        <select name="DivisionCode" onchange="loadDataList('District',this.value);loadWindow('DivisionKey',event)">`;
            DivisionList.forEach((data)=>{
                table+=`<option value="${data.DivisionCode}" key="${data.DivisionNameBangla}">${data.DivisionNameBangla}</option>`
        });

            table+=`</select></td></tr>`;

            table +=`<tr>
                                        <th>জেলা</th>
                                        <td class="clone">:</td>
                                        <td>
                                            <select name="DistrictCode" onchange="loadDataList('Upazila',this.value);loadWindow('DistrictKey',event)">
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা</th>
                                        <td class="clone">:</td>
                                        <td>
                                            <select name="UpazilaCode" onchange="loadWindow('UpazilaKey',event)">
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td>
                                        <select name="AreaTypeCode" >`;
            areaTypeList.forEach((data)=>{
                table+=`<option value="${data.AreaTypeCode}" key="${data.AreaTypeNameBangla}">${data.AreaTypeNameBangla}</option>`
            })
            table+=`</select></td></tr>`;

                                    table+=`<tr>
                                        <th>এলাকা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaId" ></td>
                                    </tr>


                                    <tr>
                                        <th>এলাকা কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaCode"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaNameEnglish"></td>
                                    </tr>
                                    <tr>
                                        <th>এলাকা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="AreaNameBangla"></td>
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
        }

        function loadWindow(section,event) {
            window[section]= event.target.options[event.target.selectedIndex].getAttribute('key')
        }

        function clearSubTable(e) {
            e.preventDefault();
            $('#sub_input').html('');
        }

    </script>
@endpush
