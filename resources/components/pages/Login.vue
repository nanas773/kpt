<template>
  <div class="absolute inset-1/2 transform -translate-y-1/2 -translate-x-1/2 w-1/5 h-2/5 text-center border">
    <div class="p-10">
      <div>
        いい感じのロゴが入る
      </div>
      <div class="pt-40">
        <a class="bg-gray-300 hover:bg-gray-200 border rounded text-gray-600 p-5 block" 
           :href="loginUrl"><img class="inline w-10" src="/images/icons/octopus.png"> Github アカウントでログイン</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Login",
  setup() {
    const vars = window.VARS
    const loginUrl = vars['loginUrl'] || ''

    return {
      loginUrl
    }
  }
}
</script>
