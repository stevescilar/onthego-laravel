<template>
  <Link href="/">OntheGo</Link>&nbsp;
  <Link href="/about">About</Link>&nbsp;
  <!-- <Link href="/products">Product</Link> -->

  <!-- <div>Time Spent onsite {{ timer }}</div> -->
  <slot>Default</slot>
</template>
<script setup>
import { Link } from '@inertiajs/vue3'
// import { ref } from 'vue'

// const timer = ref(0)
// setInterval(() => timer.value++, 1000)
</script>

