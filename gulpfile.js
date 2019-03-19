var gulp = require('gulp');

//gulp.task("html",async()=>{
//  gulp.src("html/**/*")
//      .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\html"));
//});

//gulp.task("php",async()=>{
//  gulp.src("php/**/*")
//      .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\php"));
//});
//
//gulp.task("css",async()=>{
//  gulp.src("css/**/*")
//      .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\css"));
//});
//gulp.task("js",async()=>{
//  gulp.src("js/**/*")
//      .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\js"));
//});
//gulp.task("font",async()=>{
//  gulp.src("font/**/*")
//      .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\font"));
//});
//
//gulp.task("images",async()=>{
//  gulp.src("images/**/*")
//      .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\images"));
//});
 

gulp.task("watch-all",async ()=>{

	gulp.watch("html",async()=>{
	    gulp.src("html/**/*")
	        .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\html"));
	});
	
	gulp.watch("php",async()=>{
	    gulp.src("php/**/*")
	        .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\php"));
	});
	
	gulp.watch("css",async()=>{
	    gulp.src("css/**/*")
	        .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\css"));
	});
	
	gulp.watch("js",async()=>{
	    gulp.src("js/**/*")
	        .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\js"));
	});
	
	gulp.watch("font",async()=>{
	    gulp.src("font/**/*")
	        .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\font"));
	});
	
	gulp.watch("images",async()=>{
	    gulp.src("images/**/*")
	        .pipe(gulp.dest("D:\\phpStudy\\PHPTutorial\\WWW\\floweritem\\images"));
	});

});