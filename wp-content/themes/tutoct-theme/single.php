<?php
get_header();
?>
<main class="bg-[#F6EEFF] w-full flex flex-col items-center">
    <!-- Изображение поста -->
    <?php if (has_post_thumbnail()) : ?>
        <div class="w-full h-[400px] relative">
            <img class="w-full h-[400px] object-cover" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" />
            <a href="/blog" class="w-12 h-12 p-2 absolute left-[150px] top-[42px] bg-white rounded-[40px] outline outline-1 outline-offset-[-1px] outline-[#d7d7d7] inline-flex justify-start items-center gap-2.5">
                <div data-svg-wrapper data-fill="Off" data-plus="Off" data-property-1="Arrow" class="relative">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.66699 16H25.3337M6.66699 16L14.667 24M6.66699 16L14.667 8" stroke="#120C38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </a>
        </div>
    <?php endif; ?>
    <div class="w-[1000px] py-10 flex flex-col items-center">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <!-- Заголовок поста -->
                <h1 class="text-[#120c38] text-center text-3xl font-bold font-['Mulish'] mb-5"><?php the_title(); ?></h1>

                <!-- Мета-информация -->
                <div class="flex items-center gap-4 mb-6">
                    <div class="text-[#827ead] text-[15px] font-bold font-['Nunito']">
                        <?php echo get_the_date('d.m.Y'); ?> | <?php the_author(); ?>
                    </div>
                </div>

                <!-- Содержимое поста -->
                <div id="post-content" class="text-[#120c38] font-['Mulish'] mb-10">
                    <?php the_content(); ?>
                </div>

                <!-- Комментарии -->
                <div class="comments-section flex flex-col">
                    <h2 class="text-[#120c38] text-2xl font-bold font-['Mulish'] mb-5">Коментарі</h2>
                    <?php
                    // Проверка, открыты ли комментарии
                    if (comments_open() || get_comments_number()) :
                        comments_template(); // Загружает стандартный шаблон комментариев (можно настроить в comments.php)
                    else :
                        echo '<p class="text-[#827ead] font-[\'Nunito\']">Коментарі закриті.</p>';
                    endif;
                    ?>
                </div>

        <?php
            endwhile;
        else :
            echo '<p>Пост не найден.</p>';
        endif;
        ?>
    </div>

</main>

<?php get_footer(); ?>