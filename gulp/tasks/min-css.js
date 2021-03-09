// AQUI MINIFICA E RENOMEIA O ARQUIVO .css PARA min.css
var config  = require("../config.js");

var gulp = require('gulp');
var rename = require('gulp-rename'); // renomeia os arquivos
var minifyCss = require('gulp-cssmin'); // minifica os arquivos

gulp.task('min-css', function(done){
	gulp.src( config.path.staticCss + 'all.css')
	.pipe(minifyCss())
	.pipe(rename({
		suffix: '.min'
	}))
    .pipe(gulp.dest( config.path.staticCss ));

    done();
});