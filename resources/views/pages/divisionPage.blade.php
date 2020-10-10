@extends('layouts.adminLayout')
<?php $sectionType= 'বিভাগ' ?>
@section('title',$sectionType)
@section('body')
    @include('layouts.adminBodyLayout',['section'=>$sectionType])
@endsection

@push('customJs')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="{{asset('js/Section.js')}}"></script>
    <script src="{{asset('js/pagination.js')}}"></script>
    <script>
        let division = new SectionClass({
            'sectionName':{'Division':'{{ $sectionType }}'},
            'table':{
                'DivisionId' :'আই ডি',
                'DivisionCode' :'কোড',
                'DivisionNameEnglish' :'বিভাগ নাম ( ইংলিশ )',
                'DivisionNameBangla' :'বিভাগ নাম ( বংলা )',
                'Note' :'নোট',
                'RecordStatus' :'রেকর্ড স্ট্যাটার্স',
                'RecordVersion' :'রেকর্ড ভার্সন',
            }
        })

        $(document).ready(function () {

            /* Load data to main table with relevant click event*/
            // mainTableInsert();

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
        function loadPagination(info=false) {

            division.loadWindowData(info)
            let currentPage = division.currentPage(info);


            axios.get('/division/'+currentPage,{
                params:{
                    filterKey:{
                        DivisionNameBangla: window.DivisionKey,
                        DistrictNameBangla: window.DistrictKey,
                        UpazilaNameBangla: window.UpazilaKey
                    }
                }
            }).then((response)=>{

                division.setPageCount(response.data['count'])

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
                $('#indexData').html(division.errorHandler(error))
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
            axios.get('/division/'+currentPage,{
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
                        DivisionId :$(this).attr("DivisionId"),
                        DivisionCode :$(this).attr("DivisionCode"),
                        DivisionNameEnglish :$(this).attr("DivisionNameEnglish"),
                        DivisionNameBangla :$(this).attr("DivisionNameBangla"),
                        Note :$(this).attr("Note"),
                        Image :{
                            isShow:false,
                            Image1:'division/'+$(this).attr("DivisionImage1"),
                            Image2:$(this).attr("DivisionImage2")
                        },
                        RecordStatus :$(this).attr("RecordStatus"),
                        RecordVersion :$(this).attr("RecordVersion"),
                    }

                    division.show(info)


                });
            }).catch((error)=>{
                $('#indexData').html(division.errorHandler(error))
            });
        }

        function filterDistrict(response) {
            let currentPage = window.currentPage;
            let table = '';

            let i = division.counter(currentPage);
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
                                   <td>${data.DivisionId}</td>
                                   <td>${data.DivisionCode}</td>
                                   <td>${data.DivisionNameEnglish}</td>
                                  <td>${data.DivisionNameBangla}</td>
                                  <td>${data.Note}</td>
                                  <td>${data.RecordStatus}</td>
                                  <td>${data.RecordVersion}</td>
                                   <td><i id="divi-but-${i}"
                                   DivisionId ="${data.DivisionId}"
                                   DivisionCode ="${data.DivisionCode}"
                                   DivisionNameEnglish ="${data.DivisionNameEnglish}"
                                   DivisionNameBangla ="${data.DivisionNameBangla}"
                                   Note ="${data.Note}"
                                   DivisionImage1 ="${data.DivisionImage1}"
                                   DivisionImage2 ="${data.DivisionImage2}"
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
            var table = '';
            table+= division.insertHeader();
            table+= `<form id="addDivisionForm">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>বিভাগ আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionId" ></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionCode"></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionNameEnglish"></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionNameBangla"></td>
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
                axios.post('/division/create',data).then((response)=>{
                    loadPagination({currentPage:'lastPage'});
                    inputFormField();
                    $('#message').html(response.data);

                }).catch((error)=>{
                    $('#message').html(error);
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
