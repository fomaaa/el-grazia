var gulp = require('gulp');
var server = require('browser-sync').create();
var util = require('gulp-util');
var config = require('../config');

var urlUtil = require('url');

var URL = 'http://grazia.loc';
var parsedUrl = urlUtil.parse(URL);
var hostname = parsedUrl.hostname;
var host = parsedUrl.host;
var port = parsedUrl.port || 80;

// in CL 'gulp server --open' to open current project in browser
// in CL 'gulp server --tunnel siteName' to make project available over http://siteName.localtunnel.me

gulp.task('server', function () {
  server.init({
    // server: {
    //   baseDir: !config.production ? [config.dest.root, config.src.root] : config.dest.root,
    //   directory: false,
    //   serveStaticOptions: {
    //     extensions: ['html']
    //   }
    // },
    files: [
      config.dest.html + '/*.html',
      config.dest.css + '/*.css',
      config.dest.img + '/**/*'
    ],
    proxy: {
      target: "http://grazia.loc",
    },
    port: util.env.port || 8080,
    logLevel: 'info', // 'debug', 'info', 'silent', 'warn'
    logConnections: false,
    logFileChanges: true,
    open: Boolean(util.env.open),
    notify: false,
    ghostMode: false,
    online: Boolean(util.env.tunnel),
    tunnel: util.env.tunnel || null
  });
});

module.exports = server;
