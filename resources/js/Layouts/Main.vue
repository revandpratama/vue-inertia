<script setup>
import { Link } from '@inertiajs/vue3'

</script>

<template>
  <main>
    <header>
      <Link href="/home" as="button" class="bg-slate-300 mx-1 p-1 rounded border-2 border-black hover:bg-slate-500">Home</Link>
      <Link href="/about" as="button" class="bg-slate-300 mx-1 p-1 rounded border-2 border-black hover:bg-slate-500">About</Link>
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
    export default {
        props: {
            title: String
        },
        watch: {
            title: {
                immediate: true,
                handler(title) {
                    document.title = title
                },
            },
        },
    }
</script>