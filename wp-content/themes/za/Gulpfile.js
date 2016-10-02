var gulp = require('gulp');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');
var rename = require('gulp-rename');
var cssnano = require('gulp-cssnano');

// Styles
gulp.task('styles', function() {
  return sass('sass/style.scss', { style: 'expanded' })
    .pipe(gulp.dest('../za'))
    .pipe(rename({ suffix: '.min' }))
    .pipe(cssnano())
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', ['styles']);
});

gulp.task('default', ['styles', 'watch']);

