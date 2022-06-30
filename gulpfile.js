/** gulp utils */
const {src, dest, parallel, series} = require('gulp');
const gulp = require("gulp");

/** plugins */
const sass = require('gulp-sass')(require('sass'));
const flatten = require('gulp-flatten');
const rename = require('gulp-rename');
const autoprefixer = require('gulp-autoprefixer');

const js = () => {
    return src('resources/scripts/**/*.js')
        .pipe(flatten())
        .pipe(dest('public/scripts'))
}

const styles = () => {
    return src('resources/styles/**/*.{css,scss}')
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version'))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(flatten())
        .pipe(dest('public/styles'))
}

exports.default = () => {
    gulp.watch('resources/scripts/**/*.js', { ignoreInitial: false }, js)
    gulp.watch('resources/styles/**/*.{css,scss}', { ignoreInitial: false }, styles)
}
