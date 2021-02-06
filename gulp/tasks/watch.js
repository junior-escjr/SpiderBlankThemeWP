// AQUI MONITORA OS ARQUIVOS VERIFICANDO SE EXISTE ALTERAÇÕES

var gulp = require('gulp');
var config  = require("../config.js");

gulp.task('default', gulp.series('concat-sass', 'concat-js', function(done) {
	gulp.watch(config.path.srcCss + '**/*.scss', gulp.parallel('concat-sass', 'min-css'))
	gulp.watch(config.path.srcJs + '**/*.js', gulp.parallel('concat-js', 'min-js'))

	done();
}));