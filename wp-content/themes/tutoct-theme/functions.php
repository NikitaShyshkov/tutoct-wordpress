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

    if (is_page('faq')) {
        wp_enqueue_style('faq-style', get_template_directory_uri() . '/assets/css/faq.css');
        wp_enqueue_script('faq-script', get_template_directory_uri() . '/assets/js/faq.js', array('jquery'), null, true);
    }

    if (is_page('contacts')) {
        wp_enqueue_style('contacts-style', get_template_directory_uri() . '/assets/css/contacts.css');
    }

    if (is_page('price')) {
        wp_enqueue_style('price-style', get_template_directory_uri() . '/assets/css/price.css');
    }
}
add_action('wp_enqueue_scripts', 'tutoct_theme_enqueue_styles');

function tutoct_register_faq_post_type() {
    register_post_type('faq', array(
        'labels' => array(
            'name'          => 'FAQ',
            'singular_name' => 'Вопрос',
            'add_new'       => 'Добавить вопрос',
            'add_new_item'  => 'Добавить новый вопрос',
            'edit_item'     => 'Редактировать вопрос',
            'new_item'      => 'Новый вопрос',
            'view_item'     => 'Просмотр вопроса',
            'search_items'  => 'Искать вопросы',
            'not_found'     => 'Вопросов не найдено',
        ),
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-editor-help',
        'supports'     => array('title', 'editor'),
    ));
}
add_action('init', 'tutoct_register_faq_post_type');

?>
