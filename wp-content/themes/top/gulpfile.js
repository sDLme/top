var gulp = require('gulp'),
    sass = require('gulp-sass');

var gSrc = {
    scss: [
        'src/sass/main.sass',
        'src/libs/css/bootstrap.css',
        'src/libs/css/bootstrap-grid.css',
        'src/libs/css/bootstrap-reboot.css',
    ],
    js: [
        'src/libs/js/bootstrap.min.js',
        'src/libs/js/bootstrap.bundle.min.js',
        'src/js/*.js'
    ],
    images: [
        'wp-content/themes/ekreative/web-src/images/**/*.{gif,jpg,png,svg}'
    ]
};
var gDst = {
    styles: 'wp-content/themes/top/web/css',
    js: '/web/js',
};

gulp.task('js', function(){
    return gulp.src(gSrc.js)
        .pipe(sass())
        .pipe(gulp.dest(gDst.js))
});

gulp.task('scss', function(){
    return gulp.src(gSrc.scss)
        .pipe(sass())
        .pipe(gulp.dest(gDst.scss))
});