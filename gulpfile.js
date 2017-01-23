var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var input = './assets/sass/**/*.scss';
var output = './assets/css';

// Set up variables for Gulp-Sass
var sassOptions = {
	errLogToConsole: true,
	outputStyle: 'compressed'
};


// Compile all of the `.scss` files into `.css` files
gulp.task('sass', function () {
	return gulp

	// Find all matching files defined by `input`
	.src(input)

	// Run gulp-sass on those files, log any errors to Terminal/Console
	.pipe(sass(sassOptions).on('error', sass.logError))

	// Run Autoprefixer
	.pipe(autoprefixer())

	// Write the resulting CSS in the `output` folder
	.pipe(gulp.dest(output));
});


// Beging watching for changes
gulp.task('watch', function() {
	return gulp

	// Watch the `input` folder for change, then run the `sass` task when something happens
	.watch(input, ['sass'])

	// When there is a change, log a message in the console
	.on('change', function(event) {
	  console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
	});
});


// Create a default task so running `gulp` by itself will run `sass`, then begin to `watch`.
gulp.task('default', ['sass', 'watch']);
