import {  watch, series } from "gulp";
import browserSync from "browser-sync";

export const themeLocation = "./aquila";


// Browser Syc

const server = browserSync.create();

export const serve = (done) => {
  server.init({
    proxy: "http://localhost:10008/",
  });
  done();
};

export const reload = (done) => {
  server.reload();
  done();
};

// end of Browser Syc

export const watchForChange = () => {
  watch(`${themeLocation}/**/*.css`, reload);
  watch(`${themeLocation}/**/*.php`, reload);
};

const dev = series(serve, watchForChange);


export default dev;
