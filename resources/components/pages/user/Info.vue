<template>
  <div class="text-gray-500">
    <Header/>
    <main>
      <table class="text-xl w-3/4 table-fixed border border-gray-300 mx-auto mt-28">
        <tbody>
        <tr>
          <th class="w-2/6 p-6 border border-gray-300" scope="row">メールアドレス</th>
          <td class="w-3/6 p-6 border border-gray-300">nanas@world.com</td>
          <td class="w-1/6 p-6 border border-gray-300">
            <button @click="toggleKptInputModal">変更</button>
          </td>
        <tr>
          <th class="w-2/6 p-6 border border-gray-300" scope="row">パスワード</th>
          <td class="w-3/6 p-6 border border-gray-300">＊＊＊＊＊＊＊＊＊＊</td>
          <td class="w-1/6 p-6 border border-gray-300">
            <button @click="toggleKptInputModal">変更</button>
          </td>
        </tr>
        <tr>
          <th class="w-2/6 p-6 border border-gray-300" scope="row">名前</th>
          <td class="w-3/6 p-6 border border-gray-300">ななちゃん</td>
          <td class="w-1/6 p-6 border border-gray-300">
            <button @click="toggleKptInputModal">変更</button>
          </td>
        </tr>
        <tr>
          <th class="w-2/6 p-6 border border-gray-300" scope="row">プロフィール画像</th>
          <td class="w-3/6 p-6 border border-gray-300"><img src="#" alt="ななちゃんのプロフィール画像"></td>
          <td class="w-1/6 p-6 border border-gray-300">
            <button @click="toggleKptInputModal">変更</button>
          </td>
        </tr>
        </tbody>
      </table>
      <p>ああああ</p>
      <Modal modalTitle="テスト" @closeModal="">
        テスト
      </Modal>
    </main>

  </div>

</template>

<script>
import Header from "../../layouts/Header"
import Modal from "../../parts/Modal"

export default {
  name: "Info",
  data: function () {
    return {
      showModal: false,
    }
  },
  methods: {
    toggleKptInputModal: function () {
      this.showModal = !this.showModal
    }
  },
  components: {Header, Modal},
}
</script>

<style scoped>
</style>
