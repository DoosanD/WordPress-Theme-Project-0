// webpack.mix.js

let mix = require("laravel-mix");

mix.js("src/app.js", "dist").setPublicPath("dist");

// webpack.mix.js
let mix = require("laravel-mix");

mix.sass("src/app.scss", "dist");
