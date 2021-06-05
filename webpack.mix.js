const mix = require('laravel-mix')
require("laravel-mix-vue3")
require('mix-tailwindcss')

mix.webpackConfig({
    resolve: {
        extensions: ['.js','.ts', '.vue', '.json'],
        alias: {
            'vue$': 'vue/dist/vue.esm.js',
            "@": path.resolve(__dirname, "resources"),
            "@components": path.resolve(__dirname, "resources/components")
        }
    },
})

/**
 * 各ページで使用するJavaScript
 */
mix.vue3('resources/js/pages/home/login.js', 'public/js/pages/home/login.js')
    .vue3('resources/js/pages/home/logout.ts', 'public/js/pages/home/logout.js')
    .vue3('resources/js/pages/team/index.js', 'public/js/pages/team/index.js')

/**
 * CSS関連
 */
    .postCss('resources/css/app.css', 'public/css')
    .tailwind('tailwind.config.js');
