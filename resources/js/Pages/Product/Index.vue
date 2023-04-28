<template>
  <Box class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 outline-1">
      <thead class="text-xs text-gray-700 uppercase bg-sky-300 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="p-4">
            <div class="flex items-center">
              SN
            </div>
          </th>
          <th scope="col" class="px-6 py-3">Product Name</th>
          <th scope="col" class="px-6 py-3">Description</th>
          <th scope="col" class="px-6 py-3">Quantity</th>
          <th scope="col" class="px-6 py-3">unit Price</th>
          <th scope="col" class="px-6 py-3">Total Cost</th>
          <th scope="col" class="px-6 py-3">Action</th>

        </tr>
      </thead>
      <tbody v-for="product in products" :key="product.id">
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td class="w-4 p-4"><div class="flex items-center">{{ product.id }}</div></td>
          <Link :href="route('product.show', {product: product.id})">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap dark:text-white">{{ product.item }} </td>
          </Link>
                    
          <td class="px-2 py-4">{{ product.desc }}</td>
          <td class="px-2 py-4">{{ product.quantity }}</td>
          <td class="px-6 py-4"><Price :price="product.unitPrice" class="text-sm font-bold text-sky-700" /></td>
          <td class="px-6 py-4">NUll</td>
          <td class="px-6 py-4">
            <Link :href="route('product.edit', {product: product.id})" class="btn btn-success">Edit</Link>  | 
            <Link :href="route('product.destroy', {product: product.id})" class="btn btn-warning" method="DELETE" as="button">Delete</Link>
          </td>


        </tr>
      </tbody>
    </table>
  </Box>


  <!-- <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
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
  </div> -->
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
// import ProductDesc from '@/Components/ProductDesc.vue'
import Box from '@/Components/UI/Box.vue'
import Price from '@/Components/Price.vue'

defineProps({
  products: Array,
})
</script>