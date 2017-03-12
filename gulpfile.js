'use strict';

/** Import the GULP modules. */
var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var rename = require("gulp-rename");
var sourcemaps = require('gulp-sourcemaps');

/**
 * Minimizes SASS files to CSS file.
 */
gulp.task('sass', function(){
    return gulp.src('template/assets/sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/css/'));
});

/**
 * Minimizes Javascript files.
 */
gulp.task('js', function(){
    return gulp.src('template/assets/js/*.js')
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('public/js/'));
});

/**
 * Watch changes in the files and run the corresponding task.
 */
gulp.task('watch', function(){
    gulp.watch('template/assets/sass/*.scss', ['sass']);
    gulp.watch('template/assets/js/*.js', ['js']);
});