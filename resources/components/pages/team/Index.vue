<template>
 
  <div class="relative text-gray-500">
    <!-- フッター固定 -->
    <!-- 文字色だけは後でCSSにしたほうがいいかもなあ -->

    <!-- いずれ増えてった時ようにヘッダーもfixedにしたほうがいいのだろうか -->
    <header class="grid grid-cols-6 bg-gray-100">
      <h1 class="col-start-2 col-span-4 text-center text-5xl py-10">
        チーム名
      </h1>
      <a href="#" class="col-span-1 text-center my-auto">管理</a>
      <!-- チーム管理へのリンクはいずれアイコンにする予定 -->
    </header>

    <main>
      <ul class="bg-gray-400 mx-16 my-2 text-xl">
        <li>
          <a href="#" class="block p-5 bg-pink-200">プロジェクト名</a>
        </li>
        <li class="mt-2">
          <a href="#" class="block p-5 bg-yellow-200">プロジェクト名</a>
        </li>
        <li class="mt-2">
          <a href="#" class="block p-5 bg-green-200">プロジェクト名</a>
        </li>
        <li class="mt-2">
          <a href="#" class="block p-5 bg-blue-200">プロジェクト名</a>
        </li>
        <li class="mt-2">
          <a href="#" class="block p-5 bg-purple-200">プロジェクト名</a>
        </li>
      </ul>
    </main>

    <footer class="fixed bottom-5 right-10 bg-red-200">
      <a href="#" class="py-5 bg-red-400">トップに戻る</a>
    </footer>
  </div>
</template>

<script>
export default {
  name: "Index",
};
</script>

<style scoped>
</style>
