<template>
    
        <div class="my-4 mt-16">
            <span class="text-4xl font-medium">Edit Account {{ user.name }}</span>
            <hr class="my-3">
            <div class="flex justify-center" v-if="$page.props.flash.accountUpdate">
                <Alert type="success" closable class="w-1/3">{{ $page.props.flash.accountUpdate }}</Alert>
            </div>
            <div class="justify-center flex flex-shrink-0">
                <form @submit.prevent="update" class="w-1/3 mt-10">
                    <input type="hidden" name="" v-model="form.id">
                    <Input
                        size="md"
                        placeholder="enter your name"
                        label="Name"
                        v-model="form.name"
                        
                        
                        
                    />
                    
                    <Input
                        size="md"
                        placeholder="enter your first username"
                        label="Username"
                        v-model="form.username"
                        
                        
                    />
                    <Input
                        size="md"
                        placeholder="enter your first email"
                        label="Email"
                        v-model="form.email"
                        
                        
                    />
                    <button type="submit" class="bg-blue-500  hover:bg-blue-600 text-white px-2 py-1 rounded-md mt-5 ms-auto">Edit Account</button>
                    
                </form>
            </div>
        </div>
    
</template>

<script>
import Main from "../Layouts/Main.vue";

export default {
    layout: Main,

    data() {
        Active: true
    },

};
</script>

<script setup>
import { Input, Alert } from "flowbite-vue";
import { computed, reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'

const page = usePage();
const user = computed(() => page.props.auth.user);

const form = computed(() => {
    return {
        id: user.value.id,
        name: user.value.name,
        username: user.value.username,
        email: user.value.email,
    }
});

function update() {
    router.put('/edit', form.value);
}

</script>
