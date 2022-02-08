const mix = require("laravel-mix")
const path = require("path")
const del = require('del')


mix.ts("src/index.tsx", "public/js/app.js").react()
.sass('src/styles/_style.scss', 'public/css')

mix.webpackConfig({
    resolve: {
        alias:{
            '@':path.resolve(__dirname,'src')
        }
    }
});
