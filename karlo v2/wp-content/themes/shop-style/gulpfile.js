var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cssnano = require('gulp-cssnano');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');



function style() {
  return gulp.src('./scss/style.scss')
    .pipe(sass().on('error', sass.logError))
	.pipe(autoprefixer('last 2 versions'))
//	.pipe(cleanCSS({ compatibility: '*' }))
    .pipe(cssnano({ discardComments: { removeAll : true } }))
	.pipe(rename({suffix: '.min' }))
    .pipe(gulp.dest('./assets/css'));
}

function script() {
	var scripts = [
		'./node_modules/jquery/dist/jquery.js',
		'./node_modules/bootstrap/dist/js/bootstrap.bundle.js',
		'./node_modules/slick-slider/slick/slick.js',
		'./js/**/*.js'

	];

	return gulp.src(scripts, {allowEmpty: true})
//		.pipe(babel({ presets: [ '@babel/preset-env' ] }))
		.pipe(concat('script.min.js'))
		.pipe(uglify())
		.pipe(gulp.dest('./assets/js'));
}

function watchAll() {
	gulp.watch('./scss/**/*.scss', gulp.series('style'));
	gulp.watch('./js/**.js', gulp.series('script'));
}


exports.style = style;
exports.script = script;
exports.watchAll = watchAll;

exports.watch = gulp.series(
	gulp.parallel(style, script),
	watchAll
);

exports.default = gulp.series(
	gulp.parallel(style, script),

	watchAll
);