/*---------------------------------------
# Plugins
---------------------------------------*/
require('es6-promise').polyfill(); // Bugfix promise
var gulp                    = require('gulp'),
        sass                    = require('gulp-ruby-sass'),
        autoprefixer    = require('gulp-autoprefixer'),
        uglifycss       = require('gulp-uglifycss'),
        concat              = require('gulp-concat'),
        uglify              = require('gulp-uglify'),
        imagemin            = require('gulp-imagemin');
/*---------------------------------------
# Caminhos e Configurações
---------------------------------------*/
src = {
    base:   './src/',
    css:    './src/assets/css/',
    sass:   './src/assets/scss/',
    jsSrc:  './src/assets/js/src/',
    js:     './src/assets/js/',
    img:    './src/assets/img/',
    sprite: './src/assets/img/sprite/'
}
/*---------------------------------------
# Tarefas
---------------------------------------*/
// CSS
gulp.task('css', function() {
    return sass(src.sass+'main.scss')
    .on('error', sass.logError)
    .pipe(autoprefixer({
        browsers: ['last 3 versions'],
        cascade: false
    }))
    .pipe(uglifycss({
        'uglyComments': true
    }))
    .pipe(gulp.dest(src.css))
});
// JS
gulp.task('js', function() {
    return gulp.src(src.jsSrc+'**/*')
    .pipe(concat('main.js'))
    .pipe(uglify())
    .pipe(gulp.dest(src.js))
});
// IMG
gulp.task('img', function() {
    return gulp.src(src.img+'/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(src.img))
});
// WATCH
gulp.task('watch', function() {
    gulp.watch(src.sass + '/**/*.scss', ['css']);
    gulp.watch(src.js + 'src/**/*.js', ['js']);
});
// Teste
gulp.task('test', function() {
    console.log("It's Work!");
});
