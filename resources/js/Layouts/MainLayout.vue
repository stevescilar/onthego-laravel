<template>
  <header class="bg-gray-800 text-gray-200 border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('product.index')">Products</Link>  
        </div>
        
        <div class="text-xl text-green-600 dark:text-green-700 font-bold tex-center">
          <Link :href="route('product.index')">OntheGo</Link>
        </div>

        <div class="">
          <Link :href="route('product.create')" class="btn btn-primary"> +New Listing</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container max-auto p-4">
    <div v-if="flashSuccess" class="success">
      {{ flashSuccess }}
    </div>
    <slot>Default</slot>
  </main>
</template>
<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

// from the handleinertiarequests middleware we use the data here
const flashSuccess =  computed(
  () => usePage().props.flash.success,
)
</script>
