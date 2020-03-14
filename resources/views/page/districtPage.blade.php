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
            @foreach($district as $d)
                <?php $i++ ?>
                <tr id="divi-table-{{$i}}" class="divi-table"><td>{{$i}}</td>
                    <td>{{$d->DistrictId}}</td>
                    <td>{{$d->DistrictCode}}</td>
                    <td>{{$d->DistrictNameEnglish}}</td>
                    <td>{{$d->DistrictNameBangla}}</td>
                    <td>{{$d->Note}}</td>
                    <td>{{$d->RecordStatus}}</td>
                    <td>{{$d->RecordVersion}}</td>
                    <td>
                        <i id="divi-but-{{$i}}" key="{{$d->DistrictCode}}" class="fas fa-eye"></i></td>
                </tr>

            @endforeach

        </table>
    </div>

    <div class="row body_pagination">
        <div class="col-8 d-flex justify-content-center">{{$district->links()}}</div>
        <div class="col-4">
            <button id="addDivision">Add</button>
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
                                <div class="col-8"><p>Message: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <button id="editDivision">Edit</button>
                                    <button id="deleteDivision" key=${division[0].DivisionCode}>Delete</button></div>
                                </div>
                            </div>
                            <div>`;
                    $('#sub_input').html(table);

                    $('#deleteDivision').click(function () {
                        key = $(this).attr('key');
                        axios.delete('/division/'+key).then((response)=>{
                            $('#message').html(response.data)
                        }).catch((error)=>{
                            $('#message').html(error)
                        })
                    })
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
                                <div class="col-8"><p>Messages: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <input type="submit" name="submit" value="Save">
                                </div>
                            </div>
                            <div>
</form>`;
                        $('#sub_input').html(table);

                        $('#saveDivision').submit(function (event) {
                            event.preventDefault();
                            var info = $('#saveDivision').serialize();
                            axios.patch('/division/edit',info).then((response)=>{
                                $('#message').html(response.data)
                            }).catch((error)=>{
                                $('#message').html(error)
                            })
                        })
                    })
                })
            });
            $('#addDivision').click(function () {
                var table = '';
                table+=`<div class="row body_top">
                                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                                <div class="col-1 clone">:</div>
                                <div class="col-8"><h3>District</h3></div>
                            </div>
                            <form id="addDivisionForm">
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
                                    <input id='addDivisionSubmit' type="submit" name="submit" placeholder="Save">
                                </div>
                            </div>
                            <div>
                          </form>`;
                $('#sub_input').html(table);

                $('#addDivisionForm').submit(function (event) {
                    event.preventDefault();
                    var info = $('#addDivisionForm').serialize();
                    axios.post('/division/create',info).then((response)=>{
                        $('#message').html(response.data)
                    }).catch((error)=>{
                        $('#message').html(error)
                    })
                })
            })


        })

    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endpush

