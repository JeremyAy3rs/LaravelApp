  new Task(pluginName, function () {
        var tsResult = gulp.src(assetPath + search)
            .pipe(ts(options, undefined, _laravelReporter.ElixirMessage()));
        return tsResult
            //  .pipe(concat(outputFileName))
              .pipe(gulp.dest(outputFolder));
 
 
    })