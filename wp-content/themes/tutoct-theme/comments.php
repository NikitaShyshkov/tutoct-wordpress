<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area mx-auto">
    <?php
    comment_form(array(
        'title_reply' => 'Залишити коментар',
        'class_submit' => 'bg-[#120c38] text-white px-4 py-2 rounded-3xl font-[\'Nunito\']',
        'comment_field' => '<textarea id="comment" name="comment" class="w-full h-12 p-3 rounded-2xl outline outline-1 outline-[#d7d7d7]" rows="5" placeholder="Ваш комментарий" required></textarea>',
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
                        <div class="w-[683px] h-auto flex flex-col gap-[10px] rounded-2xl bg-white p-[15px]">
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