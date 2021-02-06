var config  = require("../config.js");

var gulp 	= require('gulp');
var uglify 	= require('gulp-uglify');
var rename 	= require('gulp-rename');

// tasks
gulp.task('min-js', function() {
	gulp.src( config.path.staticJS + 'all.js')
		.pipe(uglify())
		.pipe(rename({suffix: '.min'}))
		.pipe(gulp.dest( config.path.staticJS ))
});