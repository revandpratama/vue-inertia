
<template>
    <Main title="Home - Inertia">

        <h1 class="text-4xl font-medium">HelloWorld {{ title }}</h1>
        <h3 v-for="lecture in lectures" :key="lecture">
            {{ lecture }}
        </h3>
    
        <Link href="/about">about</Link>  
    </Main>
    
</template>

<script>
    import Main from '../Layouts/Main.vue'
    export default{
        props: [
            'lectures',
            'title'
        ],
        components: {
            Main
        }
    }
</script>