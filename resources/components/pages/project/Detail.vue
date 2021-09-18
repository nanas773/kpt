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
        <button @click="toggleKptInputModal">+</button>
      </div>
      <div v-for="problem in problems" class="flex justify-between bg-white m-2.5 p-3">
        <p>{{ problem.content }}</p>
        <a class="underline" href="#">Resolved</a>
      </div>
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

  <!-- 入力フォームモーダル 別のコンポーネントとして切り出した方が良い気がする-->
  <modal id="kpt-input-modal" v-if="showModal" >
    <div class="modal-mask fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 transition-opacity table" >
      <div class="modal-wrapper table-cell align-middle">
        <div class="modal-container w-1/2 mx-auto my-0 bg-white rounded shadow transition-all">
          <div class="modal-header py-3 px-3 bg-yellow-300 flex justify-between">
            <div class="flex items-center">
              <span class="text-3xl">🥺</span> <span class="px-2">Problem を入力してください</span>
            </div>
            <div>
              <button @click="toggleKptInputModal" class="outline-none"><img src="/images/icons/close.png" alt="閉じる"></button>
            </div>
          </div>
          <div class="modal-body py-10 px-10">
            <textarea class="w-full h-40 p-2 border-4 border-solid border-yellow-300 outline-none focus:border-yellow-400" v-model="problemContent" type="text" name="problem_content" placeholder="朝起きるのが辛い"></textarea>
          </div>
          <div class="modal-footer px-10 flex justify-end pb-8">
            <button @click="toggleKptInputModal" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded float-right">ok</button>
          </div>
        </div>
      </div>
    </div>
  </modal>
</template>

<script>
import axios from 'axios'

export default {
  name: "Detail",
  data: function() {
    return {
      showModal: false,
      problems: []
    }
  },
  mounted: function () {
    axios.get('/api/problems').then(response => {
      this.problems = JSON.parse(response.data)
    })
  },
  methods: {
    async createProblem() {
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
    },
    toggleKptInputModal() {
      this.showModal = !this.showModal
    }
  }
}
</script>

<style scoped>
</style>
