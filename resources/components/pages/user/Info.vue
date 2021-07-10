<template>
  <div class="text-gray-500">

    <header class="grid grid-cols-6 bg-gray-100">
      <h1 class="col-start-2 col-span-4 text-center text-3xl py-5">
        ユーザ名
      </h1>
      <nav class="col-span-1 my-auto text-center">
        <a href="#">管理</a>
        <a href="#">ログアウト</a>
      </nav>
    </header>

    <main>
      <table class="text-xl w-1/2 table-fixed border border-gray-300 mx-auto mt-28">
        <tbody>
        <tr>
          <th class="p-6 w-1/2 border border-gray-300" scope="row">メールアドレス</th>
          <td class="p-6 w-1/2 border border-gray-300">nanas@world.com</td>
        </tr>
        <tr>
          <th class="p-6 border border-gray-300" scope="row">名前</th>
          <td class="p-6 border border-gray-300">ななちゃん</td>
        </tr>
        <tr>
          <th class="p-6 border border-gray-300" scope="row">プロフィール画像</th>
          <td class="p-6 border border-gray-300"><img src="#" alt="ななちゃんのプロフィール画像"></td>
        </tr>
        </tbody>
      </table>
    </main>

  </div>
</template>

<script>
export default {
  name: "Index",
}
</script>

<style scoped>
</style>
