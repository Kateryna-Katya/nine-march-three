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
            <h1>Политика конфиденциальности</h1>

            <p>
                Настоящая Политика конфиденциальности распространяется на персональные данные, предоставляемые клиентами <strong><?= $domainTitle ?></strong> для реализации стратегий роста, получения доступа к передовой цифровой инфраструктуре, а также для любого иного взаимодействия в электронном формате. Мы обеспечиваем экспертную поддержку на всех этапах и гарантируем защиту вашей информации.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в действующие положения. Инновационная технология нашего сервиса постоянно развивается, поэтому изменения в Политике будут иметь приоритет над текущими положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц в ЕС. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение конфиденциальности сторонними компаниями. Предоставляя свои данные, вы выбираете пошаговый путь развития, предусмотренный настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                <strong><?= $domainTitle ?></strong> собирает данные исключительно с вашего согласия для предоставления решений, которые меняют правила игры: доступа к AI-инструментам для реальных задач, участия в стратегических сессиях и внедрения практик, применимых уже сегодня. Мы применяем методологии, доказавшие эффективность в области кибербезопасности, включая современные протоколы шифрования.
            </p>

            <p>
                Максимальный срок хранения данных составляет 75 лет. В остальных случаях платформа хранит данные до момента официального отзыва согласия пользователем или завершения деятельности проекта. Мы гарантируем, что ваш быстрый и лёгкий старт на платформе не будет омрачён рисками утечки информации.
            </p>

            <p>
                Уничтожение или обезличивание данных осуществляется для исключения возможности их дальнейшей обработки, как только цель (например, оценка перспективы проекта) была достигнута.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> собирает информацию в следующих категориях:
            </p>

            <h2>Техническая информация:</h2>
            <ul>
                <li>время доступа и IP-адрес пользователя;</li>
                <li>источники обращения на ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>интернет-страницы блога, посещаемые пользователем;</li>
                <li>взаимодействие с информационными блоками о программах пассивного дохода;</li>
                <li>номер телефона (в случае звонка по контакту +33 1 89 48 04 63).</li>
            </ul>

            <p>
                При заполнении форм обратной связи мы собираем данные, необходимые для того, чтобы построить карьеру, которая работает на вас:
            </p>
            <ul>
                <li>имя пользователя;</li>
                <li>e-mail (support@<?= $fullDomain ?>) и номер телефона для оперативной связи;</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>данные о запросах на бесплатную консультацию по всем вопросам;</li>
                <li>сведения о полученных рекомендациях и пройденных этапах апгрейда;</li>
                <li>финансовая информация, предусмотренная законодательством Франции и ЕС.</li>
            </ul>

            <h2>Цели обработки персональных данных:</h2>
            <ul>
                <li>предоставление доступа к платформе года в сфере консалтинга;</li>
                <li>улучшение качества работы AI-инструментов на базе ваших отзывов;</li>
                <li>информирование о новых возможностях и инновациях через e-mail;</li>
                <li>обеспечение экспертной поддержки на всех этапах.</li>
            </ul>

            <h2><strong><?= $domainTitle ?></strong> не предоставляет данные третьим лицам, за исключением:</h2>
            <ul>
                <li>получения прямого согласия пользователя;</li>
                <li>требования компетентных органов Франции в соответствии с законом;</li>
                <li>случаев слияния компании или расширения проекта в Европе.</li>
            </ul>

            <h2>Использование файлов cookie</h2>
            <p>
                Cookies позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Франция). Это делает использование <strong><?= $fullDomain ?></strong> максимально эффективным. Вы можете отключить их в любой момент, но это может усложнить адаптацию без сложностей к функционалу сайта.
            </p>

            <h2>Ваши права</h2>
            <p>
                Если вы хотите переосмыслить подход к хранению ваших данных или полностью прекратить их обработку в соответствии с нормами GDPR, пожалуйста, свяжитесь с нами: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
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