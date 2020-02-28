const gulp          = require('gulp');
const uglify        = require('gulp-uglify');
const browsersync   = require("browser-sync").create();
const cleanCSS      = require('gulp-clean-css');
const concat        = require('gulp-concat');
const sass          = require('gulp-sass');

// CSS task

css = () => {
    let d = new Date();
    let timestamp = d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
    console.log('Minifying CSS at ' + timestamp);

    return gulp
        .src('dev/*.css')
        .pipe(cleanCSS())
        .pipe(concat('main.css'))
        .pipe(gulp.dest('wp-content/themes/driftwood/css'));
};

processSass = () => {
    console.log('Processing SASS.');
    return gulp.src('dev/*.scss')
        .pipe(sass({
            outputStyle : 'compressed'
        }))
        .pipe(gulp.dest('wp-content/themes/driftwood/css'));
}

php = () => {
    console.log('You changed a PHP file.');
}

// Watch files
watchFiles = () => {
    gulp.watch('dev/*.css', css);
    gulp.watch('dev/*.scss', processSass);
    gulp.watch('./wp-content/**/**/*.php', php);
    console.log('You changed a file.');
}

// Define complex tasks
const build = gulp.series(css, processSass, watchFiles);

// Export tasks
exports.default = build;
