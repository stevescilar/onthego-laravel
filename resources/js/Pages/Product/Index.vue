<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
    <Box v-for="product in products" :key="product.id">
      <div>
        <Link :href="route('product.show', {product: product.id})">
          
          <ProductDesc :product="product" />
          <Price :price="product.unitPrice" class="text-sm font-bold text-sky-700" />
        </Link>
      </div> 
      <div>
        <Link :href="route('product.edit', {product: product.id})" class="btn btn-success">Edit</Link>  | 
        <Link :href="route('product.destroy', {product: product.id})" class="btn btn-warning" method="DELETE" as="button">Delete</Link>
      </div>
    </Box>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import ProductDesc from '@/Components/ProductDesc.vue'
import Box from '@/Components/UI/Box.vue'
import Price from '@/Components/Price.vue'

defineProps({
  products: Array,
})
</script>