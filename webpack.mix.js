const mix = require("laravel-mix");
mix.ts("src/index.tsx", "public/js/app.js").react()
.sass('src/styles/_style.scss', 'public/css');;