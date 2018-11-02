const gulp = require("gulp");
const htmlmin = require("gulp-htmlmin");
const phpMinify = require("@aquafadas/gulp-php-minify");

// Compress all PHP/HTML files
gulp.task("htmlmin", function() {
  return gulp
    .src([
      "./*.html",
      "./*.php",
      "!dist/**/*",
      "!bower_components/**/*",
      "!node_modules/**/*"
    ])
    .pipe(
      htmlmin({
        collapseWhitespace: true,
        minifyJS: true,
        removeComments: true
      })
    )
    .pipe(gulp.dest("dist"));
});

gulp.task("minify:php", () =>
  gulp
    .src("./dist/*.php", {
      read: false
    })
    .pipe(phpMinify())
    .pipe(gulp.dest("dist"))
);

gulp.task("default", ["htmlmin"]);
gulp.task("min", ["minify:php"]);
