<?php
/*
Template Name: Price
*/
get_header();
?>

<main class="bg-[#F6EEFF] h-full w-full flex flex-col">
    <div id="block-1" class="py-[40px] px-[150px] flex">
        <div class="h-full w-full flex flex-col gap-5">
            <div class="max-w-[880px] text-black text-5xl font-bold font-['Nunito']">Розширюй свої можливості з нашими підписками!</div>
            <div class="max-w-[861px] text-[#827ead] text-xl font-normal font-['Mulish']">Lorem ipsum dolor sit amet consectetur. Elit amet magna mauris nunc. Ipsum in id nulla at suspendisse aliquet senectus turpis aliquet. Sollicitudin egestas dolor ut vitae diam pellentesque ut pulvinar mi. Nibh fermentum vitae nunc tortor non. Aliquet ultrices mauris a viverra sodales id rhoncus. <br /><br />Nunc mattis vel consectetur posuere in nunc sit morbi mauris. Ut suscipit pharetra adipiscing amet. Fermentum nibh augue risus viverra nisl mattis in volutpat odio. Suspendisse nullam eleifend interdum nisi lorem lacus amet.</div>
        </div>
        <img id="oct-main" src="<?php echo get_template_directory_uri(); ?>/assets/images/oct-price-main.png" alt="">
    </div>
    <div id="block-2" class="h-hull w-full -translate-y-[150px] pt-[100px] pb-[120px] px-[150px]">
        <div class="text-center justify-start text-white text-5xl font-bold font-['Nunito']">Обери ідеальний для себе план</div>
        <!-- Цены -->
        <div id="price-blocks" class="flex gap-5 mt-10 justify-center">
            <!-- Start -->
            <div class="min-w-[310px] min-h-[463px] relative overflow-hidden bg-white rounded-[20px]">
                <div class="flex flex-col h-full justify-between p-5">
                    <div class="flex flex-col gap-4">
                        <div class="text-black text-2xl font-bold font-['Nunito']">Щупальце старт</div>
                        <ul class="max-w-[140px] list-inside text-black text-xs font-normal font-['Mulish']">
                            <li>До 2 курсів</li>
                            <li>Інтеграції</li>
                            <li>Cloud-сховище 2 ГБ</li>
                        </ul>
                        <div class="flex justify-center items-center flex-grow">
                            <div class="max-w-[108.02px] max-h-[200.05px] overflow-hidden">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/price/start.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-4">
                        <div class="text-center text-black text-2xl font-bold font-['Nunito']">Безкоштовно</div>
                        <div data-property-1="Active" class="max-w-[270px] h-10 px-4 py-2 bg-[#8a48e6] rounded-[40px] flex justify-center items-center gap-2.5">
                            <div class="text-white text-[15px] font-bold font-['Nunito']">Детальніше</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Flex -->
            <div class="min-w-[310px] min-h-[463px] relative overflow-hidden bg-white rounded-[20px]">
                <div class="flex flex-col h-full justify-between p-5">
                    <div class="text-black text-2xl font-bold font-['Nunito']">Гнучкий окто</div>
                    <ul class="max-w-[140px] list-inside text-black text-xs font-normal font-['Mulish']">
                        <li>До 5 курсів</li>
                        <li>Інтеграції</li>
                        <li>Фідбек від студентів</li>
                        <li>Cloud-сховище 5 ГБ</li>
                    </ul>
                    <img class="absolute right-0 top-8 max-w-[298px] max-h-[331px] overflow-hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/price/flex.svg" alt="">
                    <div class="flex flex-col items-start gap-4">
                        <div class="text-center text-black text-2xl font-bold font-['Nunito']">14,99$</div>
                        <div data-property-1="Active" class="min-w-[270px] h-10 px-4 py-2 bg-[#8a48e6] rounded-[40px] flex justify-center items-center gap-2.5">
                            <div class="text-white text-[15px] font-bold font-['Nunito']">Детальніше</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Master -->
            <div class="min-w-[310px] min-h-[463px] relative overflow-hidden bg-white rounded-[20px]">
                <div class="flex flex-col h-full justify-between p-5">
                    <div class="text-black text-2xl font-bold font-['Nunito']">Майстер восьминіг</div>
                    <ul class="max-w-[140px] list-inside text-black text-xs font-normal font-['Mulish']">
                        <li>До 10 курсів</li>
                        <li>Інтеграції</li>
                        <li>Фідбек від студентів</li>
                        <li>Cloud-сховище 50 ГБ</li>
                    </ul>
                    <img class="absolute -right-2 top-8 max-w-[298px] max-h-[331px] overflow-hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/price/master.svg" alt="">
                    <div class="flex flex-col items-start gap-4">
                        <div class="text-center text-black text-2xl font-bold font-['Nunito']">39,99$</div>
                        <div data-property-1="Active" class="min-w-[270px] h-10 px-4 py-2 bg-[#8a48e6] rounded-[40px] flex justify-center items-center gap-2.5">
                            <div class="text-white text-[15px] font-bold font-['Nunito']">Детальніше</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Capitan -->
            <div class="min-w-[310px] min-h-[463px] relative overflow-hidden bg-white rounded-[20px]">
                <div class="flex flex-col h-full justify-between p-5">
                    <div class="text-black text-2xl font-bold font-['Nunito']">Капітан ОктоПРО</div>
                    <ul class="max-w-[140px] list-inside text-black text-xs font-normal font-['Mulish']">
                        <li>Необмежена кількість курсів</li>
                        <li>Інтеграції</li>
                        <li>Фідбек від студентів</li>
                        <li>Cloud-сховище 100 ГБ</li>
                    </ul>
                    <img class="absolute right-0 top-8 max-w-[298px] max-h-[331px] overflow-hidden" src="<?php echo get_template_directory_uri(); ?>/assets/images/price/capitan.svg" alt="">
                    <div class="flex flex-col items-start gap-4">
                        <div class="text-center text-black text-2xl font-bold font-['Nunito']">99,99$</div>
                        <div data-property-1="Active" class="min-w-[270px] h-10 px-4 py-2 bg-[#8a48e6] rounded-[40px] flex justify-center items-center gap-2.5">
                            <div class="text-white text-[15px] font-bold font-['Nunito']">Детальніше</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="block-3" class="-translate-y-[90px] px-[150px] flex flex-col items-center">
        <div class="text-center text-black text-5xl font-bold font-['Nunito']">Внутрішня валюта OctoCoins – ваша перевага в CRM!</div>
        <div class="max-w-[684px] text-center text-[#8a48e6] text-xl font-normal font-['Mulish'] py-5">У нашій CRM діє внутрішня валюта – OctoCoins, яку викладачі можуть використовувати для розширення своїх можливостей.</div>
        <div id="block-3-1" class="flex mt-5 gap-5">
            <div id="cards-grid" class="grid grid-cols-2 gap-5">
                <!-- Card 1 -->
                <div class="card max-w-[420px] min-h-[255px] relative bg-white rounded-[20px]">
                    <div class="flex flex-col h-full p-[30px]">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col gap-2 flex-grow">
                                <div class="w-14 h-14 relative overflow-hidden">
                                    <div data-svg-wrapper class="left-[9.33px] top-[9.33px] absolute">
                                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.49992 16.6668C6.24436 16.6668 4.31936 15.8696 2.72492 14.2752C1.13047 12.6807 0.333252 10.7557 0.333252 8.50016C0.333252 6.24461 1.13047 4.31961 2.72492 2.72516C4.31936 1.13072 6.24436 0.333496 8.49992 0.333496C10.7555 0.333496 12.6805 1.13072 14.2749 2.72516C15.8694 4.31961 16.6666 6.24461 16.6666 8.50016C16.6666 10.7557 15.8694 12.6807 14.2749 14.2752C12.6805 15.8696 10.7555 16.6668 8.49992 16.6668ZM8.49992 12.0002C9.47214 12.0002 10.2989 11.6603 10.9803 10.9805C11.6616 10.3007 12.0015 9.47394 11.9999 8.50016C11.9984 7.52638 11.6585 6.70039 10.9803 6.02216C10.302 5.34394 9.47525 5.00327 8.49992 5.00016C7.52459 4.99705 6.69859 5.33772 6.02192 6.02216C5.34525 6.70661 5.00459 7.53261 4.99992 8.50016C4.99525 9.46772 5.33592 10.2945 6.02192 10.9805C6.70792 11.6665 7.53392 12.0064 8.49992 12.0002ZM29.4999 37.6668C27.2444 37.6668 25.3194 36.8696 23.7249 35.2752C22.1305 33.6807 21.3333 31.7557 21.3333 29.5002C21.3333 27.2446 22.1305 25.3196 23.7249 23.7252C25.3194 22.1307 27.2444 21.3335 29.4999 21.3335C31.7555 21.3335 33.6805 22.1307 35.2749 23.7252C36.8694 25.3196 37.6666 27.2446 37.6666 29.5002C37.6666 31.7557 36.8694 33.6807 35.2749 35.2752C33.6805 36.8696 31.7555 37.6668 29.4999 37.6668ZM29.4999 33.0002C30.4721 33.0002 31.2989 32.6603 31.9802 31.9805C32.6616 31.3007 33.0015 30.4739 32.9999 29.5002C32.9984 28.5264 32.6585 27.7004 31.9802 27.0222C31.302 26.3439 30.4753 26.0033 29.4999 26.0002C28.5246 25.9971 27.6986 26.3377 27.0219 27.0222C26.3453 27.7066 26.0046 28.5326 25.9999 29.5002C25.9953 30.4677 26.3359 31.2945 27.0219 31.9805C27.7079 32.6665 28.5339 33.0064 29.4999 33.0002ZM1.96658 36.0335C1.53881 35.6057 1.32492 35.0613 1.32492 34.4002C1.32492 33.7391 1.53881 33.1946 1.96658 32.7668L32.7666 1.96683C33.1944 1.53905 33.7388 1.32516 34.3999 1.32516C35.061 1.32516 35.6055 1.53905 36.0332 1.96683C36.461 2.39461 36.6749 2.93905 36.6749 3.60016C36.6749 4.26127 36.461 4.80572 36.0332 5.2335L5.23325 36.0335C4.80547 36.4613 4.26103 36.6752 3.59992 36.6752C2.93881 36.6752 2.39436 36.4613 1.96658 36.0335Z" fill="#8A48E6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="min-w-[360px] text-[#120c38] text-2xl font-bold font-['Nunito']">Знижки</div>
                                <div class="min-w-[346px] text-[#827ead] text-[15px] font-normal font-['Mulish']">
                                    Отримуйте знижки на покупку тарифних планів.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card max-w-[420px] min-h-[255px] relative bg-white rounded-[20px]">
                    <div class="flex flex-col h-full p-[30px]">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col gap-2 flex-grow">
                                <div class="w-14 h-14 relative overflow-hidden">
                                    <div class="w-[2.13px] h-[1.71px] left-[28.18px] top-[53.86px] absolute"></div>
                                    <div data-svg-wrapper class="left-[2.76px] top-0 absolute">
                                        <svg width="52" height="51" viewBox="0 0 52 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6185 8.78296C20.1417 4.32525 26.301 4.19025 28.107 8.37795L28.2599 8.78551L30.3155 14.7971C30.7866 16.1757 31.5479 17.4373 32.548 18.4968C33.5481 19.5562 34.7638 20.3888 36.1131 20.9385L36.6658 21.1448L42.6774 23.1979C47.1351 24.7212 47.2701 30.8805 43.0849 32.6865L42.6774 32.8393L36.6658 34.895C35.2867 35.3657 34.0246 36.1269 32.9647 37.127C31.9048 38.1272 31.0718 39.343 30.5218 40.6925L30.3155 41.2427L28.2624 47.2568C26.7392 51.7145 20.5799 51.8495 18.7764 47.6644L18.6185 47.2568L16.5654 41.2453C16.0946 39.8662 15.3335 38.6041 14.3333 37.5442C13.3332 36.4843 12.1173 35.6512 10.7678 35.1013L10.2176 34.895L4.20606 32.8419C-0.254198 31.3186 -0.389202 25.1593 3.7985 23.3559L4.20606 23.1979L10.2176 21.1448C11.5963 20.6737 12.8579 19.9125 13.9173 18.9123C14.9767 17.9122 15.8094 16.6965 16.3591 15.3473L16.5654 14.7971L18.6185 8.78296ZM23.4404 10.4285L21.3874 16.44C20.67 18.5423 19.5031 20.4629 17.9677 22.0682C16.4324 23.6735 14.5656 24.9248 12.4974 25.735L11.8606 25.9668L5.84904 28.0199L11.8606 30.073C13.9628 30.7903 15.8835 31.9573 17.4888 33.4926C19.094 35.0279 20.3453 36.8947 21.1556 38.9629L21.3874 39.5998L23.4404 45.6113L25.4935 39.5998C26.2109 37.4975 27.3778 35.5769 28.9131 33.9716C30.4485 32.3663 32.3152 31.115 34.3835 30.3048L35.0203 30.0755L41.0318 28.0199L35.0203 25.9668C32.918 25.2495 30.9974 24.0825 29.3921 22.5472C27.7869 21.0119 26.5356 19.1451 25.7253 17.0769L25.4961 16.44L23.4404 10.4285ZM43.8186 4.60259e-07C44.2951 -6.01083e-07 44.7621 0.133676 45.1664 0.385838C45.5708 0.638 45.8963 0.998534 46.106 1.42647L46.2283 1.7245L47.1198 4.33799L49.7358 5.22953C50.2134 5.39178 50.6321 5.69215 50.9387 6.09258C51.2454 6.49301 51.4263 6.97547 51.4585 7.47882C51.4907 7.98217 51.3727 8.48374 51.1196 8.91998C50.8664 9.35621 50.4894 9.70747 50.0364 9.92923L49.7358 10.0515L47.1224 10.943L46.2308 13.5591C46.0683 14.0365 45.7677 14.455 45.3671 14.7614C44.9665 15.0678 44.484 15.2484 43.9807 15.2803C43.4773 15.3122 42.9759 15.194 42.5398 14.9407C42.1037 14.6873 41.7526 14.3102 41.5311 13.8571L41.4088 13.5591L40.5173 10.9456L37.9013 10.054C37.4237 9.8918 37.005 9.59143 36.6984 9.191C36.3917 8.79057 36.2108 8.30811 36.1786 7.80476C36.1464 7.30142 36.2644 6.79984 36.5175 6.36361C36.7707 5.92737 37.1477 5.57611 37.6007 5.35435L37.9013 5.23208L40.5147 4.34054L41.4063 1.7245C41.5781 1.22122 41.903 0.784324 42.3356 0.475062C42.7682 0.165799 43.2868 -0.000319125 43.8186 4.60259e-07Z" fill="#8A48E6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="min-w-[360px] text-[#120c38] text-2xl font-bold font-['Nunito']">Генерація тестів</div>
                                <div class="min-w-[346px] text-[#827ead] text-[15px] font-normal font-['Mulish']">
                                    Докуповуйте генерації тестів та перевірку домашніх завдань за допомогою ChatGPT.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="card max-w-[420px] min-h-[255px] relative bg-white rounded-[20px]">
                    <div class="flex flex-col h-full p-[30px]">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col gap-2 flex-grow">
                                <div class="w-14 h-14 relative overflow-hidden">
                                    <div data-fill="Off" data-plus="Off" data-property-1="Folder" class="w-14 h-14 left-0 top-0 absolute overflow-hidden">
                                        <div data-svg-wrapper class="left-[7px] top-[9.33px] absolute">
                                            <svg width="46" height="40" viewBox="0 0 46 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.66667 2.3335H16L23 9.3335H39.3333C40.571 9.3335 41.758 9.82516 42.6332 10.7003C43.5083 11.5755 44 12.7625 44 14.0002V32.6668C44 33.9045 43.5083 35.0915 42.6332 35.9667C41.758 36.8418 40.571 37.3335 39.3333 37.3335H6.66667C5.42899 37.3335 4.242 36.8418 3.36683 35.9667C2.49167 35.0915 2 33.9045 2 32.6668V7.00016C2 5.76249 2.49167 4.5755 3.36683 3.70033C4.242 2.82516 5.42899 2.3335 6.66667 2.3335Z" stroke="#8A48E6" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="min-w-[360px] text-[#120c38] text-2xl font-bold font-['Nunito']">Хмарне середовище</div>
                                <div class="min-w-[346px] text-[#827ead] text-[15px] font-normal font-['Mulish']">
                                    Розширюйте своє хмарне сховище, щоб зберігати більше навчальних матеріалів.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="card max-w-[420px] min-h-[255px] relative bg-white rounded-[20px]">
                    <div class="flex flex-col h-full p-[30px]">
                        <div class="flex items-center gap-4">
                            <div class="flex flex-col gap-2 flex-grow">
                                <div class="w-14 h-14 relative overflow-hidden">
                                    <div class="w-[2.13px] h-[1.71px] left-[28.18px] top-[53.86px] absolute"></div>
                                    <div data-svg-wrapper class="left-[2.76px] top-0 absolute">
                                        <svg width="52" height="51" viewBox="0 0 52 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.6185 8.78296C20.1417 4.32525 26.301 4.19025 28.107 8.37795L28.2599 8.78551L30.3155 14.7971C30.7866 16.1757 31.5479 17.4373 32.548 18.4968C33.5481 19.5562 34.7638 20.3888 36.1131 20.9385L36.6658 21.1448L42.6774 23.1979C47.1351 24.7212 47.2701 30.8805 43.0849 32.6865L42.6774 32.8393L36.6658 34.895C35.2867 35.3657 34.0246 36.1269 32.9647 37.127C31.9048 38.1272 31.0718 39.343 30.5218 40.6925L30.3155 41.2427L28.2624 47.2568C26.7392 51.7145 20.5799 51.8495 18.7764 47.6644L18.6185 47.2568L16.5654 41.2453C16.0946 39.8662 15.3335 38.6041 14.3333 37.5442C13.3332 36.4843 12.1173 35.6512 10.7678 35.1013L10.2176 34.895L4.20606 32.8419C-0.254198 31.3186 -0.389202 25.1593 3.7985 23.3559L4.20606 23.1979L10.2176 21.1448C11.5963 20.6737 12.8579 19.9125 13.9173 18.9123C14.9767 17.9122 15.8094 16.6965 16.3591 15.3473L16.5654 14.7971L18.6185 8.78296ZM23.4404 10.4285L21.3874 16.44C20.67 18.5423 19.5031 20.4629 17.9677 22.0682C16.4324 23.6735 14.5656 24.9248 12.4974 25.735L11.8606 25.9668L5.84904 28.0199L11.8606 30.073C13.9628 30.7903 15.8835 31.9573 17.4888 33.4926C19.094 35.0279 20.3453 36.8947 21.1556 38.9629L21.3874 39.5998L23.4404 45.6113L25.4935 39.5998C26.2109 37.4975 27.3778 35.5769 28.9131 33.9716C30.4485 32.3663 32.3152 31.115 34.3835 30.3048L35.0203 30.0755L41.0318 28.0199L35.0203 25.9668C32.918 25.2495 30.9974 24.0825 29.3921 22.5472C27.7869 21.0119 26.5356 19.1451 25.7253 17.0769L25.4961 16.44L23.4404 10.4285ZM43.8186 4.60259e-07C44.2951 -6.01083e-07 44.7621 0.133676 45.1664 0.385838C45.5708 0.638 45.8963 0.998534 46.106 1.42647L46.2283 1.7245L47.1198 4.33799L49.7358 5.22953C50.2134 5.39178 50.6321 5.69215 50.9387 6.09258C51.2454 6.49301 51.4263 6.97547 51.4585 7.47882C51.4907 7.98217 51.3727 8.48374 51.1196 8.91998C50.8664 9.35621 50.4894 9.70747 50.0364 9.92923L49.7358 10.0515L47.1224 10.943L46.2308 13.5591C46.0683 14.0365 45.7677 14.455 45.3671 14.7614C44.9665 15.0678 44.484 15.2484 43.9807 15.2803C43.4773 15.3122 42.9759 15.194 42.5398 14.9407C42.1037 14.6873 41.7526 14.3102 41.5311 13.8571L41.4088 13.5591L40.5173 10.9456L37.9013 10.054C37.4237 9.8918 37.005 9.59143 36.6984 9.191C36.3917 8.79057 36.2108 8.30811 36.1786 7.80476C36.1464 7.30142 36.2644 6.79984 36.5175 6.36361C36.7707 5.92737 37.1477 5.57611 37.6007 5.35435L37.9013 5.23208L40.5147 4.34054L41.4063 1.7245C41.5781 1.22122 41.903 0.784324 42.3356 0.475062C42.7682 0.165799 43.2868 -0.000319125 43.8186 4.60259e-07Z" fill="#8A48E6" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="min-w-[360px] text-[#120c38] text-2xl font-bold font-['Nunito']">Octo-магазин</div>
                                <div class="min-w-[346px] text-[#827ead] text-[15px] font-normal font-['Mulish']">
                                    Купуйте товари в Octo-магазині.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="block-3-1-1" class="flex flex-col max-w-[440px] items-center">
                <div class="w-full text-center text-[#8a48e6] text-2xl font-bold font-['Nunito']">Заробляйте OctoCoins за активність у системі та використовуйте їх так, як вам зручно</div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/oct-coins.svg" alt="">
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>