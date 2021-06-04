<template>
    <table>
        <tr>
            <th>বিভাগ আই ডি</th>
            <td class="clone">:</td>
            <slot name="DivisionId"></slot>
        </tr>
        <tr>
            <th>বিভাগ কোড</th>
            <td class="clone">:</td>
            <slot name="DivisionCode"></slot>
        </tr>
        <tr>
            <th>বিভাগ নাম (ইংলিশ)</th>
            <td class="clone">:</td>
            <slot name="DivisionNameEnglish"></slot>
        </tr>
        <tr>
            <th>বিভাগ নাম (বাংলা)</th>
            <td class="clone">:</td>
            <slot name="DivisionNameBangla"></slot>
        </tr>
        <tr>
            <th>নোট</th>
            <td class="clone">:</td>
            <slot name="Note"></slot>
        </tr>
        <tr>
            <th>রেকর্ড স্ট্যাটাস</th>
            <td class="clone">:</td>
            <slot name="RecordStatus"></slot>
        </tr>
        <tr>
            <th>রেকর্ড ভার্সন</th>
            <td class="clone">:</td>
            <slot name="RecordVersion"></slot>
        </tr>
    </table>
</template>

<script>
    export default {
        name: "areaSubtable"
    }
</script>

<style scoped>

</style>
