var gulp = require('gulp');
var $    = require('gulp-load-plugins')();
var concat = require('gulp-concat');
var minify = require('gulp-minify');

var sassPaths = [
  'bower_components/normalize.scss/sass',
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('sass', function() {
  return gulp.src('scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9', 'safari >= 8']
    }))
    .pipe(gulp.dest('../css'));
});

gulp.task('compress', function() {
  var files = [
    'bower_components/what-input/what-input.js',
    'bower_components/foundation-sites/dist/js/foundation.min.js',
    'bower_components/magnific-popup/dist/jquery.magnific-popup.min.js',
    'js/app.js'
  ];

  return gulp.src(files)
    .pipe(concat('app.js'))
    .pipe(gulp.dest('../js'))
    .pipe(minify())
    .pipe(gulp.dest('../js'));
});

gulp.task('default', ['sass', 'compress'], function() {
  gulp.watch(['scss/**/*.scss'], ['sass']);
  gulp.watch(['js/**/*.js'], ['compress']);
});


gulp.task('build', ['sass', 'compress']);
