// AQUI MONITORA OS ARQUIVOS VERIFICANDO SE EXISTE ALTERAÇÕES

var gulp = require('gulp');

gulp.task('default', function(){
	gulp.watch('../src/sass/**/*.scss', ['concat-sass']) // MONITORA A PASTA SASS DO CSS
	gulp.watch('../src/js/**/*.js', ['concat-js']) // MONITORA A PASTA SASS DO CSS
});
