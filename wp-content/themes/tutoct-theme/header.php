<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="w-full h-[100px] bg-white flex items-center justify-center px-6 relative">
        <!-- Hamburger Menu (hidden on desktop) -->
        <button id="menu-toggle" class="md:hidden flex flex-col gap-1 w-8 h-6 z-50">
            <span class="w-full h-1 bg-[#120c38] transition-all"></span>
            <span class="w-full h-1 bg-[#120c38] transition-all"></span>
            <span class="w-full h-1 bg-[#120c38] transition-all"></span>
        </button>

        <!-- Logo -->
        <img id="logo" class="w-[68px] h-16 m-[50px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-navbar.png" alt="Logo" />

        <!-- Navigation -->
        <nav id="nav-menu" class="flex items-center justify-center h-full gap-12 mr-[62px] md:flex md:items-center md:gap-12">
            <a href="/" class="<?php echo is_home() ? 'active' : ''; ?> flex flex-col justify-between h-full text-center text-[#120c38] text-2xl font-normal font-['Nunito']">
                <p class="m-auto">Про нас</p>
                <div class="w-20 h-2.5 rounded-tl-[18px] rounded-tr-[19px]"></div>
            </a>
            <a href="/blog" class="<?php echo is_page('blog') ? 'active' : ''; ?> flex flex-col justify-between h-full text-center text-[#120c38] text-2xl font-normal font-['Nunito']">
                <p class="m-auto">Блог</p>
                <div class="w-20 h-2.5 rounded-tl-[18px] rounded-tr-[19px]"></div>
            </a>
            <a href="/contacts" class="<?php echo is_page('contacts') ? 'active' : ''; ?> flex flex-col justify-between h-full text-center text-[#120c38] text-2xl font-normal font-['Nunito']">
                <p class="m-auto">Контакти</p>
                <div class="w-20 h-2.5 rounded-tl-[18px] rounded-tr-[19px]"></div>
            </a>
            <a href="/price" class="<?php echo is_page('price') ? 'active' : ''; ?> flex flex-col justify-between h-full text-center text-[#120c38] text-2xl font-normal font-['Nunito']">
                <p class="m-auto">Ціни</p>
                <div class="w-20 h-2.5 rounded-tl-[18px] rounded-tr-[19px]"></div>
            </a>
            <a href="/reviews" class="<?php echo is_page('reviews') ? 'active' : ''; ?> flex flex-col justify-between h-full text-center text-[#120c38] text-2xl font-normal font-['Nunito']">
                <p class="m-auto">Відгуки</p>
                <div class="w-20 h-2.5 rounded-tl-[18px] rounded-tr-[19px]"></div>
            </a>
            <a href="/faq" class="<?php echo is_page('faq') ? 'active' : ''; ?> flex flex-col justify-between h-full text-center text-[#120c38] text-2xl font-normal font-['Nunito']">
                <p class="m-auto">Питання відповідь</p>
                <div class="w-20 h-2.5 rounded-tl-[18px] rounded-tr-[19px]"></div>
            </a>
        </nav>

        <!-- Icons -->
        <div id="change-icons" class="flex items-center gap-4">
            <div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="white" />
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#D7D7D7" stroke-opacity="0.85" />
                    <path d="M12 13H19M17 11V13C17 17.418 14.761 21 12 21" stroke="#120C38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M13 17C13 19.144 15.952 20.908 19.7 21M20 28L24 19L28 28M27.1 26H20.9" stroke="#120c38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div>
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="white" />
                    <rect x="0.5" y="0.5" width="39" height="39" rx="19.5" stroke="#D7D7D7" stroke-opacity="0.85" />
                    <path d="M11 20H12M20 11V12M28 20H29M20 28V29M13.6 13.6L14.3 14.3M26.4 13.6L25.7 14.3M25.7 25.7L26.4 26.4M14.3 25.7L13.6 26.4M16 20C16 21.0609 16.4214 22.0783 17.1716 22.8284C17.9217 23.5786 18.9391 24 20 24C21.0609 24 22.0783 23.5786 22.8284 22.8284C23.5786 22.0783 24 21.0609 24 20C24 18.9391 23.5786 17.9217 22.8284 17.1716C22.0783 16.4214 21.0609 16 20 16C18.9391 16 17.9217 16.4214 17.1716 17.1716C16.4214 17.9217 16 18.9391 16 20Z" stroke="#120c38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Mobile Menu Overlay -->
        <div id="mobile-menu" class="hidden fixed inset-0 bg-white z-40 flex-col items-center justify-center gap-6 text-2xl font-['Nunito']">
            <a href="/" class="<?php echo is_home() ? 'text-[#8a48e6] font-semibold' : 'text-[#120c38] font-normal'; ?>">Про нас</a>
            <a href="/blog" class="<?php echo is_page('blog') ? 'text-[#8a48e6] font-semibold' : 'text-[#120c38] font-normal'; ?>">Блог</a>
            <a href="/contacts" class="<?php echo is_page('contacts') ? 'text-[#8a48e6] font-semibold' : 'text-[#120c38] font-normal'; ?>">Контакти</a>
            <a href="/price" class="<?php echo is_page('price') ? 'text-[#8a48e6] font-semibold' : 'text-[#120c38] font-normal'; ?>">Ціни</a>
            <a href="/reviews" class="<?php echo is_page('reviews') ? 'text-[#8a48e6] font-semibold' : 'text-[#120c38] font-normal'; ?>">Відгуки</a>
            <a href="/faq" class="<?php echo is_page('faq') ? 'text-[#8a48e6] font-semibold' : 'text-[#120c38] font-normal'; ?>">Питання відповідь</a>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const navMenu = document.getElementById('nav-menu');

            menuToggle.addEventListener('click', () => {
                menuToggle.classList.toggle('active');
                mobileMenu.classList.toggle('active');
                // Prevent scrolling when menu is open
                document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : 'auto';
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!mobileMenu.contains(e.target) && !menuToggle.contains(e.target) && mobileMenu.classList.contains('active')) {
                    menuToggle.classList.remove('active');
                    mobileMenu.classList.remove('active');
                    document.body.style.overflow = 'auto';
                }
            });
        });
    </script>