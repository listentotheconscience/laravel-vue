<script>
  import axios from "axios";

  const API_ENDPOINT = 'http://172.40.0.5/api/'

  export default {
    name: "Register",
    title: "Sign Up",
    methods: {
      onSubmit() {
        return axios.post(API_ENDPOINT + 'auth/signup', {
          name: this.$refs.username.value,
          email: this.$refs.email.value,
          password: this.$refs.password.value
        })
            .then((response) => {
                this.$router.push('/')
            })
            .catch((error) => console.log(error));
      }
    }
  }
</script>

<template>
  <div class="h-screen md:flex bg_dark">
    <div
        class="relative overflow-hidden md:flex w-1/2 bg i justify-around items-center hidden">
      <div>
        <h1 class="font-bold text-5xl" style="margin-top: -45%; color: #fa0000;">Go Workflow</h1>
        <p class="mt-1 text-xl" style="top: 30%; color: #ea0000;">Try out new experience</p>
      </div>
    </div>
    <div class="flex md:w-1/2 justify-center py-10 items-center bg_dark">
      <form class="bg_dark" @submit.prevent="onSubmit()">
        <h1 class="text-white font-bold text-2xl mb-1">Hello Again!</h1>
        <p class="text-sm font-normal text-white mb-7">Sign Up</p>
        <div class="flex items-center border_colored border-2 py-2 px-3 rounded-2xl mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
               fill="currentColor">
            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
          </svg>
          <input
              class="pl-2 outline-none border-none bg_dark text-white"
              type="text" name="name" id="name" placeholder="Username" ref="username">
        </div>
        <div class="flex items-center border_colored border-2 py-2 px-3 rounded-2xl mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          </svg>
          <input
              class="pl-2 outline-none border-none bg_dark text-white"
              type="email" name="email" id="email" placeholder="Email Address" ref="email" />
        </div>
        <div class="flex items-center border_colored border-2 py-2 px-3 rounded-2xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
               fill="currentColor">
            <path fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd" />
          </svg>
          <input class="pl-2 outline-none border-none bg_dark text-white"
                 type="password" name="password" id="password" placeholder="Password" ref="password"
          />
        </div>
        <button type="submit" class="block w-full bg-black mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Sign Up</button>
        <span class="text-sm text-white ml-2 hover:text-blue-100 cursor-pointer">Forgot Password ?</span>
      </form>
    </div>
  </div>
</template>

<style scoped>
  @import url('https://fonts.googleapis.com/css2?family=Gothic+A1:wght@700&display=swap');

  svg {
    color: #810000;
  }

  input::placeholder {
    color: #fff;
  }

  .bg_dark {
    background-color: rgb(25, 25, 25);
    font-family: 'Gothic A1', sans-serif;
  }

  .border_colored {
    border-color: #810000;
  }

  .bg {
    background: url("https://sun9-51.userapi.com/impg/Oa8lv2D_qd2xk2_AA_8J54We1dqKehalu1wsmg/ZfV4ynHWUVw.jpg?size=1600x900&quality=95&sign=0e5546a5acb941a845d199ae064194c8&type=album") no-repeat;
    background-size: auto 100%;
  }
</style>