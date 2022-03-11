// Dependencies
const { parallel, src, dest, watch } = require('gulp');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const precss = require('precss');
const shortColor = require('postcss-short-color');
const cleanCSS = require('gulp-clean-css');
const rollup = require('gulp-better-rollup');
const resolve = require('rollup-plugin-node-resolve');
const commonjs = require('rollup-plugin-commonjs');

// Folders
const npm = 'node_modules';
const dist = 'assets';

// Vendors
const vendors = {
	js: [`${npm}/slick-carousel/slick/slick.min.js`],
};

function vendorJS(cb) {
	src(vendors.js)
		.pipe(concat('vendor.js'))
		.pipe(dest(`${dist}/js`));
	cb();
}

// Assets
const assets = {
	scss: 'src/scss/*.scss',
	js: ['src/js/main.js'],
};

function css(cb) {
	src(assets.scss)
		.pipe(sourcemaps.init())
		.pipe(
			sass({
				includePaths: ['node_modules'],
				outputStyle: 'compressed',
			}).on('error', sass.logError)
		)
		.pipe(sourcemaps.write())
		.pipe(cleanCSS())
		.pipe(postcss([precss, autoprefixer(), shortColor]))
		.pipe(dest(`${dist}/css`));
	cb();
}

const js = cb => {
	src(assets.js, {
		sourcemaps: false,
	})
		.pipe(rollup({ plugins: [babel(), resolve(), commonjs()] }, 'umd'))
		.pipe(
			uglify({
				mangle: true,
				compress: true,
			})
		)
		.pipe(dest(`${dist}/js`));
	cb();
};

// Watch
exports.watch = cb => {
	watch('src/scss/**/*.scss', parallel(css));
	watch('src/js/**/*.js', js);
	cb();
};

exports.js = js;
exports.vendorJS = vendorJS;
exports.vendors = parallel(vendorJS);
exports.css = css;
exports.default = parallel(css, vendorJS, js);
