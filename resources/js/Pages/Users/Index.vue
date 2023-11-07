<template>
    <Head title="Users" />

    <div class="flex justify-between mb-4">
        <h1>
            users
        </h1>
        <Link v-if="can.createUser" href="http://localhost/laravel/crm-demo/public/users/create" as="button" class="bg-blue-500 rounded p-2 text-white">Create user</Link>
        <input v-model="search" text="text" placeholder="Search..." class="border px-2 rounded-lg"/>
    </div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tbody>
                <tr v-for="user in users.data" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ user.name }}<br/>
                    </th>
                    <td v-if="user.can.edit" class="px-6 py-4">
                        <Link :href="`http://localhost/laravel/crm-demo/public/users/${user.id}/edit`">Edit</Link>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <Pagination :links="users.links"/>
    </div>

        <div class="mt-[120vh]">
            <p>The current time is {{ time }}</p>
            <Link class="text-blue-700" href="http://localhost/laravel/crm-demo/public/users" preserve-scroll>Refresh</Link>
        </div>

</template>

<script setup>
import Pagination from '@/Components/Pagination.vue';
import NewLayout from '@/Layouts/NewLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, watch } from "vue";
import { router } from '@inertiajs/vue3'
import debounce from "lodash/debounce"

defineOptions({
    layout: NewLayout,
});

let props = defineProps({
    time: {
        type: Date,
    },
    users: {
        type: Object
    },
    filters: {
        type: Object
    },
    can: {
        type: Object
    }
});

let search = ref(props.filters.search);

watch(search, debounce(function (value) {
    router.get('http://localhost/laravel/crm-demo/public/users', { search: value }, {
        preserveState: true,
        replace: true
    })
}, 500))
</script>