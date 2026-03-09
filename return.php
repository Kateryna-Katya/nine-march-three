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
            <h1>Политика возврата средств</h1>
            
            <p>
                Мы стремимся к тому, чтобы каждая стратегия роста, разработанная на платформе <strong><?= $domainTitle ?></strong>, приносила реальный результат. Однако, если по каким-то причинам вы решили переосмыслить подход к обучению, ниже приведены условия возврата средств.
            </p>

            <h2>Условия для оформления возврата</h2>
            <p>
                Вы можете претендовать на возврат средств в рамках экспертной поддержки в следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание предоставленной консультации или экспертного материала существенно отличается от программы, заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности:</strong> При возникновении критических проблем в работе нашей цифровой инфраструктуры на <strong><?= $fullDomain ?></strong>, которые делают доступ к AI-инструментам или сессиям невозможным.
                </li>
                <li>
                    <strong>«Период охлаждения»:</strong> Если вы решили отказаться от участия в программе в течение 14 календарных дней с момента оплаты, при условии, что вы еще не получили доступ к значительному объему методологий (см. «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Отправьте письмо на наш email для экспертной поддержки:
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма укажите: «Запрос на возврат средств — <?= $domainTitle ?>».
                </li>
                <li>
                    Укажите ваши данные: имя, фамилию, email регистрации и точное название выбранной стратегии роста.
                </li>
                <li>
                    Опишите причину запроса, чтобы мы могли улучшить наши технологии нового поколения.
                </li>
                <li>
                    Наша команда рассмотрит запрос и свяжется с вами в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения запроса возврат будет произведен в течение 7–14 рабочих дней тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления зависит от регламента вашего банка во <strong>Франции</strong> или другой стране ЕС.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат не осуществляется, если:</p>
            <ul>
                <li>
                    Запрос подан по истечении 14 дней с момента оплаты.
                </li>
                <li>
                    Вы уже изучили или скачали более 50% материалов программы, применимых уже сегодня.
                </li>
                <li>
                    Причиной являются технические проблемы на стороне пользователя (проблемы с интернет-соединением в регионе или ПО).
                </li>
                <li>
                    Были нарушены правила платформы <strong><?= $domainTitle ?></strong>.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право обновлять настоящую Политику, чтобы соответствовать изменениям в законодательстве Франции. Актуальная версия всегда доступна на <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с условиями консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480463">+33 1 89 48 04 63</a>
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