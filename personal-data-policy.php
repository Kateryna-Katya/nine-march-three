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
            <h1>Политика обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее — «Политика») определяет порядок и условия обработки информации, предпринимаемые инновационной платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и устанавливает передовые меры по обеспечению безопасности этих данных.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности Оператор считает соблюдение прав и свобод человека при обработке его данных, обеспечивая экспертную поддержку на всех этапах взаимодействия с цифровой инфраструктурой.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях (далее — «Пользователи») веб-сайта <strong><?= $fullDomain ?></strong> в рамках предоставления услуг по карьерному апгрейду.
            </p>

            <h2>2. Основные понятия</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических материалов и AI-инструментов, обеспечивающих доступ к контенту по сетевому адресу <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель, желающий переосмыслить подход к развитию своей карьеры.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация, относящаяся прямо или косвенно к определенному Пользователю платформы <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    <strong>Безопасность данных</strong> — защищенность информации от неправомерного доступа, гарантированная передовой цифровой инфраструктурой Оператора.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор использует решения, которые меняют правила игры, для обработки следующих категорий данных:</p>
            <ul>
                <li>
                    <strong>Информация от Пользователя:</strong>
                    <ul>
                        <li>Фамилия, имя;</li>
                        <li>Контактный Email (для доступа к платформе);</li>
                        <li>Номер телефона (валидация по стандартам Франции: +33).</li>
                    </ul>
                </li>
                <li>
                    <strong>Автоматический сбор:</strong>
                    <ul>
                        <li>
                            Обезличенные данные о посетителях (файлы «cookie»), собираемые для того, чтобы оценить перспективы проекта и улучшить пошаговый путь пользователя.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2>4. Цели обработки</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к программам пассивного дохода и стратегиям роста.
                </li>
                <li>
                    Установление обратной связи, включая направление уведомлений о новых технологиях нового поколения в сфере консалтинга.
                </li>
                <li>
                    Заключение и исполнение договоров на экспертные услуги, активные в странах ЕС.
                </li>
                <li>
                    Информирование о деталях на сайте посредством рассылок. Пользователь может в любой момент направить письмо на 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a> с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2>5. Правовые основания</h2>
            <p>
                Оператор обрабатывает данные только при наличии добровольного согласия, выраженного через заполнение форм на сайте <strong><?= $domainTitle ?></strong>, что обеспечивает быстрый и лёгкий старт работы с платформой.
            </p>

            <h2>6. Безопасность и хранение данных</h2>
            <ul>
                <li>
                    Оператор применяет методологии, доказавшие эффективность, и технические меры в соответствии с нормами GDPR для защиты данных во Франции и Европе.
                </li>
                <li>
                    Персональные данные Пользователя никогда не передаются третьим лицам без законных оснований.
                </li>
                <li>
                    Пользователь может в любой момент отозвать свое согласие, направив запрос на email 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> всегда доступна для ознакомления на сайте <strong><?= $fullDomain ?></strong>.
                </li>
                <li>
                    Все вопросы, касающиеся защиты прав Пользователей, решаются экспертной поддержкой Оператора в приоритетном порядке.
                </li>
            </ul>
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