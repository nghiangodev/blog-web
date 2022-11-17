const mix = require('laravel-mix');

mix
.js("resources/js/app.js", "public/js")

.sass("resources/scss/app.scss", "public/css", [])

.options({
    processCssUrls: false,
});

mix.browserSync({
    proxy: 'fe.ihz.host',
    host: '10.30.30.154',
    open: 'external',
    browser: [],
    reloadDelay: 2000,
    injectChanges: false,
    ghostMode: true,
    notify: false,
})
