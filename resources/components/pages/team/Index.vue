<template>
    <div class="relative text-gray-500">
        <!-- フッター固定 -->

        <header class="grid grid-cols-6 bg-gray-100 fixed top-0 left-0 w-full">
            <h1 class="col-start-2 col-span-4 text-center text-3xl py-5">
                ユーザ名
            </h1>
            <nav class="col-span-1 my-auto text-center">
                <a href="#">管理</a>
                <a href="#">ログアウト</a>
            </nav>
        </header>

        <main>
            <!-- fixedのheaderを表示するため下記mt-20にしているものの-->
            <!-- spanとかで空要素を入れてそれに高さを持たせた方が良かったりします？-->
            <section class="mx-16 bg-gray-200 mt-24">
                <h1 class="p-5 text-xl">チーム名</h1>
                <ul class="ml-16 my-2 text-xl">
                    <li>
                        <a href="#" class="block p-3 bg-pink-100">プロジェクト名</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="block p-3 bg-yellow-100">プロジェクト名</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="block p-3 bg-green-100">プロジェクト名</a>
                    </li>
                </ul>
            </section>
            <section class="mx-16 bg-gray-200 mt-3">
                <h1 class="p-5 text-xl">チーム名</h1>
                <ul class="ml-16 my-2 text-xl">
                    <li>
                        <a href="#" class="block p-3 bg-pink-100">プロジェクト名</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="block p-3 bg-yellow-100">プロジェクト名</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="block p-3 bg-green-100">プロジェクト名</a>
                    </li>
                </ul>
            </section>
            <section class="mx-16 bg-gray-200 mt-3">
                <h1 class="p-5 text-xl">チーム名</h1>
                <ul class="ml-16 my-2 text-xl">
                    <li>
                        <a href="#" class="block p-3 bg-pink-100">プロジェクト名</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="block p-3 bg-yellow-100">プロジェクト名</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="block p-3 bg-green-100">プロジェクト名</a>
                    </li>
                </ul>
            </section>

        </main>

        <!-- よく考えたらここがトップでは？これいる？？ -->
        <!--        <footer class="fixed bottom-5 right-10 bg-red-200">-->
        <!--            <a href="#" class="py-5 bg-red-400">トップに戻る</a>-->
        <!--        </footer>-->
    </div>
</template>

<script>
export default {
    name: "Index",
}
</script>

<style scoped>
</style>
