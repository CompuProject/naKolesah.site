'use strict';

import gulp from 'gulp';
import rename from 'gulp-rename';
import sass from 'gulp-sass';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import uglify from 'gulp-uglify';
import browserify from 'browserify';
import babelify from 'babelify';
import source from 'vinyl-source-stream';
import buffer from 'vinyl-buffer';
import csso from 'gulp-csso';
import connect from 'gulp-connect-php'

var paths = {
    style: 'src/scss/main.scss',
    watchSCSS: 'src/scss/**/*',
    mainScripts: 'src/js/main.script.js',
    watchScripts: 'src/js/**/*'
};

gulp.task('compress', () => {
    browserify(paths.mainScripts)
        .transform('babelify', {
            global: true,
            only: /^(?:.*\/node_modules\/(?:a|b|c|d)\/|(?!.*\/node_modules\/)).*$/,
            presets: ["es2015"]
        })
        .bundle()
        .pipe(source('main.script.js'))
        .pipe(buffer())
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/'));
});

gulp.task('sass', function() {
    var plugins = [
        autoprefixer({browsers: ['last 1 version']})
    ];
    return gulp.src(paths.style)
        .pipe(sass())
        .pipe(postcss(plugins))
        .pipe(csso({
            restructure: true,
            sourceMap: false,
            debug: true
        }))
        .pipe(gulp.dest('assets/css/'));
});

gulp.task('watchSCSS', () => {
    gulp.watch(paths.watchSCSS, ['sass']);
    gulp.watch(paths.scripts, ['compress']);
});

gulp.task('watchJS', () => {
    gulp.watch(paths.watchScripts, ['compress']);
    gulp.watch(paths.watchComponents, ['compress']);
});

gulp.task('connect', function() {
    connect.server();
});

gulp.task('script_compress', ['compress', 'watchJS']);
gulp.task('sass_to_css', ['sass', 'watchSCSS']);

