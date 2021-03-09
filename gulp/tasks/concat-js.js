// AQUI CONCATENA O ARQUIVO .js
var config  = require("../config.js");

var gulp    = require('gulp');
var concat  = require('gulp-concat');

gulp.task('concat-js', function() {
    return gulp.src([
		// DIRETÓRIO DOS ARQUIVOS JS
<<<<<<< HEAD
=======
		config.path.srcJs + 'vendor/owl.carousel.js',
>>>>>>> 79badd90616b245551b8670bc860d9f2116587a6
		config.path.srcJs + 'scripts.js'
  ])
    .pipe(concat('all.js'))
    .pipe(gulp.dest( config.path.staticJS ));
});