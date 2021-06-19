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

  <!-- kptの表示 -->
  <div class="flex justify-between w-11/12 mx-auto">
    <!-- Keepの表示 -->
    <div class="bg-gray-200 w-1/3 m-3 p-2">
      <div class="flex justify-between font-semibold text-lg m-2 px-3">
        <p>Keep</p>
        <a href="#">+</a>
      </div>
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>task1</p>
        <a class="underline" href="#">Done</a>
      </div>
      <!-- 以下 v-for でまわす -->
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>task2</p>
        <a class="underline" href="#">Done</a>
      </div>
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>task3</p>
        <a class="underline" href="#">Done</a>
      </div>
      <!-- v-for 終了 -->
    </div>
    <!-- Problemの表示 -->
    <div class="bg-gray-200 w-1/3 m-3 p-2">
      <div class="flex justify-between font-semibold text-lg m-2 px-3">
        <p>Problem</p>
        <button @click="createProblem">+</button>
      </div>
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>ProblemA</p>
        <a class="underline" href="#">Resolved</a>
      </div>
      <!-- 以下 v-for でまわす -->
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>ProblemB</p>
        <a class="underline" href="#">Resolved</a>
      </div>
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>ProblemC</p>
        <a class="underline" href="#">Resolved</a>
      </div>
      <!-- v-for 終了 -->
    </div>
    <!-- Tryの表示 -->
    <div class="bg-gray-200 w-1/3 m-3 p-2">
      <div class="flex justify-between font-semibold text-lg m-2 px-3">
        <p>Try</p>
        <a href="#">+</a>
      </div>
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>task4</p>
        <a class="underline" href="#">Keep</a>
      </div>
      <!-- 以下 v-for でまわす -->
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>task5</p>
        <a class="underline" href="#">Keep</a>
      </div>
      <div class="flex justify-between bg-white m-2.5 p-3">
        <p>task6</p>
        <a class="underline" href="#">Keep</a>
      </div>
      <!-- v-for 終了 -->
    </div>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: "Detail",
  methods: {
    createProblem: async function() {
      try {
        //とりあえず適当な値
        const response = await axios.post('/api/problems', {
          project_id: 1,
          content: '朝起きるのが辛い',
          is_resolved: false
        })
        alert(response.data)
      } catch (error) {
        alert(error.message)
      }
    }
  }
}
</script>

<style scoped>
</style>
