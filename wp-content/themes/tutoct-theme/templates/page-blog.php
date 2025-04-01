<?php
/*
Template Name: Blog
*/
get_header();
?>

<main class="bg-[#F6EEFF] h-full w-full flex flex-col px-[150px]">
    <div class="flex justify-between items-center py-5">
        <div class="relative w-[420px]">
            <form id="search-form" method="get" action="<?php echo esc_url(get_permalink()); ?>">
                <input
                    type="text"
                    name="search"
                    placeholder="Шукати"
                    value="<?php echo isset($_GET['search']) ? esc_attr($_GET['search']) : ''; ?>"
                    class="w-full h-12 px-4 py-2 bg-white rounded-[40px] text-[#827ead] text-[15px] font-normal font-['Nunito'] outline outline-1 outline-[#d7d7d7] focus:outline-[#120c38]" />
                <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2">
                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 25L17 17M1 10.3333C1 11.559 1.24141 12.7727 1.71046 13.905C2.1795 15.0374 2.86699 16.0663 3.73367 16.933C4.60035 17.7997 5.62925 18.4872 6.76162 18.9562C7.89399 19.4253 9.10766 19.6667 10.3333 19.6667C11.559 19.6667 12.7727 19.4253 13.905 18.9562C15.0374 18.4872 16.0663 17.7997 16.933 16.933C17.7997 16.0663 18.4872 15.0374 18.9562 13.905C19.4253 12.7727 19.6667 11.559 19.6667 10.3333C19.6667 9.10766 19.4253 7.89399 18.9562 6.76162C18.4872 5.62925 17.7997 4.60035 16.933 3.73367C16.0663 2.86699 15.0374 2.1795 13.905 1.71046C12.7727 1.24141 11.559 1 10.3333 1C9.10766 1 7.89399 1.24141 6.76162 1.71046C5.62925 2.1795 4.60035 2.86699 3.73367 3.73367C2.86699 4.60035 2.1795 5.62925 1.71046 6.76162C1.24141 7.89399 1 9.10766 1 10.3333Z" stroke="#120C38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <input type="hidden" name="sort" value="<?php echo esc_attr(isset($_GET['sort']) ? $_GET['sort'] : 'newest'); ?>" />
            </form>
        </div>
        <!-- Сортировка -->
        <div class="w-[200px] flex justify-center items-center gap-3">
            <select id="sort-posts" name="sort" class="w-full h-full p-2 rounded-[40px] outline outline-1 outline-[#d7d7d7] text-[#827ead] text-[15px] font-bold font-['Nunito'] bg-white" onchange="window.location.href = this.value;">
                <option value="?sort=newest" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'newest') ? 'selected' : ''; ?>>Спочатку нові</option>
                <option value="?sort=oldest" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'oldest') ? 'selected' : ''; ?>>Спочатку старі</option>
                <option value="?sort=title-asc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'title-asc') ? 'selected' : ''; ?>>За назвою (А-Я)</option>
                <option value="?sort=title-desc" <?php echo (isset($_GET['sort']) && $_GET['sort'] === 'title-desc') ? 'selected' : ''; ?>>За назвою (Я-А)</option>
            </select>
        </div>
    </div>
    <!-- Контейнер с блоками -->
    <div id="blocks" class="flex flex-wrap gap-5 justify-around py-5">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1, // Все посты, можно ограничить числом
        );

        // Логика сортировки
        if (isset($_GET['sort'])) {
            switch ($_GET['sort']) {
                case 'newest':
                    $args['orderby'] = 'date';
                    $args['order'] = 'DESC'; // Новые первыми
                    break;
                case 'oldest':
                    $args['orderby'] = 'date';
                    $args['order'] = 'ASC'; // Старые первыми
                    break;
                case 'title-asc':
                    $args['orderby'] = 'title';
                    $args['order'] = 'ASC'; // По алфавиту А-Я
                    break;
                case 'title-desc':
                    $args['orderby'] = 'title';
                    $args['order'] = 'DESC'; // По алфавиту Я-А
                    break;
            }
        } else {
            $args['orderby'] = 'date'; // По умолчанию новые первыми
            $args['order'] = 'DESC';
        }
        
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            $args['s'] = sanitize_text_field($_GET['search']);
        }

        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                $thumbnail = get_the_post_thumbnail_url() ?: 'https://placehold.co/380x244';
                $author_name = get_the_author();
                $author_avatar = get_avatar_url(get_the_author_meta('ID'), ['size' => 48]) ?: 'https://placehold.co/48x48';
                $date = get_the_date('d.m.Y');
                $permalink = get_permalink();
        ?>
                <a href="<?php echo esc_url($permalink); ?>" class="w-[420px] p-5 bg-white rounded-3xl outline outline-1 outline-offset-[-1px] outline-[#d7d7d7] flex flex-col justify-between items-start gap-4">
                    <img class="w-full h-[244px] rounded-2xl object-cover" src="<?php echo esc_url($thumbnail); ?>" />
                    <div class="w-full text-[#120c38] text-xl font-normal font-['Mulish']"><?php the_title(); ?></div>
                    <div class="flex items-center gap-2">
                        <div data-fill="Off" data-plus="Off" data-property-1="Calendar" class="w-6 h-6">
                            <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 1V5M5 1V5M1 9H17M4 12H4.013M7.01 12H7.015M10.01 12H10.015M13.015 12H13.02M10.015 15H10.02M4.01 15H4.015M7.01 15H7.015M1 5C1 4.46957 1.21071 3.96086 1.58579 3.58579C1.96086 3.21071 2.46957 3 3 3H15C15.5304 3 16.0391 3.21071 16.4142 3.58579C16.7893 3.96086 17 4.46957 17 5V17C17 17.5304 16.7893 18.0391 16.4142 18.4142C16.0391 18.7893 15.5304 19 15 19H3C2.46957 19 1.96086 18.7893 1.58579 18.4142C1.21071 18.0391 1 17.5304 1 17V5Z" stroke="#827FAE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="text-[#827ead] text-[15px] font-bold font-['Nunito']"><?php echo $date; ?></div>
                    </div>
                    <div class="w-full flex flex-wrap items-center gap-2.5">
                        <div class="pr-2.5 rounded-[40px] outline outline-1 outline-offset-[-1px] outline-[#d7d7d7] flex items-center gap-1.5">
                            <img class="w-12 h-12 rounded-[60px]" src="<?php echo esc_url($author_avatar); ?>" />
                            <div class="text-[#120c38] text-[15px] font-bold font-['Nunito']"><?php echo esc_html($author_name); ?></div>
                        </div>
                    </div>
                </a>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>