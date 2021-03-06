// Load Gulp...of course
var gulp         = require( 'gulp' );

// CSS related plugins
var sass         = require( 'gulp-sass' );
var autoprefixer = require( 'gulp-autoprefixer' );
var minifycss    = require( 'gulp-uglifycss' );

// JS related plugins
var concat       = require( 'gulp-concat' );
var uglify       = require( 'gulp-uglify' );
var babelify     = require( 'babelify' );
var browserify   = require( 'browserify' );
var source       = require( 'vinyl-source-stream' );
var buffer       = require( 'vinyl-buffer' );
var stripDebug   = require( 'gulp-strip-debug' );

// Utility plugins
var rename       = require( 'gulp-rename' );
var sourcemaps   = require( 'gulp-sourcemaps' );
var notify       = require( 'gulp-notify' );
var plumber      = require( 'gulp-plumber' );
var options      = require( 'gulp-options' );
var gulpif       = require( 'gulp-if' );

// Browers related plugins
var browserSync  = require( 'browser-sync' ).create();
var reload       = browserSync.reload;

// Project related variables

var projectURL   = 'http://www.codearchitect.lt';

var npm = './node_modules/';


//css
var styleSrcFile    = 'style.scss';
var styleSRC     = 'src/scss/' + styleSrcFile;
var styleURL     = './assets/css/';
var mapURL       = './';
//js
var jsSrcFile    = 'main.js';
var jsSRC        = 'src/js/';
var jsURL        = './assets/js/';
var jsFiles      = [ jsSrcFile ];
//img
var imgSRC       = 'src/images/**/*';
var imgURL       = 'assets/images/';

//fonts
var bootstrapFontsSRC  = npm + 'bootstrap-sass/assets/fonts/**';
var fontawesomeFontsSRC = npm + 'font-awesome/fonts/**';
var fontsSRC     = 'src/fonts/**/*';
var fontsURL     = 'assets/fonts/';

//src files
var styleWatch   = 'src/scss/**/*.scss';
var jsWatch      = 'src/scripts/**/*.js';
var imgWatch     = 'src/images/**/*.*';
var fontsWatch   = 'src/fonts/**/*.*';
var phpWatch     = '**/*.php';


// Tasks
gulp.task( 'browser-sync', function() {
    browserSync.init({
        proxy: projectURL,
        /*https: {
         //key: '',
         //cert: ''
         },*/
        injectChanges: true,
        open: false
    });
});

gulp.task( 'styles', function() {
    gulp.src( [ styleSRC ] )
        .pipe( sourcemaps.init() )
        .pipe( sass({
            errLogToConsole: true,
            outputStyle: 'compressed'
        }) )
        .on( 'error', console.error.bind( console ) )
        .pipe( autoprefixer({ browsers: [ 'last 2 versions', '> 5%', 'Firefox ESR' ] }) )
        .pipe( rename( { suffix: '.min' } ) )
        .pipe( sourcemaps.write( mapURL ) )
        .pipe( gulp.dest( styleURL ) )
        .pipe( browserSync.stream() );
});


gulp.task( 'js', function() {
    jsFiles.map( function( entry ) {
        return browserify({
            entries: [jsSRC + entry]
        })
            .transform( babelify, { presets: [ 'env' ] } )
            .bundle()
            .pipe( source( entry ) )
            .pipe( rename( {
                extname: '.min.js'
            } ) )
            .pipe( buffer() )
            .pipe( gulpif( options.has( 'production' ), stripDebug() ) )
            .pipe( sourcemaps.init({ loadMaps: true }) )
            .pipe( uglify() )
            .pipe( sourcemaps.write( '.' ) )
            .pipe( gulp.dest( jsURL ) )
            .pipe( browserSync.stream() );
    });
});


gulp.task( 'images', function() {
    triggerPlumber( imgSRC, imgURL );
});

gulp.task( 'fonts', function() {

    gulp.src([bootstrapFontsSRC,fontawesomeFontsSRC])
        .pipe(plumber())
        .pipe(gulp.dest( fontsURL ));

    triggerPlumber( fontsSRC, fontsURL );
});

function triggerPlumber( src, url ) {
    return gulp.src( src )
        .pipe( plumber() )
        .pipe( gulp.dest( url ) );
}

gulp.task( 'default', ['styles', 'js', 'images', 'fonts'], function() {

    gulp.src( jsURL + 'main.min.js' )
        .pipe( notify({ message: 'Assets Compiled!' }) );
});

gulp.task( 'watch', ['default', 'browser-sync'], function() {
    gulp.watch( phpWatch, reload );
    gulp.watch( styleWatch, [ 'styles'] );
    gulp.watch( jsWatch, [ 'js', reload ] );
    gulp.watch( imgWatch, [ 'images' ] );
    gulp.watch( fontsWatch, [ 'fonts' ] );
    gulp.src( jsURL + 'main.min.js' )
        .pipe( notify({ message: 'Gulp task watch activated' }) );
});