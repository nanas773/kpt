const mix = require('laravel-mix')
require("laravel-mix-vue3")
const tailwindcss = require('tailwindcss')

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
    .vue3('resources/js/pages/home/logout.ts', 'public/js/pages/home/logout.js')

/**
 * CSS関連
 */
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });
