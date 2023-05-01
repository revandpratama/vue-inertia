<template>
    
        <div class="mt-14"></div>
        <h1 class="text-4xl font-medium">HelloWorld </h1>
        <h3 v-for="lecture in lectures" :key="lecture">
            {{ lecture }}
        </h3>
        <button @click="show()" class="bg-lime-400">Goofy Button</button> <br />
        <Transition>
            <span v-show="ballButton">Blue beetle</span>
        </Transition>
        

        <br />
        <span>{{ computedSlug }}</span> <br>
        <input v-model="message" placeholder="edit me" />

        <div class="w-96 mx-6">
            <Transition>
                <span v-if="$page.props.flash.success">
                    <Alert type="success" closable>Success</Alert>
                </span>
            </Transition>
            <Transition>
                <span v-if="showSuccess">
                    <Alert type="success" closable>Success</Alert>
                </span>
            </Transition>
            

            <form @submit.prevent="regist">
                <div class="mb-6">
                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Name</label>
                    <input type="text" id="base-input" placeholder="Name" v-model="form.name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <div v-if="errors.name">
                        <span class="text-red-600">{{ errors.name }} </span>
                    </div>

                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Username (no
                        space)</label>
                    <input type="text" id="base-input" placeholder="Username" v-model="form.username"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <div v-if="errors.username">
                        <span class="text-red-600">{{ errors.username }} </span>
                    </div>

                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Email</label>
                    <input type="email" id="base-input" placeholder="Email" v-model="form.email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <div v-if="errors.email">
                        <span class="text-red-600">{{ errors.email }} </span>
                    </div>

                    <label for="base-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Password</label>
                    <input type="password" id="base-input" placeholder="Password" v-model="form.password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                    <div v-if="errors.password">
                        <span class="text-red-600">{{ errors.password }} </span>
                    </div>

                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white p-1 rounded-lg my-3 border border-black w-full">
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <div id="alert-1" class="flex p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400"
            role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                A simple info alert with an <a href="#" class="font-semibold underline hover:no-underline">example link</a>.
                Give it a click if you like.
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
        
    
    
</template>

<script>
import Main from "../Layouts/Main.vue";
export default {
    layout: Main,

    props: [
        "lectures", "title", "errors", "user", "getUser"
    ],



    data() {
        return {
            ballButton: false,
            message: '',
            showSuccess: false,
        };
    },
    methods: {
        show() {
            var self = this;
            self.ballButton = true;
            setTimeout( () => {self.ballButton = false}, 2000);
        },
        onSuccess() {
            this.showSuccess =  true
        }
    },

    computed: {
        computedSlug() {
            return this.message.replace(/\s+/g, '-', this.message).toLowerCase();
        }
    },
    // created() {
    // getUser().then(user => {
    //   this.user = user;
    // });
    // }
};
</script>

<script setup>
import { Alert } from 'flowbite-vue';
import { reactive, Transition } from "vue";
import { router } from "@inertiajs/vue3";

// Init flowbite to make Js work even without page reload
    import { onMounted } from 'vue';
    import { initFlowbite } from 'flowbite';
    onMounted(() => {
        initFlowbite();
    })


const form = reactive({
    name: null,
    username: null,
    email: null,
    password: null,
});

function regist() {
    router.post("/home", form, {
        preserveScroll: true,
        
    });
}
</script>

<style>
.v-enter-active,
.v-leave-active {
  transition: opacity 0.5s ease;
}

.v-enter-from,
.v-leave-to {
  opacity: 0;
}
</style>