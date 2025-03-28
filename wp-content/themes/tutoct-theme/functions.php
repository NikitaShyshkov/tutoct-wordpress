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

    if (is_page('reviews')) {
        wp_enqueue_style('reviews-style', get_template_directory_uri() . '/assets/css/reviews.css');
        wp_enqueue_script('reviews-script', get_template_directory_uri() . '/assets/js/reviews.js', array('jquery'), null, true);
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

// Функция для создания таблицы отзывов при активации темы
function create_reviews_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'reviews'; // Имя таблицы с префиксом (например, wp_reviews)
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        author_name VARCHAR(255) NOT NULL,
        author_role VARCHAR(100) NOT NULL,
        rating INT NOT NULL,
        review_text TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

// Регистрируем хук для создания таблицы при активации темы
add_action('after_switch_theme', 'create_reviews_table');
// Регистрируем меню для управления отзывами
function register_reviews_menu() {
    add_menu_page(
        'Управление отзывами', // Заголовок страницы
        'Отзывы', // Название пункта меню
        'manage_options', // Право доступа (для администраторов)
        'manage-reviews', // Слаг страницы
        'render_reviews_page', // Функция для отображения страницы
        'dashicons-star-filled', // Иконка меню
        20 // Позиция в меню
    );
}
add_action('admin_menu', 'register_reviews_menu');

// Функция для отображения страницы управления отзывами
function render_reviews_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'reviews';

    // Обработка добавления/редактирования/удаления
    if (isset($_POST['action']) && $_POST['action'] === 'add_review') {
        $author_name = sanitize_text_field($_POST['author_name']);
        $author_role = sanitize_text_field($_POST['author_role']);
        $rating = intval($_POST['rating']);
        $review_text = sanitize_textarea_field($_POST['review_text']);

        $wpdb->insert(
            $table_name,
            array(
                'author_name' => $author_name,
                'author_role' => $author_role,
                'rating' => $rating,
                'review_text' => $review_text,
            ),
            array('%s', '%s', '%d', '%s')
        );
    }

    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $wpdb->delete($table_name, array('id' => $id), array('%d'));
    }

    // Получаем все отзывы
    $reviews = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

    ?>
    <div class="wrap">
        <h1>Управление отзывами</h1>

        <!-- Форма для добавления отзыва -->
        <form method="post" class="mb-8">
            <input type="hidden" name="action" value="add_review">
            <table class="form-table">
                <tr>
                    <th><label for="author_name">Имя автора</label></th>
                    <td><input type="text" name="author_name" id="author_name" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="author_role">Роль автора</label></th>
                    <td><input type="text" name="author_role" id="author_role" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="rating">Рейтинг (1-5)</label></th>
                    <td><input type="number" name="rating" id="rating" min="1" max="5" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="review_text">Текст отзыва</label></th>
                    <td><textarea name="review_text" id="review_text" rows="5" class="regular-text" required></textarea></td>
                </tr>
            </table>
            <?php submit_button('Добавить отзыв'); ?>
        </form>

        <!-- Список отзывов -->
        <h2>Список отзывов</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>Имя автора</th>
                    <th>Роль</th>
                    <th>Рейтинг</th>
                    <th>Текст отзыва</th>
                    <th>Дата</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($reviews) : ?>
                    <?php foreach ($reviews as $review) : ?>
                        <tr>
                            <td><?php echo esc_html($review->author_name); ?></td>
                            <td><?php echo esc_html($review->author_role); ?></td>
                            <td><?php echo esc_html($review->rating); ?></td>
                            <td><?php echo esc_html($review->review_text); ?></td>
                            <td><?php echo esc_html($review->created_at); ?></td>
                            <td>
                                <a href="?page=manage-reviews&action=delete&id=<?php echo $review->id; ?>" onclick="return confirm('Вы уверены, что хотите удалить этот отзыв?');">Удалить</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">Отзывов пока нет.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}
?>
