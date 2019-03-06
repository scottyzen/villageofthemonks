const gulp = require('gulp');
const htmlmin = require('gulp-htmlmin');
const connect = require('gulp-connect-php');
const browserSync = require('browser-sync');
const postcss = require('gulp-postcss');
const tailwindcss = require('tailwindcss');
const purgecss = require('gulp-purgecss');

// BrowserSync Reload
function browserSyncReload(done) {
    browserSync.reload();
    done();
}

gulp.task('serve', () => {
    connect.server({}, () => {
        browserSync({
            proxy: '127.0.0.1:8000'
        });
    });

    gulp.watch("**/*.php", gulp.parallel([browserSyncReload]))
    gulp.watch("./css/**/*.css", gulp.parallel(['css', browserSyncReload]))
    gulp.watch("./js/**/*.js", gulp.parallel([browserSyncReload]))
});


// Compress all PHP/HTML files
gulp.task('htmlmin', () => {
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


gulp.task('default', gulp.series(["htmlmin"]));

// TailwindCSS
gulp.task('css', () => {
    return gulp.src('css/style.css')
        .pipe(postcss([
            tailwindcss('./tailwind.js'),
            require('autoprefixer'),
        ]))
        .pipe(purgecss({
            content: ['**/*.php', './js/**/*.js'],
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