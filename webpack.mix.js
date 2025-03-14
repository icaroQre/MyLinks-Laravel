const mix = require("laravel-mix");

mix.browserSync({
    proxy: "127.0.0.1:8000", // ou o domínio correto do seu projeto
    files: [
        "resources/views/**/*.blade.php",
        "resources/js/**/*.js",
        "resources/css/**/*.css",
        "routes/**/*.php",
    ],
    notify: false,
    open: false,
});

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("@tailwindcss/postcss")]
);

mix.options({
    processCssUrls: false,
}).version();

mix.webpackConfig({
    watchOptions: {
        ignored: /node_modules|public/,
    },
});
