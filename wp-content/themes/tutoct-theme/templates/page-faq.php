<?php
/*
Template Name: FAQ
*/
get_header();
?>

<main class="bg-[#F6EEFF] h-full w-full px-[150px]">
    <div class="h-full w-full py-[60px]">
        <div class="text-center text-[#120c38] text-5xl font-bold font-['Nunito'] capitalize mb-5">Найчастіші запитання</div>
        <div class="text-center text-[#8a48e6] text-xl font-medium font-['Mulish'] mb-[60px]">Запитання, які ви можете поставити про функціонал та послуги сервісу</div>

        <div class="flex flex-col gap-[20px] mb-[55px]">
            <?php
            $faq_query = new WP_Query(array(
                'post_type'      => 'faq',
                'posts_per_page' => -1, // Вывести все вопросы
                'order'          => 'ASC'
            ));
            if ($faq_query->have_posts()) :
                while ($faq_query->have_posts()) : $faq_query->the_post();
            ?>
                <div class="expandable-component w-full bg-white rounded-[15px] overflow-hidden">
                    <div class="header flex items-center h-[90px] px-[37px] cursor-pointer">
                        <div class="icon-wrapper mr-[37px]">
                            <svg width="16" height="28" viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.7917 14L13.75 14M13.75 14L2.25 2.5M13.75 14L2.25 25.5" stroke="#8A48E6" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="title text-[#120c38] text-2xl font-bold font-['Nunito']"><?php the_title(); ?></div>
                    </div>
                    <div class="content hidden max-w-[950px] px-[37px] pb-5 text-[#8A48E6] text-base leading-relaxed">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
            endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
