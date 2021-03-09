// AQUI CONCATENA E CONVERTE O ARQUIVO .scss PARA css
var config  = require("../config.js");

var gulp = require('gulp');
var concat = require('gulp-concat'); // junta todos os arquivos
var sass = require('gulp-sass');

gulp.task('concat-sass', function (done) {
  gulp.src(config.path.srcCss + '**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(concat('all.css'))
    .pipe(gulp.dest( config.path.staticCss ))

    done();
});