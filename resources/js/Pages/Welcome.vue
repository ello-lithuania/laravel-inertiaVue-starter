<script setup>
import { Head } from '@inertiajs/vue3';
import {computed} from "vue";
import NewLayout from '@/Layouts/NewLayout.vue';

defineOptions({
    layout: NewLayout,
});

defineProps({
    name: {
        type: String,
    },
    stack: {
        type: Array,
    },

});
</script>

<template>
    <Head title="Welcome" />

    hello world, {{ name }}<br/>
    hello world, {{ $page.props.auth.user_test }}

    <br/>
    <ul>
        <li v-for="framework of stack" v-text="framework"></li>
    </ul>
</template>

<style>

</style>
