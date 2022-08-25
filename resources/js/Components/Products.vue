<template>
<productscomp>
 
    <h1>Laravel Api with Nuxt 3 Fetch Api Data</h1>
    <ul v-for="product in products" :key="product.id">
      <li>Id: {{ product.id }}</li>
      <li>Name: {{ product.name }}</li>
      <li>Email: {{ product.email }}</li>
    </ul>
 
</productscomp>
 
</template>

<script setup>

const { data: products } = await useAsyncData('users', () =>
  $fetch(`http://localhosst:8000/api/products`)
);
</script>