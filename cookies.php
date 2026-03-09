<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Карьерный апгрейд и стратегии роста
    </title>

    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><circle cx=%2250%22 cy=%2250%22 r=%2240%22 fill=%22none%22 stroke=%22%23e63946%22 stroke-width=%228%22/><path d=%22M30 70 L50 30 L70 70%22 fill=%22none%22 stroke=%22%23800000%22 stroke-width=%228%22 stroke-linecap=%22round%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;600;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#strategies" class="nav__link">Стратегии</a></li>
                    <li><a href="./#expertise" class="nav__link">Экспертиза</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--outline btn--sm">Связаться</a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1>Политика использования файлов cookie</h1>

            <p>
                Добро пожаловать на платформу <strong><?= $domainTitle ?></strong>! Чтобы обеспечить максимально эффективный карьерный апгрейд, персонализировать ваш опыт взаимодействия с нашим блогом и анализировать активность пользователей, мы используем файлы cookie. Настоящая политика объясняет, как технологии нового поколения помогают нам делать сервис удобнее, и как вы можете ими управлять.
            </p>

            <h2>Что такое файлы cookie?</h2>
            <p>
                Файл cookie — это небольшой фрагмент данных, который веб-сайт сохраняет на вашем устройстве (компьютере или смартфоне), когда вы его посещаете. Это позволяет платформе 
                <strong><?= $domainTitle ?></strong> "помнить" ваши предпочтения в рамках профессионального развития (например, выбранный язык, настройки региона Франция и другие параметры) в течение определенного времени, чтобы вам не приходилось вводить их повторно при каждом визите.
            </p>

            <h2>Какие типы файлов cookie мы используем?</h2>
            <p>
                Мы классифицируем файлы cookie на сайте <strong><?= $fullDomain ?></strong> по следующим категориям:
            </p>
            <ul>
                <li>
                    <strong>Строго необходимые файлы cookie:</strong> Инновационная технология, которая обеспечивает базовую безопасность и доступ к функциям сайта. Без них корректная работа платформы невозможна.
                </li>
                <li>
                    <strong>Аналитические файлы cookie:</strong> Эти инструменты помогают нам оценивать перспективы проекта, анализируя, какие статьи блога наиболее полезны пользователям в ЕС.
                </li>
                <li>
                    <strong>Функциональные файлы cookie:</strong> Позволяют внедрять решения, которые меняют правила игры, запоминая ваши настройки для предоставления персонализированных карьерных стратегий.
                </li>
                <li>
                    <strong>Маркетинговые файлы cookie:</strong> Используются для того, чтобы наши предложения по карьерному росту соответствовали вашим реальным интересам и целям.
                </li>
            </ul>

            <h2>Зачем мы используем файлы cookie?</h2>
            <p>Основные цели использования технологий на сайте <strong><?= $domainTitle ?></strong>:</p>
            <ul>
                <li>Обеспечение стабильной работы передовой цифровой инфраструктуры.</li>
                <li>Анализ поведения для оптимизации методологий обучения и консалтинга.</li>
                <li>Персонализация контента для пользователей во Франции и Европе.</li>
                <li>Предоставление доступа к эксклюзивным AI-инструментам для реальных задач.</li>
            </ul>

            <h2>Ваш выбор и управление файлами cookie</h2>
            <p>
                Вы имеете полный контроль над своими данными. Вы можете в любой момент изменить настройки в браузере или отклонить использование cookie через наш всплывающий баннер. Обратите внимание: отключение некоторых типов файлов может ограничить ваш доступ к определенным пошаговым путям обучения на нашем сайте.
            </p>

            <h2>Файлы cookie третьих сторон</h2>
            <p>
                На некоторых страницах <strong><?= $domainTitle ?></strong> мы используем проверенных партнеров (например, Google Analytics) для анализа эффективности наших программ пассивного дохода и карьерных стратегий. Мы рекомендуем ознакомиться с их политиками конфиденциальности напрямую.
            </p>

            <h2>Обновления настоящей политики</h2>
            <p>
                Мы можем обновлять эту Политику, чтобы соответствовать изменениям в законодательстве Франции и ЕС. Актуальная версия всегда доступна на этой странице. Продолжение использования сайта означает ваше согласие с текущими правилами.
            </p>

            <h2>Контактная информация</h2>
            <p>
                Если у вас возникли вопросы касательно нашей политики на <strong><?= $domainTitle ?></strong>, пожалуйста, свяжитесь с экспертной поддержкой:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480463">+33 1 89 48 04 63</a><br>
                Адрес: 24 Rue du Quatre Septembre, 75002 Paris, France
            </p>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Технологии нового поколения для вашего профессионального превосходства. Платформа года в сфере
                    карьерного консалтинга.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#strategies">Стратегии роста</a></li>
                    <li><a href="./#expertise">Методология</a></li>
                    <li><a href="./#blog">Статьи и медиа</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact">
                    <li>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+33189480463">+33 1 89 48 04 63</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>24 Rue du Quatre Septembre, 75002 Paris, France</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy;
              2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div class="cookie-popup" id="cookiePopup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
    </div>
</div>

<div class="menu-overlay" id="menuOverlay"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="script.js"></script>
</body>

</html>