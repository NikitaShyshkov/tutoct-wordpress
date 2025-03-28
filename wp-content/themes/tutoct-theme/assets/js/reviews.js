// Инициализация карусели
document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let currentIndex = 0;

    // Получаем количество отзывов из атрибута data-total-slides
    const totalSlides = parseInt(carousel.getAttribute('data-total-slides')) || 1;
    console.log('totalSlides',totalSlides)

    function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    if (prevButton && nextButton) {
        prevButton.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalSlides - 1; // Зацикливание
            }
            updateCarousel();
        });

        nextButton.addEventListener('click', () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Зацикливание
            }
            updateCarousel();
        });
    }

    // Управление звёздами рейтинга в форме
    const stars = document.querySelectorAll('.star');
    const ratingInput = document.getElementById('rating');

    if (stars.length > 0 && ratingInput) {
        // Инициализация звёзд (по умолчанию 4 звезды заполнены)
        stars.forEach(star => {
            const value = parseInt(star.getAttribute('data-value'));
            if (value <= parseInt(ratingInput.value)) {
                star.innerHTML = `
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.28771 8.81846L1.31271 9.97471L1.17146 10.0035C0.957634 10.0602 0.762704 10.1727 0.606576 10.3295C0.450447 10.4862 0.338715 10.6816 0.282788 10.8956C0.226861 11.1097 0.228744 11.3347 0.288245 11.5478C0.347745 11.7609 0.462731 11.9544 0.62146 12.1085L6.39896 17.7322L5.03646 25.676L5.02021 25.8135C5.00712 26.0346 5.05304 26.2553 5.15327 26.4528C5.2535 26.6504 5.40444 26.8178 5.59063 26.9378C5.77682 27.0579 5.99157 27.1263 6.2129 27.1361C6.43422 27.1459 6.65417 27.0966 6.85021 26.9935L13.9827 23.2435L21.099 26.9935L21.224 27.051C21.4303 27.1322 21.6545 27.1571 21.8737 27.1232C22.0928 27.0892 22.2989 26.9975 22.471 26.8575C22.643 26.7176 22.7747 26.5344 22.8525 26.3268C22.9304 26.1191 22.9516 25.8945 22.914 25.676L21.5502 17.7322L27.3302 12.1072L27.4277 12.001C27.567 11.8294 27.6583 11.624 27.6924 11.4057C27.7264 11.1874 27.702 10.9639 27.6216 10.7581C27.5412 10.5523 27.4076 10.3715 27.2346 10.2341C27.0615 10.0967 26.8551 10.0076 26.6365 9.97596L18.6615 8.81846L15.0965 1.59346C14.9933 1.38413 14.8336 1.20785 14.6354 1.08459C14.4373 0.961325 14.2086 0.895996 13.9752 0.895996C13.7418 0.895996 13.5131 0.961325 13.315 1.08459C13.1168 1.20785 12.9571 1.38413 12.854 1.59346L9.28771 8.81846Z" fill="#FFA869" />
                    </svg>`;
            } else {
                star.innerHTML = `
                    <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.9844 20.831L6.26941 24.8872L7.74316 16.296L1.49316 10.2122L10.1182 8.96225L13.9757 1.146L17.8332 8.96225L26.4582 10.2122L20.2082 16.296L21.6819 24.8872L13.9844 20.831Z" stroke="#FFA869" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>`;
            }
        });

        // Обработчик клика по звёздам
        stars.forEach(star => {
            star.addEventListener('click', () => {
                const value = parseInt(star.getAttribute('data-value'));
                ratingInput.value = value;

                stars.forEach(s => {
                    const sValue = parseInt(s.getAttribute('data-value'));
                    if (sValue <= value) {
                        s.innerHTML = `
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.28771 8.81846L1.31271 9.97471L1.17146 10.0035C0.957634 10.0602 0.762704 10.1727 0.606576 10.3295C0.450447 10.4862 0.338715 10.6816 0.282788 10.8956C0.226861 11.1097 0.228744 11.3347 0.288245 11.5478C0.347745 11.7609 0.462731 11.9544 0.62146 12.1085L6.39896 17.7322L5.03646 25.676L5.02021 25.8135C5.00712 26.0346 5.05304 26.2553 5.15327 26.4528C5.2535 26.6504 5.40444 26.8178 5.59063 26.9378C5.77682 27.0579 5.99157 27.1263 6.2129 27.1361C6.43422 27.1459 6.65417 27.0966 6.85021 26.9935L13.9827 23.2435L21.099 26.9935L21.224 27.051C21.4303 27.1322 21.6545 27.1571 21.8737 27.1232C22.0928 27.0892 22.2989 26.9975 22.471 26.8575C22.643 26.7176 22.7747 26.5344 22.8525 26.3268C22.9304 26.1191 22.9516 25.8945 22.914 25.676L21.5502 17.7322L27.3302 12.1072L27.4277 12.001C27.567 11.8294 27.6583 11.624 27.6924 11.4057C27.7264 11.1874 27.702 10.9639 27.6216 10.7581C27.5412 10.5523 27.4076 10.3715 27.2346 10.2341C27.0615 10.0967 26.8551 10.0076 26.6365 9.97596L18.6615 8.81846L15.0965 1.59346C14.9933 1.38413 14.8336 1.20785 14.6354 1.08459C14.4373 0.961325 14.2086 0.895996 13.9752 0.895996C13.7418 0.895996 13.5131 0.961325 13.315 1.08459C13.1168 1.20785 12.9571 1.38413 12.854 1.59346L9.28771 8.81846Z" fill="#FFA869" />
                            </svg>`;
                    } else {
                        s.innerHTML = `
                            <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.9844 20.831L6.26941 24.8872L7.74316 16.296L1.49316 10.2122L10.1182 8.96225L13.9757 1.146L17.8332 8.96225L26.4582 10.2122L20.2082 16.296L21.6819 24.8872L13.9844 20.831Z" stroke="#FFA869" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>`;
                    }
                });
            });
        });
    }
});
