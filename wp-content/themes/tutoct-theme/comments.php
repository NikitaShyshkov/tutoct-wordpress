<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mx-auto">
    <?php
    comment_form(array(
        'title_reply' => null, // Заголовок формы
        'class_submit' => 'bg-[#120c38] text-white px-4 py-2 rounded-3xl font-[\'Nunito\'] hover:bg-[#2a1e5a] transition-colors',
        'comment_field' => '<div class="comment-form-field"><textarea id="comment" name="comment" class="w-full p-3 rounded-2xl outline outline-1 outline-[#d7d7d7] focus:outline-[#120c38] text-[#120c38] font-[\'Mulish\']" rows="5" placeholder="Ваш коментар" required></textarea></div>',
        'fields' => array( // Поля для имени, email, сайта
            'author' => '<div class="comment-form-field"><input id="author" name="author" type="text" class="w-full p-3 rounded-2xl outline outline-1 outline-[#d7d7d7] focus:outline-[#120c38] text-[#120c38] font-[\'Mulish\']" placeholder="Ваше ім’я" value="' . esc_attr($commenter['comment_author']) . '" size="30" required /></div>',
            'email'  => '<div class="comment-form-field"><input id="email" name="email" type="email" class="w-full p-3 rounded-2xl outline outline-1 outline-[#d7d7d7] focus:outline-[#120c38] text-[#120c38] font-[\'Mulish\']" placeholder="Ваш email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" required /></div>',
            'url'    => '<div class="comment-form-field"><input id="url" name="url" type="url" class="w-full p-3 rounded-2xl outline outline-1 outline-[#d7d7d7] focus:outline-[#120c38] text-[#120c38] font-[\'Mulish\']" placeholder="Ваш сайт (необов’язково)" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div>',
        ),
        'class_form' => 'comment-form-styled', // Класс для всей формы
        'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s">%4$s</button>', // Кастомный шаблон кнопки
        'submit_field' => '<div class="form-submit">%1$s %2$s</div>', // Обертка для кнопки
    ));
    ?>

    <?php if (have_comments()) : ?>
        <h3 class="text-[#120c38] text-xl font-bold font-['Mulish'] mb-4">
            <?php
            printf(
                _nx('Один коментарій', '%1$s комментарів', get_comments_number(), 'comments title', 'textdomain'),
                number_format_i18n(get_comments_number())
            );
            ?>
        </h3>

        <ul class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ul',
                'short_ping' => true,
                'avatar_size' => 48,
                'callback'   => function ($comment, $args, $depth) {
            ?>
                <li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
                    <div class="flex items-start gap-4 mb-4">
                        <img class="w-12 h-12 rounded-[60px]" src="<?php echo get_avatar_url($comment, ['size' => 48]); ?>" />
                        <div class="max-w-[683px] h-auto flex flex-col gap-[10px] rounded-2xl bg-white p-[15px]">
                            <div class="max-w-[653px] text-[#120c38] text-[15px] font-bold font-['Nunito']"><?php comment_author(); ?></div>
                            <div class="max-w-[653px] text-[#120c38] text-xl font-normal font-['Mulish']"><?php comment_text(); ?></div>
                            <div class="text-[#827ead] text-[15px] font-bold font-['Nunito']"><?php comment_date('d.m.Y'); ?></div>
                        </div>
                    </div>
                </li>
            <?php
                }
            ));
            ?>
        </ul>

        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation">
                <div><?php previous_comments_link('Предыдущие комментарии'); ?></div>
                <div><?php next_comments_link('Следующие комментарии'); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>
</div>