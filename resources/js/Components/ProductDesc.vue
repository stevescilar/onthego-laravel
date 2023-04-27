<template>
  <span>
    {{ product.item }} | {{ product.desc }} | {{ product.quantity }} |
  </span>
</template>

<script setup>
defineProps({
  product: Object,
})
</script>