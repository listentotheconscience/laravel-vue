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
      <form class="bg_dark">
        <h1 class="text-white font-bold text-2xl mb-1">Hello Again!</h1>
        <p class="text-sm font-normal text-white mb-7">Forgot Password?</p>
        <div class="flex items-center border_colored border-2 py-2 px-3 rounded-2xl mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
               viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
          </svg>
          <input class="pl-2 outline-none border-none bg_dark" type="text" name="" id="" placeholder="Email Address" />
        </div>
        <button type="submit" class="block w-full bg-black mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Send Email</button>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  name: "ForgotPassword",
  title: "Forgot Password?"
}
</script>

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