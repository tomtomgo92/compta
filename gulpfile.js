'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var run = require('gulp-run');

var SCSS_SRC = './src/Assets/scss/**/*.scss';
var SCSS_DEST = './src/Assets/css';

// Compiler le sass
gulp.task('sass', function() {
  return gulp
    .src(SCSS_SRC)
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest(SCSS_DEST));
});

//Detect changement SASS
gulp.task('watch', function() {
  return gulp.watch(SCSS_SRC, ['sass']);
});

// Lance npm start
gulp.task('start', function() {
  return gulp.src(['src/**/*.js', 'src/**/*.map']).pipe(run('npm start'));
});

//Run
gulp.task('default', ['start', 'watch']);