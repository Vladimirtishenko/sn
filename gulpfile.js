var gulp = require('gulp'), 
concatCss = require('gulp-concat-css'), 
minifyCss = require('gulp-minify-css'), 
rename = require('gulp-rename'), 
stylus = require('gulp-stylus'),
autoprefixer = require('gulp-autoprefixer');

gulp.task('styl', function () {
  gulp.src('styl/*.styl')
    .pipe(stylus({linenos: false}))
    .pipe(concatCss('styl.css'))
    .pipe(gulp.dest('./css/'));
});

gulp.task('css', function () {
  return gulp.src('css/*.css')
  .pipe(concatCss('bundle.css'))
  .pipe(autoprefixer([
      'Android 2.3',
      'Android >= 4',
      'Chrome >= 20',
      'Firefox >= 24', 
      'Explorer >= 8',
      'iOS >= 6',
      'Opera >= 12',
      'Safari >= 6']))
  .pipe(minifyCss())
  .pipe(rename('bundle.min.css'))
  .pipe(gulp.dest('prodaction'));
});

gulp.task('watch', function(){
  gulp.watch("css/*.css", ['css']);
	gulp.watch("styl/*.styl", ['styl']);
});


gulp.task('default', ['styl', 'css']);