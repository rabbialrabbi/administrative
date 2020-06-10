function SectionClass(section) {
    this.sectionNameBangla = Object.values(section.sectionName);
    this.sectionNameEnglish= Object.keys(section.sectionName);
    this.tableData = section.table;
    this.pageCount = '';

    this.setPageCount = function (count) {
        this.pageCount = count
    }
    this.debug = function () {
        return this.sectionNameEnglish
    }

    this.loadWindowData = function (info) {

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
        if(info && info.CodeListKey){
            window.CodeListKey = info.CodeListKey
        }else{
            window.CodeListKey = 0
        }
    }

    this.currentPage = function (info) {
        var currentPage = '';

        if(info && info.currentPage){
            currentPage = info.currentPage
        }else{
            currentPage = 1
        }

        return currentPage
    }

    this.show = function (info) {
        var table = '';
        table+= this.insertHeader();

        table+= `<div class="row sub_table-body">
                                <table>`
        table+= this.generateShow(info)

                               table+=` </table>
                            </div>
                            <div class=" row sub_table-bottom">
                                <div class="row sub_table-button">
                                <div class="col-8"><p>Message: <span id="message"></span></p></div>
                                <div class="col-4">
                                    <button id="edit">এডিট</button>
                                    <button id="destroy" key=${info[this.sectionNameEnglish+'Code']}>ডিলিট</button></div>
                                </div>
                            </div>
                            </div>`;


        /* Insert Data to main table*/
        $('#sub_input').html(table);

        this.destroy();
        this.edit(info);
    }

    this.generateShow= function (info) {
        let table ='';
        let data = '';
            for (var key in info) {
                let i = 0;
                if (typeof info[key] !== 'object') {
                    table += `<tr>
                          <th>${this.tableData[key]}</th>
                          <td class="clone">:</td>
                          <td>${info[key]}</td>
                      </tr>`
                }else {
                    data = info[key];
                    table += `<tr>
                          <th>${this.tableData[key]}</th>
                          <td class="clone">:</td>
                          <td>`
                    for (var k in data){
                        if(i===0){
                            table += `${data[key]}`
                        }
                        i++;
                    }
                    table+= `</td>
                      </tr>`

                }
        }
        return table
    }

    this.edit = function(info) {
       let tableData = this.tableData
       let sectionName = this.sectionNameEnglish.toString().toLowerCase()
        console.log(sectionName)
       let insertHeader = this.insertHeader()
       let generateEdit= function (info) {
            let table ='';
            let data = '';
            let i = 0;
            for (var key in info) {
                i = 0;
                if (typeof info[key] !== 'object') {
                    table += `<tr>
                          <th>${tableData[key]}</th>
                          <td class="clone">:</td>
                          <td><input type="text" name="${key}" value="${info[key]}"></td>
                      </tr>`
                }else {
                    data = info[key];
                    table += `<tr>
                          <th>${tableData[key]}</th>
                          <td class="clone">:</td>
                          <td>`
                    for (var k in data){
                        if(i===0){
                            table += `<input type="text" name="${k}" value="${data[k]}" disabled>`
                        }else {
                            table += `<input type="hidden" name="${k}" value="${data[k]}">`
                        }
                        i++;
                    }
                    table+= `</td>
                      </tr>`
                }
            }
            return table
        }

        $('#edit').click(function () {
            var table = '';
            table+= insertHeader;
            table += `<form id="updateUpazila" action="">
                            <div class="row sub_table-body">
                                <table>`
                              table+= generateEdit(info);
                              table+=  `</table>
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
                axios.patch('/'+sectionName+'/update',info).then((response)=>{
                    $('#message').html(response.data)
                    mainTableInsert(window.currentPage);
                }).catch((error)=>{
                    $('#message').html(error);
                    console.log(error)
                })
            });
        })
    }

   this.destroy = function () {
       let sectionName = this.sectionNameEnglish.toString().toLowerCase()
        /* Ajex call for Delete record*/
        $('#destroy').click(function () {
            key = $(this).attr('key');
            if(confirm("Want to delete table")){
                axios.delete('/'+sectionName+'/'+key).then((response)=>{
                    $('#message').html(response.data)
                    mainTableInsert(window.currentPage);
                    $('#sub_input').html('');
                }).catch((error)=>{
                    $('#message').html(error)
                    console.log(error)
                })
            }
        });
    }

   this.insertHeader = function(){
        return `<div class="row body_top">
                                <div class="col-2"><h3>প্রশাসনিক</h3></div>
                                <div class="col-1 clone">:</div>
                                <div class="col-8"><h3>${this.sectionNameBangla}</h3></div>
                            </div>`
    }

    this.counter = function (currentPage) {
        let i = '';
        if(currentPage === 'lastPage'){
            i = (this.pageCount-1)<0 ? 0: (this.pageCount-1)*10
        }else {
            i = (currentPage-1)<0 ? 0:(currentPage-1)*10;
        }
        return i;
    }

    this.errorHandler = function (error) {
        let errStatusCode = error.response.status
        let errStatusText = error.response.statusText
        let requestUrl = error.response.request.responseURL
        let table = '';
        table+= `<div style="text-align: center;transform: translateY(50%);">
                    <h2 style="color: red">${errStatusCode + ' - '+ errStatusText}</h2>
                    <p style="color: brown">Url: ${requestUrl}</p>
                    </div>`;
        return table;
    }

}
