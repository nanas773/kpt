var mix = require('laravel-mix')
require("laravel-mix-vue3")

mix.webpackConfig({
    resolve: {
        extensions: ['.js','.ts', '.vue', '.json'],
        alias: {
            'vue$': 'vue/dist/vue.esm.js',
            '@': __dirname + '/resources/',
            '@components': __dirname + '/resources/components'
        }
    },
})

/**
 * 各ページで使用するJavaScript
 */
mix.vue3('resources/js/pages/home/login.js', 'public/js/pages/home/login.js')
mix.vue3('resources/js/pages/home/logout.ts', 'public/js/pages/home/logout.js')
