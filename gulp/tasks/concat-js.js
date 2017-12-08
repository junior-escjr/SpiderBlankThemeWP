// AQUI CONCATENA O ARQUIVO .js

var gulp    = require('gulp');
var concat  = require('gulp-concat');

gulp.task('concat-js', function() {
    return gulp.src([
		// DIRETÓRIO DOS ARQUIVOS JS
		'../src/js/scripts.js'
  ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest('../static/js/'));
});