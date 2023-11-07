<script setup>
import Navbar from '../Components/Navbar.vue';

defineProps({
    name: {
        type: String,
    },
});
</script>

<template>
    <Navbar :name="name"/>
    <div class="p-4">
        <iframe width="100%" class="mb-6" src="https://www.youtube.com/embed/Qtcqx2pZbrI?si=ZmDlv9x7ELU5oYsE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        
        <slot />
    </div>

    <footer class="bg-black text-white p-4">
        footer, {{ name }}
    </footer>
</template>

