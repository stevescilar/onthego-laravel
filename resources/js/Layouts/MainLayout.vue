<template>
  <Link href="/">OntheGo</Link>&nbsp;
  <Link :href="route('product.index')">Products</Link>&nbsp;
  <Link :href="route('product.create')">New Product</Link>&nbsp;
  <Link href="/about">About</Link>&nbsp;

  <div v-if="flashSuccess" class="success">
    {{ flashSuccess }}
  </div>
  <slot>Default</slot>
</template>
<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

// from the handleinertiarequests middleware we use the data here
const flashSuccess =  computed(
  () => usePage().props.flash.success,
)
</script>
<style scoped>
  .success {
    background-color: aquamarine;
    color: blue;
  }
</style>
