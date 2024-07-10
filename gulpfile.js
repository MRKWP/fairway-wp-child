const zip = require('gulp-zip');
const { src, dest, series } = require('gulp');

function childzip(){
    return src('assets/css/*','functions.php', 'screenshot.png','style.css','README.md','template-parts/*')
    .pipe(zip('fairway-wp-child.zip'))
    .pipe(dest('zip'));
}

exports.zip = series(childzip);