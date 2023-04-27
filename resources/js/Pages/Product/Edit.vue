<template>
  <form @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-2">
        <label for="item" class="label">Item Name</label>
        <input v-model="form.item" type="text" class="input" placeholder="Item" />
        <div v-if="form.errors.item">
          {{ form.errors.item }}
        </div>
      </div>
      <div class="col-2">
        <label for="desc" class="label">Description</label>
  
        <textarea v-model="form.desc" class="input" placeholder="description" />
        <div v-if="form.errors.desc">
          {{ form.errors.desc }}
        </div>
      </div>
    </div>
    <div class="grid grid-cols-6 gap-4">
      <div class="col-2">
        <label for="quantity" class="label">Quantity</label>
        <input v-model.number="form.quantity" type="number" class="input" placeholder="Quantity" />
        <div v-if="form.errors.quantity">
          {{ form.errors.quantity }}
        </div>
      </div>
      <div class="col-2">
        <label for="unitPrice" class="label">Unit Price</label>
        <input v-model.number="form.unitPrice" type="text" class="input" placeholder="Price" />
        <div v-if="form.errors.unitPrice">
          {{ form.errors.unitPrice }}
        </div>
      </div>
    </div>
    <div class="col-6 mb-2 mt-2">
      <button type="submit" class="btn btn-primary">Edit</button>
    </div>
  </form>
</template>
  
<script setup>
import { useForm } from '@inertiajs/vue3'
const props = defineProps({
  product: Object,
})
const form = useForm ({
  item: props.product.item,
  desc: props.product.desc,
  quantity: props.product.quantity,
  unitPrice: props.product.unitPrice,
})
const update = () => form.put(route('product.update', { product: props.product.id }))
  
</script>
  <style scoped>
  label {
      margin-right:   2em;
  }
  input {
      padding: 2px;
  }
  </style>