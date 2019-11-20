"use strict";

var gulp = require("gulp"),
  $ = require("gulp-load-plugins")(),
  del = require("del"),
  autoprefixer = require("autoprefixer"),
  flexibility = require("postcss-flexibility"),
  mqpacker = require("css-mqpacker"),
  browserSync = require("browser-sync"),
  named = require("vinyl-named"),
  path = require("path"),
  webpack = require("webpack-stream");

var paths = {
  webpack: "src/scripts/*.js",
  scripts: ["src/scripts/**/*.js", "!src/scripts/vendor/**/*.js"],
  styles: "src/styles/**/*.scss",
  images: "src/images/**/*.{png,jpeg,jpg,gif,svg}",
  extras: ["src/*.*", "src/fonts/**/*", "src/videos/**/*"],
  dest: {
    scripts: "js",
    images: "images",
    styles: "css",
    extras: ""
  }
};

gulp.task("lint", function() {
  return gulp
    .src(paths.scripts)
    .pipe($.eslint())
    .pipe($.eslint.format())
    .pipe($.eslint.failAfterError());
});

// gulp.task("lint", function() {
//   return gulp
//     .src(paths.scripts)
//     .pipe($.jshint())
//     .pipe($.jshint.reporter("jshint-stylish"));
// });

gulp.task("scripts", ["lint"], function() {
  return gulp
    .src(paths.webpack)
    .pipe($.plumber())
    .pipe(named())
    .pipe(
      webpack({
        module: {
          rules: [
            {
              test: /\.js$/,
              exclude: /node_modules/,
              use: {
                loader: "babel-loader",
                options: {
                  presets: ["@babel/preset-env"]
                }
              }
            }
          ]
        },
        output: {
          filename: "[name].min.js"
        },
        externals: {
          jquery: "jQuery"
        },
        // resolve: {
        //   root: path.resolve("./src/scripts")
        // },
        optimization: {
          minimize: $.util.env.production ? true : false //Update this to true or false
        },
        // plugins: [
        //   $.util.env.production
        //     ? new webpack.webpack.optimize.UglifyJsPlugin({
        //         minimize: true,
        //         compress: {
        //           warnings: false
        //         }
        //       })
        //     : $.util.noop
        // ],
        devtool: $.util.env.production ? "" : "#source-map",
        mode: "development"
      })
    )
    .pipe(gulp.dest(paths.dest.scripts));
});

gulp.task("sasslint", function() {
  return gulp
    .src(
      paths.styles
        .concat("!src/styles/components/_slick.scss")
        .concat("!src/styles/base/_fonts.scss")
        .concat("!src/styles/helpers/_debug.scss")
        .concat("!src/styles/components/_grid.scss")
    )
    .pipe(
      $.sassLint({
        options: {
          "config-file": "sass-lint.yml"
        }
      })
    )
    .pipe($.sassLint.format());
  // .pipe($.sassLint.failOnError())
});

gulp.task("styles", ["sasslint"], function() {
  return gulp
    .src("src/styles/*.scss")
    .pipe($.plumber())
    .pipe($.util.env.production ? $.util.noop() : $.sourcemaps.init())
    .pipe(
      $.sass({
        outputStyle: $.util.env.production ? "compressed" : "nested",
        includePaths: ["src/Styles", "node_modules/"]
      }).on("error", $.sass.logError)
    )
    .pipe($.postcss([autoprefixer(), mqpacker({ sort: false }), flexibility()]))
    .pipe($.sourcemaps.write("."))
    .pipe(gulp.dest("./"));
});

gulp.task("images", function() {
  return gulp
    .src(paths.images)
    .pipe($.plumber())
    .pipe($.newer(paths.dest.images))
    .pipe(
      $.imagemin({
        optimizationLevel: $.util.env.production ? 5 : 1,
        progressive: true,
        interlaced: true
      })
    )
    .pipe(gulp.dest(paths.dest.images));
});

// gulp.task('extras', function () {
// 	return gulp.src(paths.extras, {base: 'src'})
// 		.pipe($.newer(paths.dest.extras))
// 		.pipe(gulp.dest(paths.dest.extras));
// });

gulp.task("clean", function() {
  return del([paths.dest.extras]);
});

gulp.task("serve", ["watch"], function() {
  browserSync({
    files: [
      "!js/app.min.js",
      "js/**/*",
      "*.css",
      "**/*.php",
      "!dist/**/*.map",
      "admin/**/*"
    ],
    proxy: "http://localhost:8888/flieber/",
    open: !$.util.env.no
  });
});

gulp.task("watch", ["scripts", "styles", "images"], function() {
  gulp.watch(paths.scripts, ["scripts"]);
  gulp.watch(paths.styles, ["styles"]);
  gulp.watch(paths.images, ["images"]);
});

gulp.task("default", function() {
  gulp.start("serve");
});

// gulp.task('deploy', ['clean'], function () {
// 	$.util.env.production = true;
// 	gulp.start(['scripts', 'styles', 'images', 'extras']);
// });
