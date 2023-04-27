<template>
  <div v-for="product in products" :key="product.id">
    <Link :href="`/product/${product.id}`">
      <ProductDesc :product="product" />
    </Link> 
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ProductDesc from '@/Components/ProductDesc.vue'
defineProps({
  products: Array,
})
</script>