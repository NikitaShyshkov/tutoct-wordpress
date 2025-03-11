const gulp = require('gulp');
const browserSync = require('browser-sync').create();

// Стрим для отслеживания изменений в файлах
gulp.task('watch', function () {
    browserSync.init({
        proxy: 'http://tutoct.local',  // Укажи свой локальный URL
        files: ['**/*.php', 'assets/css/**/*.css', 'assets/js/**/*.js'],
        reloadDebounce: 0, // Задержка перед обновлением
    });

    gulp.watch('assets/css/**/*.css').on('change', browserSync.reload);
    gulp.watch('assets/js/**/*.js').on('change', browserSync.reload);
    gulp.watch('**/*.php').on('change', browserSync.reload);
});
