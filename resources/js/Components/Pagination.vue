<template>
    <template v-if="false" v-for="link in users.links">
            <Link v-if="link.url" :href="link.url" v-html="link.label"></Link>

            <span v-else v-html="link.label"></span>
    </template>
    <Component :is="link.url ? 'Link' : 'span'"
            v-for="link in links"
            :href="link.url"
            v-html="link.label"
            class="px-1"
            :class="{ 'text-gray-500': !link.url, 'font-bold' : link.active }"
            preserve-scroll
    />
</template>

<script setup>
import NewLayout from '@/Layouts/NewLayout.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({
    layout: NewLayout,
});

defineProps({
    links: {
        type: Array
    }
});
</script>