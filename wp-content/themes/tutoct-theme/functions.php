<?php
function tutoct_theme_enqueue_styles() {
    // Подключаем основной файл стилей темы
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');

    // Подключаем стили для Navbar
    wp_enqueue_style('navbar-style', get_template_directory_uri() . '/assets/css/navbar.css', array(), '1.0', 'all');

    // Подключаем стили для Footer
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.0', 'all');

    if (is_front_page()) {
        wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/css/home.css', array(), '1.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'tutoct_theme_enqueue_styles');

?>
