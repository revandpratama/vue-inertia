<template>
    <div class="mt-16">
      <h1>Timer: {{ displayTime }}</h1>
    </div>
</template>
  
  <script>
import Main from '../Layouts/Main.vue'

  export default {
    layout: Main,

    data() {
      return {
        time: 10, // set the time in seconds
        intervalId: null, // initialize the interval ID
      };
    },
    computed: {
      displayTime() {
        const minutes = Math.floor(this.time / 60);
        const seconds = this.time % 60;
        return `${minutes}:${seconds.toString().padStart(2, '0')}`;
      },
    },
    mounted() {
      // start the timer when the component is mounted
      this.intervalId = setInterval(() => {
        this.time--;
        if (this.time === 0) {
          clearInterval(this.intervalId);
          // redirect the user to another page when the timer is up
          this.$inertia.visit('/home');
        }
      }, 1000);
    },
    beforeUnmount() {
      // clear the interval when the component is unmounted
      clearInterval(this.intervalId);
    },
  };
  </script>