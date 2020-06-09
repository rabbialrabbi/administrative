
{{--***************************
            @ Table data
     ***************************** --}}
<div class="row body_top">
    <div class="col-2"><h3>প্রশাসনিক</h3> </div>
    <div class="col-1 clone">:</div>
    <div class="col-8"><h3>{{$section}}</h3></div>
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
    <img src="https://cdn.clipart.email/d94ddd93994b3bc30cc1dd53c5e2a09e_spinning-circle-png-gif_480-474.gif" alt="Flowers in Chania" height="80" width="80" style="margin-left: auto;margin-right: auto">
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
