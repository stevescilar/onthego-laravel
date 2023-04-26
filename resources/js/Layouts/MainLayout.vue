<template>
    
    <Link href="/">OntheGo</Link>&nbsp;
    <Link href="/about">About</Link>
   <slot></slot>
</template>
<script setup>
    import { Link } from '@inertiajs/vue3';
</script>