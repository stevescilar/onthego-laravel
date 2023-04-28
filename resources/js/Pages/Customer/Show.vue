<template>
  <div class="container">
    <Box>
      <CustomerDesc :customer="customer" />
    </Box>
  </div>
</template>

<script setup>
// import { Link } from '@inertiajs/vue3'
import CustomerDesc from '@/Components/CustomerDesc.vue'
import Box from '@/Components/UI/Box.vue'
// import Price from '@/Components/Price.vue'
  
defineProps({
  customer: Object,
})
</script>