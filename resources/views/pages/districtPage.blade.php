@extends('layouts.adminLayout')
<?php $sectionType= 'জেলা' ?>
@section('title',$sectionType)
@section('body')

    @include('layouts.adminBodyLayout',['section'=>$sectionType])

@endsection

@push('customJs')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="{{asset('js/Section.js')}}"></script>
    <script src="{{asset('js/pagination.js')}}"></script>
    <script>

        let district = new SectionClass({
            'sectionName':{'District':'{{ $sectionType }}'},
            'table':{
                'DivisionNameBangla':'বিভাগ',
                'DistrictId':'আই ডি',
                'DistrictCode':'কোড',
                'DistrictNameEnglish':'নাম (ইংলিশ)',
                'DistrictNameBangla':'নাম (বাংলা)',
                'Note':'নোট',
                'RecordStatus':'রেকর্ড স্ট্যাটাস',
                'RecordVersion':'রেকর্ড ভার্সন'
            }
        })

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

            district.loadWindowData(info)
            let currentPage = district.currentPage(info);

            axios.get('/district/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

                district.setPageCount(response.data['count'])

                paginator.initPaginator({
                    'previousPage': 'পূর্বের পাতা',
                    'nextPage': 'পরের পাতা',
                    'totalPage': response.data['count'],
                    'triggerFunc': loadTable,
                    'paginationClass': 'custom-paginator'
                });

                mainTableInsert(currentPage);

                function loadTable() {
                    var currentPage = $('.js-paginator').data('pageSelected');
                    mainTableInsert(currentPage)
                }

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
            axios.get('/district/'+currentPage,{
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
                    let info = {
                        DivisionNameBangla : {
                            DivisionNameBangla:$(this).attr('DivisionNameBangla'),
                            DivisionCode : $(this).attr('DivisionCode'),
                        },
                        DistrictId : $(this).attr('DistrictId'),
                        DistrictCode : $(this).attr('DistrictCode'),
                        DistrictNameEnglish : $(this).attr('DistrictNameEnglish'),
                        DistrictNameBangla : $(this).attr('DistrictNameBangla'),
                        Note : $(this).attr('Note'),
                        Image :{
                            isShow:false,
                            Image1:'district/'+$(this).attr("DistrictImage1"),
                            Image2:$(this).attr("DistrictImage2")
                        },
                        RecordStatus : $(this).attr('RecordStatus'),
                        RecordVersion : $(this).attr('RecordVersion'),
                }

                    district.show(info);

                });
            }).catch((error)=>{
                $('#indexData').html("Ajex Call for load table data");
                console.log(error)
            });
        }

        function filterDistrict(response) {
            let currentPage = window.currentPage;
            let table = '';
            let i = district.counter(currentPage);
            let info = response.data['tableData'];
            let divisionName = response.data['DivisionName'];

            table+=`<table>
                            <tr >
                                <th>ক্রমিক</th>
                                <th>
                                <select id='dist_filter-button' name="division" onchange="loadPagination({'DivisionKey':this.value})">`;

            table+= `<option value="0">District</option>\n`;

            divisionName.forEach((data)=>{
                table+= `<option value="${data.DivisionNameBangla}">${data.DivisionNameBangla}</option>\n`
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
                                   DistrictImage1 ="${data.DistrictImage1}"
                                   DistrictImage2 ="${data.DistrictImage2}"
                                   RecordStatus ="${data.RecordStatus}"
                                   RecordVersion ="${data.RecordVersion}"
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
            axios.get('/data/divisionList').then((response)=>{
                let DistrictList = response.data;
                var table = '';

                table+= district.insertHeader();
                table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>জেলা আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DistrictId" ></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ</th>
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
                                    <tr>
                                        <th>ছবি</th>
                                        <td class="clone">:</td>
                                        <td><input id="imageId" type="file" name="image"></td>
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

                    let data = new FormData();
                    let image = document.getElementById('imageId').files[0];
                    var info = $('#addDivisionForm').serializeArray();

                    info.forEach(function (input) {
                        data.append(input.name, input.value)
                    });
                    data.append('image',image);
                    axios.post('/district/create',data).then((response)=>{
                        loadPagination({
                            'currentPage':'lastPage',
                            'DivisionKey':window.DivisionKey,
                            'DistrictKey':window.DistrictKey,
                            'UpazilaKey':window.UpazilaKey
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
