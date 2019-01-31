// AQUI MONITORA OS ARQUIVOS VERIFICANDO SE EXISTE ALTERAÇÕES

var gulp = require('gulp');

gulp.task('default', gulp.series('concat-sass', 'concat-js', function(done) {
	gulp.watch('../src/sass/**/*.scss', gulp.parallel('concat-sass', 'min-css'))
	gulp.watch('../src/js/**/*.js', gulp.parallel('concat-js', 'min-js'))

	done();
}));
