document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('user-question-form');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            // Получаем данные из формы
            const firstName = form.querySelector('input[name="first_name"]').value.trim();
            const lastName = form.querySelector('input[name="last_name"]').value.trim();
            const email = form.querySelector('input[name="email"]').value.trim();
            const message = form.querySelector('textarea[name="message"]').value.trim();

            // Проверка на заполненность полей (хотя у нас есть required, но для надёжности)
            if (!firstName || !lastName || !email || !message) {
                alert('Будь ласка, заповніть усі поля.');
                return;
            }

            // Проверка email
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Будь ласка, введіть коректний email.');
                return;
            }

            // Отправка данных через AJAX
            const data = {
                action: 'submit_user_question',
                first_name: firstName,
                last_name: lastName,
                email: email,
                message: message,
                nonce: ajax_object.nonce // Для проверки безопасности
            };

            fetch(ajax_object.ajax_url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams(data).toString()
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Запитання успішно надіслано!');
                    // Очищаем форму
                    form.reset();
                } else {
                    alert('Помилка: ' + data.data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Сталася помилка при відправці.');
            });
        });
    }
});