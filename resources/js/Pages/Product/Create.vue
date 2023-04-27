<template>
  <form @submit.prevent="create">
    <div class="container">
      <div class="grid grid-cols-6 gap-4">
        <div class="col-span-4">
          <label for="item" class="label">Item Name</label>
          <input v-model="form.item" type="text" class="input" placeholder="Item Name" />
          <div v-if="form.errors.item">
            {{ form.errors.item }}
          </div>
        </div>
        <div class="col-span-2">
          <label for="desc" class="label">Description</label>

          <textarea v-model="form.desc" class="input" placeholder="description" />
          <div v-if="form.errors.desc">
            {{ form.errors.desc }}
          </div>
        </div>
        <div class="col-span-4">
          <label for="quantity" class="label">Quantity</label>
          <input v-model.number="form.quantity" type="number" class="input" placeholder="Quantity" />
          <div v-if="form.errors.quantity">
            {{ form.errors.quantity }}
          </div>
        </div>
        <div class="col-span-2">
          <label for="unitPrice" class="label">Unit Price</label>

          <input v-model.number="form.unitPrice" type="text" class="input" placeholder="Price" />
          <div v-if="form.errors.unitPrice">
            {{ form.errors.unitPrice }}
          </div>
        </div>
        <div>
          <button class="col-span-6 btn btn-primary" type="submit">Create</button>
        </div>
      </div>
    </div>
  </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
 
const form = useForm ({
  item: null,
  desc: null,
  quantity: 0,
  unitPrice: 0,
})
const create = () => form.post(route('product.store'))

</script>
<style scoped>
label {
    margin-right:   2em;
}
input {
    padding: 2px;
}
</style>