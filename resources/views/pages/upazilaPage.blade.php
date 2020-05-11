@extends('layouts.adminLayout')

@section('title','উপজেলা')
@section('body')

    @include('layouts.adminBodyLayout',['section'=>'উপজেলা'])

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

            }else if(info && info.DistrictKey){
                window.DistrictKey = info.DistrictKey
            }else{
                window.DivisionKey = 0;
                window.DistrictKey = 0;
            }
            console.log(window.DivisionKey);
            console.log(window.DistrictKey);
            var currentPage = '';
            if(info && info.currentPage){
                currentPage = info.currentPage
            }else{
                currentPage = 1
            }

            axios.get('/upazila/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey
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
            console.log(window.DivisionKey);
            console.log(window.DistrictKey);
            console.log(window.currentPage);
            axios.get('/upazila/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey
                    }
                }
            }).then((response)=>{

                filterDistrict(response);

                $('.divi-table i').on('click',function(){
                    let UpazilaId = $(this).attr('UpazilaId');
                    let UpazilaCode = $(this).attr('UpazilaCode');
                    let DistrictCode = $(this).attr('DistrictCode');
                    let DivisionCode = $(this).attr('DivisionCode');
                    let DivisionNameBangla = $(this).attr('DivisionNameBangla');
                    let DistrictNameBangla = $(this).attr('DistrictNameBangla');
                    let UpazilaNameEnglish = $(this).attr('UpazilatNameEnglish');
                    let UpazilaNameBangla = $(this).attr('UpazilaNameBangla');
                    let Note = $(this).attr('Note');
                    let RecordStatus = $(this).attr('RecordStatus');
                    let RecordVersion = $(this).attr('RecordVersion');

                    var district = response.data;
                    var table = '';
                    table+= insertHeader();
                    table+=`<div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>উপজেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td>${UpazilaId}</td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা কোড</th>
                                        <td class="clone">:</td>
                                        <td>${UpazilaCode}</td>
                                    </tr>
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
                                        <th>উপজেলা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td>${UpazilaNameEnglish}</td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td>${UpazilaNameBangla}</td>
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
                                    <button id="deleteDivision" key=${UpazilaCode}>ডিলিট</button></div>
                                </div>
                            </div>
                            <div>`;

                    /* Insert Data to main table*/
                    $('#sub_input').html(table);

                    /* Ajex call for Delete record*/
                    $('#deleteDivision').click(function () {
                        key = $(this).attr('key');
                        if(confirm("Want to delete table")){
                            axios.delete('/upazila/'+key).then((response)=>{
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
                                        <th>উপজেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaId" value="${UpazilaId}"></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionNameBangla" value="${DivisionNameBangla}" disabled>
                                            <input type="hidden" name="DivisionCode" value="${DivisionCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>জেলা</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictCodeHidden" value="${DistrictNameBangla}" disabled>
                                            <input type="hidden" name="DistrictCode" value="${DistrictCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaCodeHidden" value="${UpazilaCode}" disabled>
                                            <input type="hidden" name="UpazilaCode" value="${UpazilaCode}">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaNameEnglish" value="${UpazilaNameEnglish}"></td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaNameBangla" value="${UpazilaNameBangla}"></td>
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
                            axios.patch('/upazila/update',info).then((response)=>{
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
            let i = '';
            let info = response.data['tableData'];
            let divisionName = response.data['DivisionName'];
            let districtName = response.data['DistrictName'];

            table+=`<table>
                            <tr >
                                <th>ক্রমিক</th>
                                <th>
                                    <select id='dist_filter-button' name="division" onchange="loadPagination({'DivisionKey':this.value})">`;
                                    table+= `<option value="0">বিভাগ</option>`;

                                    divisionName.forEach((data)=>{
                                    table+= `<option value="${data.DivisionNameBangla}">${data.DivisionNameBangla}</option>`
                                    }) ;

                                    table+= `<option value="0">All</option>
                                    </select>
                                </th>`;

                        table+=`<th>
                                    <select id='dist_filter-button' name="division" onchange="loadPagination({'DistrictKey':this.value})">`;
                                    table+= `<option value="0">জেলা</option>\n`;

                                        districtName.forEach((data)=>{
                                    table+= `<option value="${data.DistrictNameBangla}">${data.DistrictNameBangla}</option>`
                                        }) ;

                                    table+= `<option value="0">All</option>
                                    </select>`;
                       table +=`</th>
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
                                   <td>${data.UpazilaId}</td>
                                   <td>${data.UpazilaCode}</td>
                                   <td>${data.UpazilaNameEnglish}</td>
                                   <td>${data.UpazilaNameBangla}</td>
                                   <td>${data.Note}</td>
                                   <td>${data.RecordStatus}</td>
                                   <td>${data.RecordVersion}</td>
                                   <td><i id="divi-but-${i}"
                                   UpazilaId ="${data.UpazilaId}"
                                   UpazilaCode ="${data.UpazilaCode}"
                                   DivisionCode ="${data.DivisionCode}"
                                   DistrictCode ="${data.DistrictCode}"
                                   DivisionNameBangla ="${data.DivisionNameBangla}"
                                   DistrictNameBangla ="${data.DistrictNameBangla}"
                                   UpazilatNameEnglish ="${data.UpazilaNameEnglish}"
                                   UpazilaNameBangla ="${data.UpazilaNameBangla}"
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
                                <div class="col-8"><h3>উপজেলা</h3></div>
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

                    axios.post('/upazila/create',info).then((response)=>{
                        loadPagination({
                            'currentPage':'lastPage',
                            'DivisionKey':window.DivisionKey,
                            'DistrictKey':window.DistrictKey
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
            var table = '';

            table+= insertHeader();
            table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                <tr>
                                        <th>বিভাগ</th>
                                        <td class="clone">:</td>
                                        <td>

                                        <select name="DivisionCode" id="addDivisionList"
onchange="loadDataList('District',this.value);loadWindow('DivisionKey',event)">`;
            DivisionList.forEach((data)=>{
                table+=`<option value="${data.DivisionCode}" key="${data.DivisionNameBangla}">${data.DivisionNameBangla}</option>`
            });

            table+=`</select></td></tr>`;

            table +=`<tr>
                                        <th>জেলা</th>
                                        <td class="clone">:</td>
                                        <td>
                                            <select name="DistrictCode" id="addDistrictList" onchange="loadWindow('DistrictKey',event)">
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaId" ></td>
                                    </tr>


                                    <tr>
                                        <th>উপজেলা কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaCode"></td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaNameEnglish"></td>
                                    </tr>
                                    <tr>
                                        <th>উপজেলা নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="UpazilaNameBangla"></td>
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
