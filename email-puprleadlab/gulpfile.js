'use strict';

var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var panini = require('panini');
var fs = require('fs');
var replace = require('gulp-replace');
var siphon = require('siphon-media-query');
var inky = require('inky'); var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var inlineCss = require('gulp-inline-css');
var inlineSource = require('gulp-inline-source');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var htmlmin = require('gulp-htmlmin');
var argv = require('yargs').argv;
var gulpif = require('gulp-if');


gulp.task('styles', function() {
  return gulp.src('app/styles/scss/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('./app/styles'))
    .pipe(reload({stream: true}));
});


gulp.task('inline', ['styles', 'inky' ], function() {
  
  var css = fs.readFileSync('./app/styles/style.css').toString();
  var mqCss = siphon(css);
  
  return gulp.src('app/*.html')
    .pipe(inlineSource({
      rootpath: 'app'
    }))
    .pipe(inlineCss({
      removeStyleTags: true,
      preserveMediaQueries: true,
      removeLinkTags: true
    }))
    .pipe(replace('<!-- <style> -->', '<style>'+ mqCss +'</style>'))
    .pipe(replace('<link rel="stylesheet" type="text/css" href="styles/style.css">', ''))
    .pipe(gulpif(argv.minify, htmlmin({
      collapseWhitespace: true,
      minifyCSS: true
    })))
    .pipe(gulp.dest('dist/'));
});



  gulp.task('inky', function() {
    return gulp.src('app/template/*.html')
      .pipe(panini({
        root: 'app/template',
        layouts: 'app/template/layouts',
        partials: 'app/template/components',
        helpers: 'app/template/helpers'
      }))
      .pipe(inky())
      .pipe(gulp.dest('app'));
  });


gulp.task('imagemin', function() {
  gulp.src('app/images/**/*.{png,jpg,jpeg,gif,webp,svg}')
    .pipe(imagemin())
    .pipe(gulp.dest('dist/images'));
});

gulp.task('imagecopy', function() {
  gulp.src('app/images/**/*.{png,jpg,jpeg,gif,webp,svg}')
    .pipe(gulp.dest('dist/images'));
});

gulp.task('clean', require('del').bind(null, 'dist'));

gulp.task('build', ['clean','inline','imagemin']);

gulp.task('serve', ['inline', 'imagecopy'], function() {
  browserSync({
    server: './dist',
    notify: false,
    debugInfo: false,
    host: 'localhost'
  });
  
  gulp.watch('app/styles/**/*.scss', ['inline']);
  gulp.watch('app/template/**/*.html', ['inline']);
  gulp.watch('dist/*.html').on('change', reload);
  gulp.watch('app/images/**/*.{png,jpg,jpeg,gif,webp,svg}', ['imagecopy']);
});
