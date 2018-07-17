'use strict';

const $ = require('gulp-load-plugins')();
const gulp = require('gulp');
const cssnano = require('gulp-cssnano');
const combine = require('stream-combiner2').obj;

const isDevelopment = !process.env.NODE_ENV || process.env.NODE_ENV == 'dev';

module.exports = function(options) {

	return function() {
		return combine(
				gulp.src(options.src),
				$.if(isDevelopment, $.sourcemaps.init()),
				$.sass().on('error', $.sass.logError),
				$.if(isDevelopment, combine(
						$.cssnano(),
						$.autoprefixer())),
				$.if(isDevelopment, $.sourcemaps.write()),
				gulp.dest(options.dst)
		).on('error', $.notify.onError(err => ({
					title: 'Styles',
					message: err.message
				})
		));
	};

};