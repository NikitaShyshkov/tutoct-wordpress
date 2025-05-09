<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сторінка не знайдена</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/404.css">
</head>

<body class="grid grid-cols-3">
    <div id="background-image"></div>
    <img id="img-1" class="self-end max-h-[521.24px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/404/img1.svg" alt="">
    <div id="block-2" class="">
        <img id="img-2" class="self-top max-h-[617.27px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/404/img2.svg" alt="">
        <div class="mt-[15px] text-center text-[#8a48e6] text-5xl font-bold font-['Mulish']">Сторінка не знайдена</div>
        <div class="mt-[10px] text-center text-[#120c38] text-2xl font-medium font-['Mulish']">
            Запитану
            URL-адресу не знайдено на цьому сервері</div>
        <a href="/">
            <div class="mt-[30px] max-w-[420px] mx-auto px-10 py-3 bg-[#8a4ae6] hover:bg-[#632DAE] rounded-2xl">
                <div class="text-center text-white text-2xl font-medium font-['Nunito']">
                    Повернутися на головну</div>
            </div>
        </a>
    </div>
    <div id="block-3" class="flex justify-end">
        <img id="img-1-1" class="hidden max-h-[255px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/404/img1.svg" alt="">
        <img id="img-3" class="self-center mr-0 max-h-[624.72px]" src="<?php echo get_template_directory_uri(); ?>/assets/images/404/img3.svg" alt="">
    </div>
</body>

</html>