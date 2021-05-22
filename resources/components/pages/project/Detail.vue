<template>
  <!-- 目標の項目 -->
  <div class="w-4/5 mx-auto my-8 p-3 bg-gray-200">
    <div class="flex justify-between">
      <p class="m-2 p-2">2021/04/30</p>
      <p class="flex-auto bg-white m-2 p-2">目標1</p>
      <button class="bg-blue-500 text-white rounded m-2 p-2">Completed!</button>
    </div>
    <!-- 以下 v-for でまわす -->
    <div class="flex justify-between">
      <p class="m-2 p-2">2021/06/30</p>
      <p class="flex-auto bg-white m-2 p-2">目標2</p>
      <button class="bg-blue-500 text-white rounded m-2 p-2">Completed!</button>
    </div>
    <div class="flex justify-between">
      <p class="m-2 p-2">2021/08/31</p>
      <p class="flex-auto bg-white m-2 p-2">目標3</p>
      <button class="bg-blue-500 text-white rounded m-2 p-2">Completed!</button>
    </div>
    <!-- v-for 終了 -->
  </div>
</template>

<script>
export default {
  name: "Detail",
};
</script>

<style scoped>
</style>
