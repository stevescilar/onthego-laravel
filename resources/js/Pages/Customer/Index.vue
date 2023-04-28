<template>
  <Box class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="p-4">
            <div class="flex items-center">
              SN
            </div>
          </th>
          <th scope="col" class="px-6 py-3">Customer Name</th>
          <th scope="col" class="px-6 py-3">Company Name</th>
          <th scope="col" class="px-6 py-3">Email</th>
          <th scope="col" class="px-6 py-3">Contact</th>
        </tr>
      </thead>
      <tbody v-for="customer in customers" :key="customer.id">
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td class="w-4 p-4"><div class="flex items-center">{{ customer.id }}</div></td>
          <Link :href="route('customer.show', {customer: customer.id})">
            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ customer.name }} </td>
          </Link>
                    
          <td class="px-2 py-4">{{ customer.company_name }}</td>
          <td class="px-2 py-4">{{ customer.email }}</td>
          <td class="px-6 py-4">{{ customer.contact }}</td>
        </tr>
      </tbody>
    </table>
  </Box>
</template>
  
<script setup>
import { Link } from '@inertiajs/vue3'

// import CustomerDesc from '@/Components/CustomerDesc.vue'
import Box from '@/Components/UI/Box.vue'
// import Price from '@/Components/Price.vue'
  
defineProps({
  customers: Array,
})
</script>