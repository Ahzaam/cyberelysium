<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Products from '@/Components/Products.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl text-center py-5 sm:rounded-lg">
                    <h1>Welcome {{ $page.props.user.name }}</h1>
                    <a href="/products" class="btn btn-primary mx-2 my-5">Product Dashboard</a>
                   
                </div>
            </div>
        </div>
    </AppLayout>
</template>
