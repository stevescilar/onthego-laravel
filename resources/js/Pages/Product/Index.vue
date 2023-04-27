<template>
  <div v-for="product in products" :key="product.id">
    <div>
      <Link :href="route('product.show', {product: product.id})">
        <ProductDesc :product="product" />
      </Link>
    </div> 
    <div>
      <Link :href="route('product.edit', {product: product.id})">Edit</Link>
    </div>
    <div>
      <Link :href="route('product.destroy', {product: product.id})" method="DELETE" as="button">Delete</Link>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ProductDesc from '@/Components/ProductDesc.vue'
defineProps({
  products: Array,
})
</script>