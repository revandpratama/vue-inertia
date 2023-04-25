

<template>
    <Main title="Home - Inertia">
        <h1 class="text-4xl font-medium">HelloWorld {{ title }}</h1>
        <h3 v-for="lecture in lectures" :key="lecture">
            {{ lecture }}
        </h3>

        <div class="w-96 mx-6">
            <span v-if="$page.props.flash.success">
                {{ $page.props.flash.success }}
            </span>

            <form @submit.prevent="regist">
            <div class="mb-6">
                <label
                    for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4"
                    >Name</label
                >
                <input
                    type="text"
                    id="base-input" placeholder="Name" v-model="form.name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
                <div v-if="errors.name">
                    <span class="text-red-600">{{ errors.name }} </span>            
                </div>

                <label
                    for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4"
                    >Username</label
                >
                <input
                    type="text"
                    id="base-input" placeholder="Username" v-model="form.username"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
                <div v-if="errors.username">
                    <span class="text-red-600">{{ errors.username }} </span>            
                </div>

                <label
                    for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4"
                    >Email</label
                >
                <input
                    type="email"
                    id="base-input" placeholder="Email" v-model="form.email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
                <div v-if="errors.email">
                    <span class="text-red-600">{{ errors.email }} </span>            
                </div>

                <label
                    for="base-input"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4"
                    >Password</label
                >
                <input
                    type="password"
                    id="base-input" placeholder="Password" v-model="form.password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                />
                <div v-if="errors.password">
                    <span class="text-red-600">{{ errors.password }} </span>            
                </div>

                <button type="submit" class="bg-red-700 text-white p-1 rounded-lg my-3 border-2 border-red-950 w-full">Submit</button>
            </div>
            
        </form>
        </div>
        
    </Main>
</template>

<script>
import Main from "../Layouts/Main.vue";
export default {
    props: ["lectures", "title", 'errors'],
    components: {
        Main,
    },

    data()  {
        
    },
    methods: {
    }
};
</script>

<script setup>
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'

const form = reactive({
  name: null,
  username: null,
  email: null,
  password: null,
})

function regist() {
  router.post('/home', form)
}
</script>
