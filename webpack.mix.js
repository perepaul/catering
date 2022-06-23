const mix = require('laravel-mix');
const homeDir = require('os').homedir();
const domain = 'catering.test';
const certDir = `${ homeDir }/.config/valet/Certificates/${ domain }`;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/scss/app.scss', 'public/css', [
        //
    ]).browserSync({
        proxy: `https://${ domain }`,
        host: domain,
        open: 'external',
        https: {
            key: `${ certDir }.key`,
            cert: `${ certDir }.crt`,
        },
        notify: true,
    })
