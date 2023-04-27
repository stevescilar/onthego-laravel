<template>
  <div>
    <h3>Invoice is on the Go</h3>
            
    <div>
      <p>This is from the Home Controller <span style="color:blue;">{{ message }}</span></p>
    </div>
  </div>
</template>

<!-- logic section -->
<script setup>
defineProps(['message'])
</script>
