var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var prefix = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();


//Compile sass files
gulp.task('styles', function(){
    return gulp.src([
    	'./sass/style.scss',
    ])
    .pipe(sass())
    .pipe(prefix())
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
});


//watch all scss files in sass folder.
gulp.task('watch', function(){
	browserSync.init({
        port: 8080,
    });
    gulp.watch('./sass/**/*.scss', ['styles']);
});


//define default gulp task
gulp.task('default', [
	'watch'
]); 