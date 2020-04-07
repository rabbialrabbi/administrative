<template>
    <div>
        <div class="row sub_table-body">
            <table >
                <tr>
                    <th>এলাকা ধরন আই ডি</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.AreaTypeId}}</td>
                </tr>
                <tr>
                    <th>এলাকা ধরন কোড</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.AreaTypeCode}}</td>
                </tr>
                <tr>
                    <th>এলাকা ধরন নাম (ইংলিশ)</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.AreaTypeNameEnglish}}</td>
                </tr>
                <tr>
                    <th>এলাকা ধরন নাম (বাংলা)</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.AreaTypeNameBangla}}</td>
                </tr>
                <tr>
                    <th>নোট</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.Note}}</td>
                </tr>
                <tr>
                    <th>রেকর্ড স্ট্যাটাস</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.RecordStatus}}</td>
                </tr>
                <tr>
                    <th>রেকর্ড ভার্সন</th>
                    <td class="clone">:</td>
                    <td>{{areaDetails.RecordVersion}}</td>
                </tr>
            </table>
        </div>
        <div class=" row sub_table-bottom">
            <div class="row sub_table-button">
                <div class="col-8"><p>Message: <span id="message"></span></p></div>
                <div class="col-4">
                    <button id="editDivision" @click="loadAreaEdit()">এডিট</button>
                    <button id="deleteDivision" key=${AreaType[0].AreaTypeCode}>ডিলিট</button></div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        props:{
            areaDetails:{
                default:{}
            },
            loadAreaEdit:Function,
        }
    }
</script>

<style scoped>

</style>
