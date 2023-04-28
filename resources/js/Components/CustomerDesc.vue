<template>
  <div>
    <h3 class="w-full text-ld text-center font-bold">Customer Details</h3>
  </div>
  <span class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">Customer Name</th>
          <th scope="col" class="px-6 py-3">Company Name</th>
          <th scope="col" class="px-6 py-3">Email</th>
          <th scope="col" class="px-6 py-3">Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ customer.name }} </td>
          <td class="px-2 py-4">{{ customer.company_name }}</td>
          <td class="px-2 py-4">{{ customer.email }}</td>
          <td class="px-6 py-4">{{ customer.contact }}</td>
        </tr>
      </tbody>
    </table>
  </span>
</template>
  
<script setup>
defineProps({
  customer: Object,
})
</script>