<script setup>
import NavLink from '../Components/NavLink.vue';

defineProps({
    name: {
        type: String,
    },

});
</script>

<template>
    <nav class="bg-black text-white flex justify-between items-center py-2">
        <Link class="p-4" href="http://localhost/laravel/crm-demo/public/">Home</Link>
        <p>Welcome back, {{ $page.props.auth.user.name }}</p>
        <ul class="flex [&>li]:p-4">
            <li>
                <NavLink href="http://localhost/laravel/crm-demo/public/" :active="$page.component ==='Welcome'">Home</NavLink>
            </li>
            <li>
                <NavLink href="http://localhost/laravel/crm-demo/public/users" :active="$page.component ==='Users'">Users</NavLink>
            </li>
            <li>
                <NavLink href="http://localhost/laravel/crm-demo/public/settings" :active="$page.component ==='Settings'">Settings</NavLink>
            </li>
            <!--<li><Link href="http://localhost/laravel/crm-demo/public/logout" :data="{ foo: 'bar' }" method="post" as="button">Logout</Link></li>
            -->
            <li><Link href="http://localhost/laravel/crm-demo/public/logout" method="post">Logout</Link></li>
        </ul>
    </nav>
</template>
