@extends('layouts.adminLayout')
<?php $sectionType= 'এলাকা' ?>

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

        let area = new SectionClass({
            'sectionName':{'Area':'{{ $sectionType }}'},
            'table':{
                'AreaId':'আই ডি',
                'DivisionCode':'বিভাগ কোড',
                'DistrictCode':'জেলা কোড',
                'UpazilaCode':'উপজেলা কোড',
                'AreaCode':'এলাকা কোড',
                'AreaNameEnglish':'এলাকা নাম (ইংলিশ)',
                'AreaNameBangla':'এলাকা নাম (বাংলা)',
                'Note':'নোট',
                'RecordStatus':'রেকর্ড স্ট্যাটার্স',
                'RecordVersion':'রেকর্ড ভার্সন',
                'DivisionNameBangla':'বিভাগ',
                'AreaTypeNameBangla':'এলাকা ধরন',
                'DistrictNameBangla':'জেলা',
                'UpazilaNameBangla':'উপজেলা',
            }
        });

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
        function loadPagination(info=false) {
            area.loadWindowData(info)
            let currentPage = area.currentPage(info);

            axios.get('/area/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

                area.setPageCount(response.data['count'])

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
                $('#indexData').html(error)
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

               let info = { DivisionNameBangla :{
                               DivisionNameBangla:$(this).attr('DivisionNameBangla'),
                               DivisionCode : $(this).attr('DivisionCode'),
                            } ,
                            DistrictNameBangla : {
                                DistrictNameBangla:$(this).attr('DistrictNameBangla'),
                                DistrictCode : $(this).attr('DistrictCode')
                            },
                            UpazilaNameBangla :{
                                UpazilaNameBangla:$(this).attr('UpazilaNameBangla'),
                                UpazilaCode : $(this).attr('UpazilaCode'),
                            },
                            AreaTypeNameBangla : {
                                AreaTypeNameBangla:$(this).attr('AreaTypeNameBangla'),
                                AreaTypeCode: $(this).attr('AreaTypeCode')
                            },
                            AreaId : $(this).attr('AreaId'),
                            AreaCode : $(this).attr('AreaCode'),
                            AreaNameEnglish : $(this).attr('AreaNameEnglish'),
                            AreaNameBangla : $(this).attr('AreaNameBangla'),
                            Note : $(this).attr('Note'),
                            RecordStatus : $(this).attr('RecordStatus'),
                            RecordVersion : $(this).attr('RecordVersion')
               }

                    area.show(info);

                });
            }).catch((error)=>{
                $('#indexData').html("Ajex Call for load table data");
                console.log(error)
            });
        }


        function filterDistrict(response) {
            let currentPage = window.currentPage;
            let table = '';
            let i = area.counter(currentPage);
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
                            'DivisionKey':0,
                            'DistrictKey':0,
                            'UpazilaKey':0
                        });
                        inputFormField();
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

            table+= area.insertHeader();
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
                                        <th>এলাকা ধরন</th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
@endpush
