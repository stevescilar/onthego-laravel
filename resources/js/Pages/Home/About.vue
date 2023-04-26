<template>
    <MainLayout>
        <div>
        <h3>About</h3>
            
            <div>
                <p>This is from the Home Controller <span style="color:blue;">{{ message }}</span></p>
            </div>
        </div>
    </MainLayout>
    
</template>



<!-- logic section -->
<script setup>
    import MainLayout from '../../Layouts/MainLayout.vue'
    defineProps(['message'])
</script>