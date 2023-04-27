<template>
  <div> 
    <ProductDesc :product="product" />
  </div>
</template>
  
<script setup>
import ProductDesc from '@/Components/ProductDesc.vue';
defineProps({
  product: Object,
})
</script>