<footer>
    <div id="footer-volna" class="h-[51px] bg-[#F6EEFF]"></div>
    <div class="w-full bg-[#120c38] pt-12 pb-6 relative">
        <div class="max-w-7xl mx-auto px-6 flex flex-col">
            <!-- Main content -->
            <div class="flex flex-wrap justify-between gap-8">
                <!-- Download App Section -->
                <div class="flex w-[332px] items-start gap-4">
                    <div class="w-[332px] h-[88.59px] relative">
                        <div class="w-[332px] h-[62px] left-0 top-[13.19px] absolute">
                            <div class="w-[332px] h-[62px] left-0 top-0 absolute bg-[#8a48e6] rounded-2xl"></div>
                            <div data-svg-wrapper class="left-[105px] top-[15px] absolute">
                                <svg width="33" height="34" viewBox="0 0 33 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0629 12.9572L7.44515 26.9657M7.44515 6.25751L20.0629 20.266M6.8443 6.51331V26.7099C6.84435 26.8595 6.88325 27.0066 6.9571 27.1361C7.03094 27.2657 7.13714 27.3733 7.265 27.4481C7.39287 27.523 7.53791 27.5623 7.68555 27.5623C7.83319 27.5623 7.97822 27.5229 8.10608 27.4481L25.6772 17.1914C25.7778 17.1327 25.8613 17.0481 25.9194 16.9462C25.9775 16.8443 26.008 16.7287 26.008 16.611C26.008 16.4933 25.9775 16.3777 25.9194 16.2758C25.8613 16.1739 25.7778 16.0893 25.6772 16.0306L8.10608 5.77513C7.97813 5.70025 7.83299 5.66085 7.68525 5.66089C7.53751 5.66093 7.39239 5.70041 7.26448 5.77537C7.13658 5.85032 7.03041 5.95809 6.95664 6.08785C6.88288 6.21761 6.84413 6.36355 6.8443 6.51331Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="w-[166px] left-[151px] top-[11px] absolute justify-start text-white text-[15px] font-bold font-['Nunito']">Завантажити мобільний додаток</div>
                        </div>
                        <div class="w-[92px] h-[88.59px] left-0 top-0 absolute">
                            <div class="w-[92px] h-[88.59px] left-0 top-0 absolute bg-white rounded-2xl"></div>
                            <!-- QR Code -->
                            <img class="w-[70.24px] h-[69.85px] left-[10.45px] top-[8.64px] absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/qr-code.png" />

                            <!-- <img class="w-[70.24px] h-[69.85px] left-[10.45px] top-[8.64px] absolute" src="https://placehold.co/70x70" /> -->
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="absolute bottom-[77px] mt-12 text-white text-[15px] font-normal font-['Mulish']">
                        <p>© 2025 TUTOCT. Усі права захищені. </p>
                        <a href="#" class="underline w-[260px]">Політика конфіденційності | Умови використання</a>
                        <span></span>
                        <p class="underline"></p>
                    </div>
                </div>

                <!-- Quick Links 1 -->
                <div class="flex flex-col gap-5">
                    <h3 class="text-white text-[15px] font-bold font-['Nunito']">Швидкі посилання</h3>
                    <div class="flex flex-col gap-5 text-white text-[15px] font-normal font-['Mulish']">
                        <a href="#">Політика конфіденційності</a>
                        <a href="#">Умови використання</a>
                        <a href="#">Усі права захищені</a>
                    </div>
                </div>

                <!-- Quick Links 2 -->
                <div class="flex flex-col gap-5">
                    <h3 class="text-white text-[15px] font-bold font-['Nunito']">Швидкі посилання</h3>
                    <div class="flex flex-col gap-5 text-white text-[15px] font-normal font-['Mulish']">
                        <a href="<?php echo home_url('/'); ?>" <?php echo is_home() ? 'aria-current="page"' : ''; ?>>Про нас</a>
                        <a href="<?php echo home_url('/blog/'); ?>" <?php echo (is_page('blog') || is_category() || is_single()) ? 'aria-current="page"' : ''; ?>>Блог</a>
                        <a href="<?php echo home_url('/price/'); ?>" <?php echo is_page('price') ? 'aria-current="page"' : ''; ?>>Ціни</a>
                        <a href="<?php echo home_url('/reviews/'); ?>" <?php echo is_page('reviews') ? 'aria-current="page"' : ''; ?>>Відгуки</a>
                        <a href="<?php echo home_url('/faq/'); ?>" <?php echo is_page('faq') ? 'aria-current="page"' : ''; ?>>Питання відповідь</a>
                    </div>

                    <style>
                        /* Стили для активной ссылки */
                        a[aria-current="page"] {
                            pointer-events: none;
                            font-weight: bold;
                            color: #8a48e6;
                            /* Другие стили */
                        }
                    </style>
                </div>

                <!-- Contacts -->
                <div class="flex flex-col gap-5">
                    <h3 class="text-white text-[15px] font-bold font-['Nunito']">Контакти</h3>
                    <div class="flex flex-col gap-5 text-white text-[15px] font-normal font-['Mulish']">
                        <span>tutoctmail@gmail.com</span>
                        <span>+38 (050) 123-45-67</span>
                        <div class="w-full flex justify-around">
                            <a href="https://www.facebook.com/profile.php?id=61574093519970">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 10V14H10V21H14V14H17L18 10H14V8C14 7.73478 14.1054 7.48043 14.2929 7.29289C14.4804 7.10536 14.7348 7 15 7H18V3H15C13.6739 3 12.4021 3.52678 11.4645 4.46447C10.5268 5.40215 10 6.67392 10 8V10H7Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/tutoct_edu_crm/">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 8C4 6.93913 4.42143 5.92172 5.17157 5.17157C5.92172 4.42143 6.93913 4 8 4H16C17.0609 4 18.0783 4.42143 18.8284 5.17157C19.5786 5.92172 20 6.93913 20 8V16C20 17.0609 19.5786 18.0783 18.8284 18.8284C18.0783 19.5786 17.0609 20 16 20H8C6.93913 20 5.92172 19.5786 5.17157 18.8284C4.42143 18.0783 4 17.0609 4 16V8Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5 7.5V7.51M9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>