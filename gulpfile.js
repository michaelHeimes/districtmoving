var gulp          = require('gulp'),
    browserSync   = require('browser-sync').create(),
    util          = require('gulp-util'),
    sass          = require('gulp-sass'),
    autoprefixer  = require('gulp-autoprefixer'),
    svgsprites    = require('gulp-svg-sprite'),
    sourcemaps    = require('gulp-sourcemaps'),
    concat        = require('gulp-concat'),
    order         = require('gulp-order');
    minifyjs      = require('gulp-js-minify');

var theme = './';
// for WP
// var theme = './wp-content/themes/abarca';

var path = {
  src: {
    sass: theme + 'src/sass',
    img: theme + 'src/img',
    fonts: theme + 'src/fonts',
    bg: theme + 'src/upload',
    js: theme + 'src/js'
  },
  dest: {
    css: theme + '/css',
    img: theme + '/img',
    fonts: theme + '/fonts',
    bg: theme + '/upload',
    js: theme + '/js'
  }
};

gulp.task('build:sass', function () {
  gulp.src(path.src.sass + '/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
  .pipe(autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(sourcemaps.write('./map'))
  .pipe(gulp.dest(path.dest.css))
  .pipe(browserSync.stream({match: '**/*.css'}));
});

gulp.task('build:js', function () {
    gulp.src(path.src.js + '/script.js')
    .pipe(minifyjs())
    .pipe(gulp.dest(path.dest.js))
});

gulp.task('build:fonts', function () {
  gulp.src(path.src.fonts + '/**/*')
  .pipe(gulp.dest(path.dest.fonts))
});

gulp.task('build:bg', function () {
  gulp.src(path.src.bg + '/**/*')
  .pipe(gulp.dest(path.dest.bg))
});

gulp.task('build:img', function () {
  gulp.src(path.src.img + '/**/*')
  .pipe(gulp.dest(path.dest.img))
});

gulp.task('build:js:libs', function () {
  gulp.src(path.src.js + '/libs/**/*.js')
  .pipe(order([
      'modernizr.js',
      'jquery-2.2.1.min.js',
      'svg-injector.min.js',
      'jquery.magnific-popup.js',
      'owl.carousel.js'
    ]))
  .pipe(concat('libs.js'))
  .pipe(gulp.dest(path.dest.js))
  .pipe(browserSync.stream({match: 'js/*.js'}));
});

gulp.task('build:symbol:svg', function() {
  gulp.src(path.src.svg + '/svg-symbols/**/*.svg')
    .pipe(svgsprites({
      shape: {
        dimension: {
          precision: 2
          // attributes: true
        }
      },
      mode: {
        symbol: {
          bust: false,
          dest: '../',
          sprite: 'img/symbol-sprite.svg'
        }
      }
    }))
    .pipe(gulp.dest(path.dest.img));
});

gulp.task('build:sprite:svg', function() {
  gulp.src(path.src.svg + '/svg-sprite/**/*.svg')
    .pipe(svgsprites({
      shape: {
        spacing: {
          padding: 4
        },
        dimension: {
          precision: 2
        }
      },
      mode: {
        css: {
          prefix: '.css-',
          dest: './dest',
          sprite: 'css/sprite.svg',
          dimensions: true,
          bust: false,
          render: {
            css : { dest : 'css/sprite.css' },
            scss: { dest: '../src/sass/_sprite.scss' }
          }
        },
      }
    }))
    .pipe(gulp.dest('.'));
});

gulp.task('build', [
  //'build:symbol:svg',
  //'build:sprite:svg',
  'build:sass',
  'build:js',
  'build:fonts',
  'build:bg',
  'build:img',
  'build:js:libs'
]);

gulp.task('server', ['build'], function() {
  gulp.watch(path.src.sass + '/**/*.scss', ['build:sass']);
  gulp.watch(path.src.bg + '/**/*', ['build:bg']);
  gulp.watch(path.src.img + '/**/*', ['build:img']);
  gulp.watch(path.src.fonts + '/**/*', ['build:fonts']);
  gulp.watch(path.src.js + '/**/*.js', ['build:js']).on('change', browserSync.reload);
  gulp.watch('**/*.html').on('change', browserSync.reload);

  // for layout
  browserSync.init({ server: "./" });

  // for WP
  // browserSync.init({
  //   notify: false,
  //   proxy: 'http://abarca.com'
  // });
});
