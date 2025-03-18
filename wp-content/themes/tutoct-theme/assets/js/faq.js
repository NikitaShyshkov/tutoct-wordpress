document.querySelectorAll('.header').forEach(header => {
    header.addEventListener('click', function() {
        const content = this.nextElementSibling; // Находим следующий элемент (content)
        const iconWrapper = this.querySelector('.icon-wrapper');

        // Переключаем класс 'active' только для текущего content и icon-wrapper
        content.classList.toggle('active');
        iconWrapper.classList.toggle('active');
    });
});