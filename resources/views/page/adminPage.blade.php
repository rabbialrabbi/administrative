@extends('layouts.adminLayout')

@section('title','Admin')
@section('body')


    {{--***************************
            @ Table data
     ***************************** --}}
    <div class="row body_top">
        <div class="col-2"><h3>প্রশাসনিক</h3> </div>
        <div class="col-1 clone">:</div>
        <div class="col-8"><h3>District</h3></div>
    </div>
    <div class="row body_search-panel">
        <div class="col-8"></div>
        <div class="col-4">
            <input type="text">
            <input type="text">
            <span class="dropdownIcon">...</span>
        </div>
    </div>

    <div class="row body_bottom">
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
                        <i id="divi-but-{{$i}}" key="{{$d->DivisionCode}}" class="fas fa-eye"></i></td>
                    </tr>

            @endforeach

        </table>
    </div>

    <div class="row body_pagination">
        <div class="col-8"></div>
        <div class="col-4">
            <button>Add</button>
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

            $('.divi-table i').on('click',function(){
                var key = $(this).attr('key');
                axios.get('/division/'+key).then((response)=>{

                    var division = response.data;
                    var table = '';
                    table+=`<div class="row body_top">
                                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                                <div class="col-1 clone">:</div>
                                <div class="col-8"><h3>District</h3></div>
                            </div>

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
                                <div class="col-8"><p>Message: <span id="errMessage"></span></p></div>
                                <div class="col-4">
                                    <button id="editDivision">Edit</button>
                                    <button id="deleteDivision">Delete</button></div>
                                </div>
                            </div>
                            <div>`;
                    $('#sub_input').html(table);
                    $('#editDivision').click(function () {
                        var table = '';
                        table+=`<div class="row body_top">
                                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                                <div class="col-1 clone">:</div>
                                <div class="col-8"><h3>District</h3></div>
                            </div>
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
                                <div class="col-8"><p>Messages: <span id="errMessage"></span></p></div>
                                <div class="col-4">
                                    <input type="submit" name="submit" value="Save">
                                </div>
                            </div>
                            <div>
</form>`;
                        $('#sub_input').html(table);

                        $('#saveDivision').submit(function (event) {
                            event.preventDefault();
                            var info = {};
                            var name = '';
                            var value ='';
                            $("#saveDivision input").each(function(index,element){
                                name =$(element).attr('name');
                                value=$(element).attr('value');
                                info[name]= value;
                            });
                            axios.patch('/division/'+info.DivisionCode,info).then((response)=>{
                                console.log(response.data)
                            }).catch((error)=>{
                                console.log(error)
                            })
                        })
                    })
                })
            })
        })

    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @endpush
