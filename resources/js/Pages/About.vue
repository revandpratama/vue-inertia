<template>
    <Main title="inertia - About">
        <h1 class="text-red-300 text-4xl">About</h1>

            <Link href="/home">
                <button class="bg-amber-600 p-1 rounded ms-4 text-white hover:bg-amber-900 hover:text-yellow-100">Home</button>
            </Link>
    </Main>
    
</template>

<script>
    import Main from '../Layouts/Main.vue';
    export default {
        props: [
            'lectures',
            'title'
        ],
        components: {
            Main
        }
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