<template>
    
            <div class="mt-14"></div>

            <Link href="/home">
                <button class="bg-amber-600 p-1 rounded ms-4 text-white hover:bg-amber-900 hover:text-yellow-100">Home</button>
            </Link>
            <div>
                <span>This is about page</span>
            </div>
            
    
    
</template>

<script>
    import Main from '../Layouts/Main.vue';
    export default {
        layout: Main,

        props: [
            'lectures',
            'title'
        ],
        
    }
</script>

<script setup>

// Init flowbite to make flowbite component Js work even without page reload
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';
    onMounted(() => {
        initFlowbite();
    });




</script>