<?php
/*
Template Name: Contacts
*/
get_header();
?>

<main class="bg-[#F6EEFF] h-full w-full px-[150px] flex flex-col">
    <div id="head-text" class="w-full flex flex-col justify-center items-center mt-[60px] gap-[15px]">
        <div class="text-center justify-start text-[#120c38] text-5xl font-bold font-['Nunito']">Зв'яжіться з нами!</div>
        <div class="w-[170px] h-2.5 mx-auto overflow-hidden">
            <div data-svg-wrapper>
                <svg width="170" height="10" viewBox="0 0 170 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 5C7.6 -0.333333 15.2 -0.333333 22.8 5C30.4 10.3333 38 10.3333 45.6 5C53.2 -0.333333 60.8 -0.333333 68.4 5C76 10.3333 83.6 10.3333 91.2 5C98.8 -0.333333 106.4 -0.333333 114 5C121.6 10.3333 129.2 10.3333 136.8 5C144.4 -0.333333 152 -0.333333 159.6 5C167.2 10.3333 174.8 10.3333 182.4 5C190 -0.333333 197.6 -0.333333 205.2 5C212.8 10.3333 220.4 10.3333 228 5" stroke="#8A48E6" stroke-width="2" />
                </svg>
            </div>
        </div>
        <div class="max-w-[683px] text-center text-[#120c38] text-xl font-normal font-['Mulish']">Ми завжди раді відповісти на ваші запитання та допомогти вирішити будь-які проблеми. Не вагайтеся звертатися до нас — ми готові підтримати вас у будь-який час!</div>
    </div>
    <div id="block-2" class="w-full grid grid-cols-2 my-[60px] gap-[15px]">
        <div id="block-2-1" class="grid grid-cols-2 gap-5">
            <!-- Блок Телефон -->
            <div class="p-5 bg-white rounded-2xl flex flex-col justify-start items-start gap-1.5">
                <div data-fill="Off" data-plus="Off" data-property-1="Phone" class="w-[30px] h-[30px] relative overflow-hidden">
                    <div data-svg-wrapper class="absolute left-[3.75px] top-[5px]">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.25 1H9.25L11.75 7.25L8.625 9.125C9.9637 11.8394 12.1606 14.0363 14.875 15.375L16.75 12.25L23 14.75V19.75C23 20.413 22.7366 21.0489 22.2678 21.5178C21.7989 21.9866 21.163 22.25 20.5 22.25C15.6241 21.9537 11.0252 19.8831 7.57104 16.429C4.11688 12.9748 2.04631 8.37592 1.75 3.5C1.75 2.83696 2.01339 2.20107 2.48223 1.73223C2.95107 1.26339 3.58696 1 4.25 1Z" stroke="#120C38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="text-[#120c38] text-2xl font-bold font-['Mulish']">Телефон</div>
                <div class="text-[#120c38] text-[15px] font-normal font-['Mulish']">Потрібна термінова допомога або консультація? Зателефонуйте нам за номером</div>
                <div class="text-[#120c38] text-[15px] font-bold font-['Nunito']">+38 (050) 123-45-67</div>
            </div>

            <!-- Блок Email -->
            <div class="p-5 bg-white rounded-2xl flex flex-col justify-start items-start gap-1.5">
                <div data-fill="Off" data-plus="Off" data-property-1="Mail" class="w-[30px] h-[30px] relative overflow-hidden">
                    <div data-svg-wrapper class="absolute left-[3.75px] top-[6.25px]">
                        <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.75 3.75C1.75 3.08696 2.01339 2.45107 2.48223 1.98223C2.95107 1.51339 3.58696 1.25 4.25 1.25H21.75C22.413 1.25 23.0489 1.51339 23.5178 1.98223C23.9866 2.45107 24.25 3.08696 24.25 3.75V16.25C24.25 16.913 23.9866 17.5489 23.5178 18.0178C23.0489 18.4866 22.413 18.75 21.75 18.75H4.25C3.58696 18.75 2.95107 18.4866 2.48223 18.0178C2.01339 17.5489 1.75 16.913 1.75 16.25V3.75Z" stroke="#120C38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div data-svg-wrapper class="absolute left-[3.75px] top-[8.75px]">
                        <svg width="26" height="11" viewBox="0 0 26 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.75 1.75L13 9.25L24.25 1.75" stroke="#120C38" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
                <div class="text-[#120c38] text-2xl font-bold font-['Mulish']">Email</div>
                <div class="text-[#120c38] text-[15px] font-normal font-['Mulish']">Маєте запитання або хочете дізнатися більше? Напишіть нам, і ми обов'язково відповімо якнайшвидше</div>
                <div class="text-[#120c38] text-[15px] font-bold font-['Nunito']">tutoctmail@gmail.com</div>
            </div>

            <!-- Блок Соц. Мережі -->
            <div class="p-5 col-span-2 bg-white rounded-2xl flex flex-col justify-start items-start gap-[15px]">
                <div class="text-[#120c38] text-2xl font-bold font-['Mulish']">Соц. Мережі</div>
                <div class="text-[#120c38] text-[15px] font-normal font-['Mulish']">Слідкуйте за нами в соцмережах, щоб бути в курсі всіх новин, оновлень та корисних порад! Залишайте свої коментарі, запитання чи відгуки — ми завжди раді спілкуванню та готові допомогти!</div>
                <div class="flex justify-start items-center gap-2.5">
                    <div class="flex overflow-hidden w-10 h-10 bg-white rounded-[40px] border border-[#d7d7d7]">
                        <svg class="mx-auto my-auto" width="13" height="20" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 8V12H4V19H8V12H11L12 8H8V6C8 5.73478 8.10536 5.48043 8.29289 5.29289C8.48043 5.10536 8.73478 5 9 5H12V1H9C7.67392 1 6.40215 1.52678 5.46447 2.46447C4.52678 3.40215 4 4.67392 4 6V8H1Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex overflow-hidden w-10 h-10 bg-white rounded-[40px] border border-[#d7d7d7]">
                        <svg class="mx-auto my-auto" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 17L7.768 10.232M10.228 7.772L17 1M1 1L12.733 17H17L5.267 1H1Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="flex relative overflow-hidden w-10 h-10 bg-white rounded-[40px] border border-[#d7d7d7]">
                        <div class="relative h-[18px] w-[18px] m-auto">
                            <div data-svg-wrapper class="left-0 top-0 absolute">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 5C1 3.93913 1.42143 2.92172 2.17157 2.17157C2.92172 1.42143 3.93913 1 5 1H13C14.0609 1 15.0783 1.42143 15.8284 2.17157C16.5786 2.92172 17 3.93913 17 5V13C17 14.0609 16.5786 15.0783 15.8284 15.8284C15.0783 16.5786 14.0609 17 13 17H5C3.93913 17 2.92172 16.5786 2.17157 15.8284C1.42143 15.0783 1 14.0609 1 13V5Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div data-svg-wrapper class="left-[5px] top-[3.50px] absolute">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 1.5V1.51M1 6C1 6.79565 1.31607 7.55871 1.87868 8.12132C2.44129 8.68393 3.20435 9 4 9C4.79565 9 5.55871 8.68393 6.12132 8.12132C6.68393 7.55871 7 6.79565 7 6C7 5.20435 6.68393 4.44129 6.12132 3.87868C5.55871 3.31607 4.79565 3 4 3C3.20435 3 2.44129 3.31607 1.87868 3.87868C1.31607 4.44129 1 5.20435 1 6Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="flex overflow-hidden w-10 h-10 bg-white rounded-[40px] border border-[#d7d7d7]">
                        <svg class="mx-auto my-auto" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 5.917V9.951C17.1861 9.77094 15.4565 9.09605 14 8V12.5C13.9997 13.7211 13.6555 14.9175 13.0067 15.952C12.3579 16.9865 11.4308 17.8174 10.3317 18.3493C9.2325 18.8813 8.00571 19.0929 6.79185 18.9599C5.57799 18.8268 4.42615 18.3545 3.46831 17.5971C2.51046 16.8397 1.78534 15.8278 1.37603 14.6773C0.966714 13.5268 0.889763 12.2843 1.15399 11.0921C1.41821 9.8999 2.01293 8.80624 2.87 7.93642C3.72707 7.0666 4.81183 6.4558 6 6.174V10.5C5.65909 10.7557 5.38919 11.0943 5.21594 11.4836C5.04269 11.8729 4.97183 12.3001 5.0101 12.7245C5.04837 13.1489 5.1945 13.5565 5.4346 13.9086C5.6747 14.2606 6.00081 14.5455 6.38197 14.7361C6.76312 14.9266 7.18666 15.0166 7.61237 14.9975C8.03808 14.9783 8.45183 14.8507 8.81433 14.6266C9.17683 14.4026 9.47604 14.0896 9.68356 13.7174C9.89107 13.3452 10 12.9261 10 12.5V1H14.083C14.2912 2.2284 14.8764 3.36162 15.7574 4.24263C16.6384 5.12363 17.7716 5.70878 19 5.917Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <form id="user-question-form" class="p-5 bg-white rounded-2xl flex flex-col justify-start items-start gap-5">
            <div class="w-[164px] justify-start text-[#120c38] text-2xl font-bold font-['Mulish']">Напиши нам!</div>
            <div class="max-w-[555px] justify-start text-[#120c38] text-[15px] font-normal font-['Mulish']">Ми тут, щоб допомогти вам! Якщо у вас є запитання або пропозиції, не соромтеся звертатися – ми завжди на зв’язку та готові надати підтримку</div>
            <div id="inputs-div" class="w-full flex gap-5">
                <!-- Поле Имя -->
                <input type="text" name="first_name" placeholder="Ім'я" class="w-full h-12 px-4 bg-white border border-gray-200 rounded-lg text-gray-600 text-base font-normal focus:outline-none focus:ring-1 focus:ring-black placeholder-gray-500" required>

                <!-- Поле Призвище -->
                <input type="text" name="last_name" placeholder="Прізвище" class="w-full h-12 px-4 bg-white border border-gray-200 rounded-lg text-gray-600 text-base font-normal focus:outline-none focus:ring-1 focus:ring-black placeholder-gray-500" required>

                <!-- Поле Ваш Email -->
                <input type="email" name="email" placeholder="Ваш Email" class="w-full h-12 px-4 bg-white border border-gray-200 rounded-lg text-gray-600 text-base font-normal focus:outline-none focus:ring-1 focus:ring-black placeholder-gray-500" required>
            </div>

            <!-- Поле Повідомлення -->
            <div class="w-full h-32 relative">
                <textarea name="message" placeholder="Повідомлення" class="w-full h-full px-4 pt-4 pb-12 bg-white border border-gray-200 rounded-lg text-gray-600 text-base font-normal resize-none focus:outline-none focus:ring-1 focus:ring-black placeholder-[#827FAE]" required></textarea>
                <div class="absolute bottom-7 right-8">
                    <div data-svg-wrapper class="absolute">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 6H7.51M12.5 6H12.51M16 1C16.7956 1 17.5587 1.31607 18.1213 1.87868C18.6839 2.44129 19 3.20435 19 4V12C19 12.7956 18.6839 13.5587 18.1213 14.1213C17.5587 14.6839 16.7956 15 16 15H11L6 18V15H4C3.20435 15 2.44129 14.6839 1.87868 14.1213C1.31607 13.5587 1 12.7956 1 12V4C1 3.20435 1.31607 2.44129 1.87868 1.87868C2.44129 1.31607 3.20435 1 4 1H16Z" stroke="#827FAE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div data-svg-wrapper class="left-[5.50px] top-[9px] absolute">
                        <svg width="8" height="4" viewBox="0 0 8 4" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 1C1.82588 1.3326 2.21485 1.59683 2.64413 1.77721C3.07341 1.9576 3.53436 2.05051 4 2.05051C4.46564 2.05051 4.92659 1.9576 5.35587 1.77721C5.78515 1.59683 6.17412 1.3326 6.5 1" stroke="#827FAE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-[309px] justify-start text-[#827ead] text-xs font-normal font-['Mulish']">*відповідь повинна прийти впродовж 48 годин</div>
            <button type="submit" id="send-question" class="w-[210px] self-end h-10 p-2.5 bg-[#8a48e6] rounded-[40px] inline-flex justify-between items-center">
                <div class="justify-center text-white text-[15px] font-bold font-['Nunito']">Надіслати запитання</div>
                <div data-fill="Off" data-plus="Off" data-property-1="Send" class="w-6 h-6 relative overflow-hidden">
                    <div data-svg-wrapper class="left-[4px] top-[4px] absolute">
                        <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.0004 9.00001L1.69842 1.03401C1.60543 0.997838 1.50374 0.990318 1.40644 1.01242C1.30913 1.03451 1.22067 1.08522 1.15242 1.15801C1.08242 1.23268 1.03423 1.32511 1.01307 1.42524C0.991915 1.52538 0.998607 1.62941 1.03242 1.72601L3.50042 9.00001M18.0004 9.00001L1.69842 16.966C1.60543 17.0022 1.50374 17.0097 1.40644 16.9876C1.30913 16.9655 1.22067 16.9148 1.15242 16.842C1.08242 16.7673 1.03423 16.6749 1.01307 16.5748C0.991915 16.4746 0.998607 16.3706 1.03242 16.274L3.50042 9.00001M18.0004 9.00001H3.50042" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </button>
        </form>
    </div>
    <div id="block-oct" class="w-full flex justify-center items-center translate-y-4">
        <img class="translate-x-[100px] translate-y-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/oct-contact.png" alt="">
        <div class="max-w-[606px] w-full h-[90px] rounded-2xl bg-white py-5 pl-[120px]"><span class="text-[#120c38] text-xl font-normal font-['Mulish']">Перевірте вкладку </span><a href="/faq" class="text-[#8a48e6] text-xl font-normal font-['Mulish'] underline">Питання відповідь</a><span class="text-[#120c38] text-xl font-normal font-['Mulish']">, можливо ми вже відповіли на ваше питання!</span>
        </div>
    </div>
</main>

<?php get_footer(); ?>