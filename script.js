document.addEventListener('DOMContentLoaded', () => {
    
    // === 1. ИНИЦИАЛИЗАЦИЯ AOS ===
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-out-cubic',
        offset: 50
    });

    // === 2. ХЕДЕР И НАВИГАЦИЯ ===
    const header = document.getElementById('header');
    const burger = document.getElementById('burger');
    const menuOverlay = document.getElementById('menuOverlay');
    const nav = document.getElementById('nav');

    // Эффект хедера при скролле
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    });

    // Мобильное меню
    if (burger && nav && menuOverlay) {
        const mobileNavList = nav.querySelector('ul').cloneNode(true);
        menuOverlay.appendChild(mobileNavList);

        burger.addEventListener('click', () => {
            burger.classList.toggle('active');
            menuOverlay.classList.toggle('active');
            document.body.style.overflow = menuOverlay.classList.contains('active') ? 'hidden' : '';
        });

        menuOverlay.addEventListener('click', (e) => {
            if (e.target.tagName === 'A') {
                burger.classList.remove('active');
                menuOverlay.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    }

    // Плавный скролл для всех ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // === 3. ANIME.JS: ГЛОБАЛЬНАЯ ДИНАМИКА ===

    // Логотип (пульсация ромба)
    anime({
        targets: '.logo__dot',
        rotate: '225deg',
        scale: [1, 1.2, 1],
        duration: 3000,
        loop: true,
        easing: 'easeInOutQuad'
    });

    // Геометрия в Hero
    anime({
        targets: '.hero__shapes .shape',
        translateX: () => anime.random(-40, 40),
        translateY: () => anime.random(-40, 40),
        rotate: () => anime.random(-15, 15),
        duration: 4000,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine'
    });

    // Левитация карточек в Hero
    anime({
        targets: '.hero__card',
        translateY: [-12, 12],
        duration: 2500,
        direction: 'alternate',
        loop: true,
        easing: 'easeInOutSine',
        delay: anime.stagger(400)
    });

    // === 4. СЧЁТЧИКИ В КЕЙСАХ (IntersectionObserver + Anime.js) ===
    const counters = document.querySelectorAll('.stat-num');
    
    const countOptions = {
        threshold: 0.7 // Сработает, когда 70% секции будет в кадре
    };

    const counterObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalValue = parseInt(target.getAttribute('data-val'));

                anime({
                    targets: target,
                    innerHTML: [0, finalValue],
                    easing: 'easeOutExpo',
                    round: 1,
                    duration: 3000,
                    begin: () => {
                        target.classList.add('counting');
                    }
                });
                observer.unobserve(target); // Запускаем только один раз
            }
        });
    }, countOptions);

    counters.forEach(counter => counterObserver.observe(counter));

    // === 5. ФОРМА КОНТАКТОВ: ВАЛИДАЦИЯ И КАПЧА ===
    const contactForm = document.getElementById('mainForm');
    const phoneInput = document.getElementById('phoneInput');
    const captchaLabel = document.getElementById('captchaQuestion');
    const captchaInput = document.getElementById('captchaInput');
    const formStatus = document.getElementById('formStatus');

    let correctSum;

    const updateCaptcha = () => {
        const n1 = Math.floor(Math.random() * 9) + 1;
        const n2 = Math.floor(Math.random() * 9) + 1;
        correctSum = n1 + n2;
        if (captchaLabel) captchaLabel.innerText = `${n1} + ${n2} = ?`;
    };

    if (contactForm) {
        updateCaptcha();

        // Только цифры в телефоне
        phoneInput.addEventListener('input', (e) => {
            e.target.value = e.target.value.replace(/\D/g, '');
        });

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            if (parseInt(captchaInput.value) !== correctSum) {
                formStatus.innerText = "Ошибка капчи. Попробуйте ещё раз.";
                formStatus.className = "form__status error";
                updateCaptcha();
                captchaInput.value = '';
                return;
            }

            const btn = contactForm.querySelector('.form__submit');
            btn.innerText = "Отправка...";
            btn.disabled = true;

            // Имитация AJAX
            setTimeout(() => {
                btn.innerText = "Начать сейчас";
                btn.disabled = false;
                formStatus.innerText = "Заявка успешно отправлена! Мы свяжемся с вами.";
                formStatus.className = "form__status success";
                
                contactForm.reset();
                updateCaptcha();

                anime({
                    targets: '.form__status',
                    scale: [0.9, 1],
                    opacity: [0, 1],
                    duration: 400,
                    easing: 'easeOutBack'
                });
            }, 1500);
        });
    }

    // === 6. COOKIE POPUP ===
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (cookiePopup && !localStorage.getItem('nine_march_cookies')) {
        setTimeout(() => {
            cookiePopup.classList.add('active');
        }, 3000);
    }

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem('nine_march_cookies', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // === 7. ПАРАЛЛАКС ФОНА (EXPERTISE) ===
    const expertiseBg = document.querySelector('.expertise__bg-image');
    if (expertiseBg && window.innerWidth > 992) {
        document.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) * 0.01;
            const moveY = (e.clientY - window.innerHeight / 2) * 0.01;
            
            expertiseBg.style.transform = `scale(1.1) translate(${moveX}px, ${moveY}px)`;
        });
    }
});