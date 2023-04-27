<template>
    <span>
        {{ product.item }} | {{ product.desc }} | {{ product.quantity }} |Costing {{ product.unitPrice }} 
    </span>
</template>

<script setup>
defineProps({
  product: Object,
})
</script>