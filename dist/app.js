/******/ (() => {
  // webpackBootstrap
  var __webpack_exports__ = {};
  /*!********************!*\
  !*** ./src/app.js ***!
  \********************/

  /******/
})();
// webpack.mix.js

let mix = require("laravel-mix");

mix.js("src/app.js", "dist").setPublicPath("dist");

let mix = require("laravel-mix");

// 1. Compile src/app.js to dist/app.js
mix.js("src/app.js", "dist");

// 2. Compile src/app.js to dist/foo.js
mix.js("src/app.js", "dist/foo.js");

// 3. Merge and compile multiple scripts to dist/app.js
mix.js(["src/app.js", "src/another.js"], "dist/app.js");

// 4. Compile src/app.js to dist/app.js and src/forum.js to dist/forum.js
mix.js("src/app.js", "dist/").js("src/forum.js", "dist/");

// webpack.mix.js
let mix = require("laravel-mix");

mix.sass("src/app.scss", "dist");

mix.sass("src/app.scss", "dist", {
  sassOptions: {
    outputStyle: "nested",
  },
});
