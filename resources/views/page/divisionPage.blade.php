@extends('layouts.adminLayout')

@section('title','Admin')
@section('body')


    {{--***************************
            @ Table data
     ***************************** --}}
    <div class="row body_top">
        <div class="col-2"><h3>প্রশাসনিক</h3> </div>
        <div class="col-1 clone">:</div>
        <div class="col-8"><h3>বিভাগ</h3></div>
    </div>
    <div class="row body_search-panel">
        <div class="col-8"></div>
        <div class="col-4">
            <input type="text">
            <input type="text">
            <span class="dropdownIcon">...</span>
        </div>
    </div>

    <div id="indexData" class="row body_bottom">

    </div>

    <div class="row body_pagination">
        <div class="col-8"></div>
        <div class="col-4">
            <button id="addDivision">অ্যাড</button>
        </div>
    </div>

    {{--***************************
        @ Sub Table Body
    ***************************** --}}

    <div id="sub_input"></div>
    @endsection

{{--***************************
        @ Sub Table data
 ***************************** --}}

@push('customJs')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script>
        $(document).ready(function () {

            /* Load data to main table with relevant click event*/
            mainTableInsert();

            /* Add division field to sub table*/
            $('#addDivision').click(function () {
                var table = '';
                table+= insertHeader();
                table+=inputFormField();

                /* Insert Data to main table*/
                $('#sub_input').html(table);

                /* Ajex call for add data to database*/
                $('#addDivisionForm').submit(function (event) {
                    event.preventDefault();
                    var info = $('#addDivisionForm').serialize();
                    axios.post('/division/create',info).then((response)=>{
                        $('#message').html(response.data);
                        mainTableInsert();
                        $('#sub_input').html(table);

                    }).catch((error)=>{
                        $('#message').html(error)
                    })
                })
            })
        })

        {{--************************************************************
                    @  This function Run ajex call for input main table data
                    @ Input Receive data to main Table
                    @ Includes Click Event To Show Details in sub Table
            ************************************************************ --}}
        function mainTableInsert(){

            /* Ajex Call with Axios */
            axios.get('/division/view').then((response)=>{

                let info = response.data;
                let table="";
                let i=0;

                table+=`
                <table>
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
<td><i id="divi-but-${i}" key="${data.DivisionCode}" class="fas fa-eye"></i></td></td>
                      </tr>`
                   });
               table+=`</table>`;

               /* Insert Data to main table*/
               $('#indexData').html(table);

               /* Click Event for show Details in sub Table*/
                $('.divi-table i').on('click',function(){
                    var key = $(this).attr('key');
                    axios.get('/division/'+key).then((response)=>{

                        var division = response.data;
                        var table = '';
                        table+= insertHeader();
                        table+=`
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>বিভাগ আই ডি</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].DivisionId}</td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ কোড</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].DivisionCode}</td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].DivisionNameEnglish}</td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].DivisionNameBangla}</td>
                                    </tr>
                                    <tr>
                                        <th>নোট</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].Note}</td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড স্ট্যাটাস</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].RecordStatus}</td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড ভার্সন</th>
                                        <td class="clone">:</td>
                                        <td>${division[0].RecordVersion}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Message: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <button id="editDivision">এডিট</button>
                                    <button id="deleteDivision" key=${division[0].DivisionCode}>ডিলিট</button></div>
                                </div>
                            </div>
                            <div>`;

                        /* Insert Data to main table*/
                        $('#sub_input').html(table);

                        /* Ajex call for Delete record*/
                        $('#deleteDivision').click(function () {
                            key = $(this).attr('key');
                            axios.delete('/division/'+key).then((response)=>{
                                $('#message').html(response.data)
                                mainTableInsert();
                            }).catch((error)=>{
                                $('#message').html(error)
                            })
                        });

                        /* Click Event for Edit record*/
                        $('#editDivision').click(function () {
                            var table = '';
                            table+= insertHeader();
                            table+=`
                            <form id="saveDivision" action="">
                            <div class="row sub_table-body">
                                <table>
                                    <tr>
                                        <th>বিভাগ আই ডি</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionId" value="${division[0].DivisionId}"></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ কোড</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionCode" value="${division[0].DivisionCode}"></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ নাম (ইংলিশ)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionNameEnglish" value="${division[0].DivisionNameEnglish}"></td>
                                    </tr>
                                    <tr>
                                        <th>বিভাগ নাম (বাংলা)</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="DivisionNameBangla" value="${division[0].DivisionNameBangla}"></td>
                                    </tr>
                                    <tr>
                                        <th>নোট</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="Note" value="${division[0].Note}"></td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড স্ট্যাটাস</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="RecordStatus" value="${division[0].RecordStatus}"></td>
                                    </tr>
                                    <tr>
                                        <th>রেকর্ড ভার্সন</th>
                                        <td class="clone">:</td>
                                        <td><input type="text" name="RecordVersion" value="${division[0].RecordVersion}"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Messages: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <input type="submit" name="submit" value="অ্যাড">
                                </div>
                            </div>
                            <div>
                        </form>`;

                        /* Insert Data to sub table*/
                            $('#sub_input').html(table);

                            /* Ajex call for Update record*/
                            $('#saveDivision').submit(function (event) {
                                event.preventDefault();
                                var info = $('#saveDivision').serialize();
                                axios.patch('/division/edit',info).then((response)=>{
                                    $('#message').html(response.data)
                                    mainTableInsert();
                                }).catch((error)=>{
                                    $('#message').html(error)
                                })
                            })
                        })
                    })
                });
            }).catch((error)=>{
                $('#indexData').html("Ajex Call for load table data");
            });
        }

        {{--************************************************************
                    @ This function Only Return Table header data
            ************************************************************ --}}
        function insertHeader(){
            return `<div class="row body_top">
                                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                                <div class="col-1 clone">:</div>
                                <div class="col-8"><h3>বিভাগ</h3></div>
                            </div>`
        }


        {{--************************************************************
                    @ This function return imput form Field
            ************************************************************ --}}
        function inputFormField() {
            return `<form id="addDivisionForm">
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
                                </table>

                            </div>
                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Messages: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <input id='addDivisionSubmit' type="submit" name="submit" value="অ্যাড">
                                </div>
                            </div>
                            <div>
                          </form>`
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @endpush
