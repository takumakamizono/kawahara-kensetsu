const browserSync = require("browser-sync");
const { src, dest, watch } = require("gulp");
const autoprefixer = require("autoprefixer");
const path = require("path");
const LoadPlugins = require("gulp-load-plugins");
const $ = LoadPlugins();
const sass = require("gulp-dart-sass");
const pkg = require("./package.json");
const server = browserSync.create();

function imageChange() {
  let count = 1;
  return src("./images-src/*.jpg")
    .pipe($.imagemin())
    .pipe(
      $.rename((path) => {
        path.basename = "kawahara-" + count;
        count++;
      })
    )
    .pipe(dest("./kawahara-kensetsu/images"));
}

function styles() {
  const themeInfo = pkg.theme;
  const comment = `
  /*
  Theme Name: ${themeInfo.name}
  Theme URI: ${themeInfo.uri}
  Description: ${themeInfo.description}
  Version: ${themeInfo.version}
  Author: ${themeInfo.author}
  Author URI: ${themeInfo.authorUri}
  License: ${themeInfo.license}
  License URI: ${themeInfo.licenseUri}
  Text Domain: ${themeInfo.textDomain}
  Domain Path: ${themeInfo.domainPath}
  */
  `;

  return src("./kawahara-kensetsu/styles/style.scss")
    .pipe($.sourcemaps.init())
    .pipe(sass())
    .pipe(
      $.postcss([autoprefixer({ overrideBrowserslist: ["last 2 versions"] })])
    )
    .pipe($.cleanCss())
    .pipe($.header(comment))
    .pipe($.sourcemaps.write("."))
    .pipe(dest("./kawahara-kensetsu/"))
    .pipe(browserSync.stream());
}

function startAppServer() {
  browserSync.init({
    proxy: "http://localhost:8888",
    port: 8887,
    files: ["kawahara-kensetsu/**/*.css"],
    notify: false,
  });

  watch("./kawahara-kensetsu/**/*.scss", styles);
  watch("./kawahara-kensetsu/**/*.php").on("change", browserSync.reload);
}

function jsMinify() {
  return src([
    "./kawahara-kensetsu/scripts/libs/*.js",
    "./kawahara-kensetsu/scripts/*.js",
    "!./kawahara-kensetsu/scripts/libs/*.min.js",
    "!./kawahara-kensetsu/scripts/*.min.js",
  ])
    .pipe($.uglify())
    .pipe(
      $.rename({
        extname: ".min.js",
      })
    )
    .pipe(
      $.if(
        (file) => path.basename(file.path) === "main.min.js",
        dest("./kawahara-kensetsu/scripts"),
        dest("./kawahara-kensetsu/scripts/libs")
      )
    );
}

exports.imageChange = imageChange;
exports.styles = styles;
exports.serve = startAppServer;
exports.javascripts = jsMinify;
