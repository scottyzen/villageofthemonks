const gulp = require('gulp');
const htmlmin = require('gulp-htmlmin');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync');
const postcss = require('gulp-postcss');
const tailwindcss = require('tailwindcss');
const purgecss = require('gulp-purgecss');

gulp.task('serve', function () {
    connect.server({}, function () {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });

    gulp.watch('**/*.php').on('change', () => {
        // gulp.start('css')
        browserSync.reload()
    });
    gulp.watch('./css/**/*.css').on('change', () => {
        gulp.start('css')
        browserSync.reload()
    });
    gulp.watch('./js/**/*.js').on('change', () => {
        // gulp.start('css')
        browserSync.reload()
    });
});

// Compress all PHP/HTML files
gulp.task('htmlmin', function () {
    return gulp
        .src(['./*.html', './*.php', '!dist/**/*', '!node_modules/**/*'])
        .pipe(
            htmlmin({
                collapseWhitespace: true,
                minifyJS: true,
                removeComments: true
            })
        )
        .pipe(gulp.dest('dist'));
});


gulp.task('default', ['htmlmin']);

// TailwindCSS
gulp.task('css', function () {
    var weatherIcons = [];
    for (var i = 0; i < 48; i++) {
        weatherIcons = [...weatherIcons, `icon-${i}`]
    }

    return gulp.src('css/style.css')
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(purgecss({
            content: ['**/*.php', './js/**/*.js'],
            whitelist: weatherIcons,
            extractors: [{
                extractor: class {
                    static extract(content) {
                        return content.match(/[A-z0-9-:\/]+/g) || []
                    }
                },
                extensions: ['html', 'js', 'php']
            }]
        }))
        .pipe(gulp.dest('build/'));
});