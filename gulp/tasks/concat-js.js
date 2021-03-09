// AQUI CONCATENA O ARQUIVO .js
var config  = require("../config.js");

var gulp    = require('gulp');
var concat  = require('gulp-concat');

gulp.task('concat-js', function() {
    return gulp.src([
		// DIRETÓRIO DOS ARQUIVOS JS
		config.path.srcJs + 'scripts.js'
  ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest( config.path.staticJS ));
});