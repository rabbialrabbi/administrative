<template>
    <table>
        <tr>
            <th>এলাকা ধরন আই ডি</th>
            <td class="clone">:</td>
            <slot name="id"></slot>
        </tr>
        <tr>
            <th>এলাকা ধরন কোড</th>
            <td class="clone">:</td>
            <slot name="code"></slot>
        </tr>
        <tr>
            <th>এলাকা ধরন নাম (ইংলিশ)</th>
            <td class="clone">:</td>
            <slot name="nameEnglish"></slot>
        </tr>
        <tr>
            <th>এলাকা ধরন নাম (বাংলা)</th>
            <td class="clone">:</td>
            <slot name="nameBangla"></slot>
        </tr>
        <tr>
            <th>নোট</th>
            <td class="clone">:</td>
            <slot name="note"></slot>
        </tr>
        <tr>
            <th>রেকর্ড স্ট্যাটাস</th>
            <td class="clone">:</td>
            <slot name="status"></slot>
        </tr>
        <tr>
            <th>রেকর্ড ভার্সন</th>
            <td class="clone">:</td>
            <slot name="version"></slot>
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
