<template>
  <form @submit.prevent="update">
    <div class="row">
      <div class="col">
        <label for="item">Item Name</label>
        <input v-model="form.item" type="text" class="form-control" placeholder="Item" />
        <div v-if="form.errors.item">
          {{ form.errors.item }}
        </div>
      </div>
      <div class="col">
        <label for="desc">Description</label>
  
        <textarea v-model="form.desc" class="form-control" placeholder="description" />
        <div v-if="form.errors.desc">
          {{ form.errors.desc }}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="quantity">Quantity</label>
        <input v-model.number="form.quantity" type="number" class="form-control" placeholder="Quantity" />
        <div v-if="form.errors.quantity">
          {{ form.errors.quantity }}
        </div>
      </div>
      <div class="col">
        <label for="unitPrice">Unit Price</label>
  
        <input v-model.number="form.unitPrice" type="text" class="form-control" placeholder="Price" />
        <div v-if="form.errors.unitPrice">
          {{ form.errors.unitPrice }}
        </div>
      </div>
    </div>
    <div>
      <button type="submit">Edit</button>
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