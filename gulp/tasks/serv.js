module.exports = function () {

  $.gulp.task('serv', function () {
    $.browserSync.init({
      // server: {
      //     baseDir: './' + $.public
      // },
      proxy: "0025lawyer",
      // online: false, // Work offline without internet connection
      // tunnel: true, tunnel: 'projectname', // Demonstration page: http://projectname.localtunnel.me
    });

  });

}
