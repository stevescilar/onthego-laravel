<template>
  <form @submit.prevent="create">
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
      <button type="submit">Create</button>
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