const { series, watch, src, dest } = require('gulp');
const sass = require('gulp-sass');

function sasstocss(cb){
    return src('./css/*.scss')
    .pipe(sass( {outputStyle: 'compressed'} ))
    .pipe(dest('./css'))
    
    cb()
};


exports.watchme = () => { watch('./css/*.scss', sasstocss) }