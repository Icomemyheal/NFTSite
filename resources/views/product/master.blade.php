<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/scss/product/index.scss', 'resources/js/product/sliders.js', 'resources/js/product/modals.js', 'resources/js/product/utils.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./img/product/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MaxStar</title>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__upper--container">
                <nav class="header__upper--nav">
                    <ul class="header__upper--list">
                        <li class="header__upper--item">
                            <a href="#" class="header__upper--link" data-query="query-link" data-param-value="about_us">Про нас</a>
                        </li>
                        <li class="header__upper--item">
                            <a href="#" class="header__upper--link" data-query="query-link" data-param-value="faq_order">Як замовити</a>
                        </li>
                        <li class="header__upper--item">
                            <a href="#" class="header__upper--link" data-query="query-link" data-param-value="delivery">Доставка і оплата</a>
                        </li>
                        <li class="header__upper--item">
                            <a href="#" class="header__upper--link" data-query="query-link" data-param-value="garants">Гарантія</a>
                        </li>
                        <li class="header__upper--item">
                            <a href="#" class="header__upper--link" data-query="query-link" data-param-value="contacts">Контакти</a>
                        </li>
                    </ul>
                </nav>

                <div class="header__upper--utils">
                    <ul class="upper__utils--list">
                        <li class="upper__utils--item lang__util">
                            <span class="lang__util--uA">Ua</span>
                            <span class="lang__util--rU">Ru</span>
                        </li>
                        <li class="upper__utils--item fav__util">
                            <div class="fav__util--count"><span class="fav__util--number js__count-fav">0</span></div>
                            <svg class="fav__util--svg">
                                <use xlink:href="./img/product/sprites.svg#heart"></use>
                            </svg>
                            <span class="fav__util--title">Вибране</span>
                        </li>
                        <li class="upper__utils--item cart__util">
                            <div class="fav__util--count"><span class="fav__util--number js__count-cart">0</span></div>
                            <svg class="fav__util--svg">
                                <use xlink:href="./img/product/sprites.svg#cart"></use>
                            </svg>
                            <span class="fav__util--title">Корзина</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__inner container">

                <div class="header__logo">
                    <a href="#" class="header__logo--link">
                        <svg class="logo__svg">
                            <use xlink:href="./img/product/sprites.svg#logo"></use>
                        </svg>
                    </a>
                </div>

                <div class="header__contacts">
                    <div class="header__contacts--target">
                        <a href="tel:+38 086 787 00 12" class="header__contacts--link">+38 086 <span>787 00 12</span></a>
                        <svg class="viber__contacts--svg">
                            <use xlink:href="./img/product/sprites.svg#viberTransparent"></use>
                        </svg>
                        <button class="header__contacts--btn js-phonebox-btn">
                            <svg class="contacts__btn--svg js-phonebox-svg">
                                <use xlink:href="./img/product/sprites.svg#arrowDown"></use>
                            </svg>
                        </button>
                    </div>
                    <div class="header__contacts--phonebox js-phonebox-modal">
                        <ul class="header__contacts--list">
                            <li class="header__contacts--item">
                                <a href="tel:+38 086 787 00 12" class="header__contacts--link">+38 086 787 00 12</a>
                                <svg class="viber__contacts--svg">
                                    <use xlink:href="./img/product/sprites.svg#viberTransparent"></use>
                                </svg>
                                <svg class="telegram__contacts--svg">
                                    <use xlink:href="./img/product/sprites.svg#telegramTransparent"></use>
                                </svg>
                            </li>
                            <li class="header__contacts--item">
                                <a href="tel:+38 086 457 78 45" class="header__contacts--link">+38 086 457 78 45</a>
                                <svg class="viber__contacts--svg">
                                    <use xlink:href="./img/product/sprites.svg#viberTransparent"></use>
                                </svg>
                                <svg class="whatsapp__contacts--svg">
                                    <use xlink:href="./img/product/sprites.svg#whatsappTransparent"></use>
                                </svg>
                            </li>
                            <li class="header__contacts--item">
                                <a href="tel:+38 086 328 64 41" class="header__contacts--link">+38 086 328 64 41</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="header__search">
                    <div class="header__search--container">
                        <input type="text" placeholder="Пошук товарів" class="header__search--input">

                        <button type="button" class="header__search--btn">
                            <svg class="search__input--svg">
                                <use xlink:href="./img/product/sprites.svg#search"></use>
                            </svg>
                        </button>
                    </div>
                </div>
    
                <div class="header__item header__item--search">
                    <button class="header__btn--search">
                        <svg class="search__btn--svg">
                            <use xlink:href="./img/product/sprites.svg#search"></use>
                        </svg>
                    </button>
    
                    <div class="dropdown__modal dropdown__modal--search">
                        <div class="dropdown__modal--inner-search">
                            <div class="dropdown__modal--explore">
                                <div class="search__container--modal">
                                    <input type="text" placeholder="Пошук товарів" class="search__input--modal">

                                    <button type="button" class="search__btn--modal">
                                        <svg class="search__input--svg">
                                            <use xlink:href="./img/product/sprites.svg#search"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="dropdown__modal--contacts">
                                <div class="contacts__container--modal">
                                    <h3 class="contacts__title--modal">Не нашли что искали? <br>Тогда позвоните нам по телефону</h3>

                                    <ul class="contacts__list--modal">
                                        <li class="contacts__item--modal">
                                            <a href="tel:+38 086 787 00 12" class="contacts__tel--modal">+38 086 787 00 12</a>

                                            <svg class="phone__tg--icon">
                                                <use xlink:href="./img/product/sprites.svg#telegramTransparent"></use>
                                            </svg>
                                        </li>
                                        <li class="contacts__item--modal">
                                            <a href="tel:+38 086 457 78 45" class="contacts__tel--modal">+38 086 457 78 45</a>

                                            <svg class="phone__whatsapp--icon">
                                                <use xlink:href="./img/product/sprites.svg#whatsappTransparent"></use>
                                            </svg>
                                        </li>
                                        <li class="contacts__item--modal">
                                            <a href="tel:+38 086 457 78 45" class="contacts__tel--modal">+38 086 457 78 45</a>

                                            <svg class="phone__viber--icon">
                                                <use xlink:href="./img/product/sprites.svg#viberTransparent"></use>
                                            </svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown__modal--socials">
                                <div class="socials__container--modal">
                                    <ul class="socials__list--modal">
                                        <li class="socials__item--modal">
                                            <a href="#" class="socials__link--modal" data-query="query-link" data-param-value="facebook">
                                                <svg class="socials__facebook--icon">
                                                    <use xlink:href="./img/product/sprites.svg#Facebook"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="socials__item--modal">
                                            <a href="#" class="socials__link--modal" data-query="query-link" data-param-value="youtube">
                                                <svg class="socials__youtube--icon">
                                                    <use xlink:href="./img/product/sprites.svg#YouTube"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="socials__item--modal">
                                            <a href="#" class="socials__link--modal" data-query="query-link" data-param-value="telegram">
                                                <svg class="socials__tg--icon">
                                                    <use xlink:href="./img/product/sprites.svg#Telegram"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="socials__item--modal">
                                            <a href="#" class="socials__link--modal" data-query="query-link" data-param-value="instagram">
                                                <svg class="socials__instagram--icon">
                                                    <use xlink:href="./img/product/sprites.svg#Instagram"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="header__item header__item--cart">
                    <button class="header__btn--cart">
                        <svg class="cart__btn--svg">
                            <use xlink:href="./img/product/sprites.svg#cart"></use>
                        </svg>
                    </button>
                </div>
    
                <div class="header__item header__item--burger">
                    <button type="button" class="header__btn--menu">
                        <span class="header__menu--burger"></span>
                    </button>
    
                    <div class="dropdown__modal dropdown__modal--burger">
                        <div class="dropdown__modal--inner">
                            <div class="dropdown__modal--selected">
                                <div class="dropdown_heart__icon--container">
                                    <div class="dropdown_heart__icon--count">
                                        <span class="js-count-fav-mb">0</span>
                                    </div>
                                    <svg class="heart__icon">
                                        <use xlink:href="./img/product/sprites.svg#heart"></use>
                                    </svg>
                                </div>
    
                                <span class="dropdown__modal--selected-text">Вибране</span>
                            </div>
    
                            <div class="dropdown__modal__navigation--wrapper">
                                <nav class="dropdown__modal--navigation">
                                    <ul class="dropdown__modal--list">
                                        <li class="dropdown__modal--list_item">
                                            <a href="#" class="dropdown_modal--nav_link" data-query="query-link" data-param-value="about_us">Про нас</a>
                                        </li>
                                        <li class="dropdown__modal--list_item">
                                            <a href="#" class="dropdown_modal--nav_link" data-query="query-link" data-param-value="faq_order">Як замовити</a>
                                        </li>
                                        <li class="dropdown__modal--list_item">
                                            <a href="#" class="dropdown_modal--nav_link" data-query="query-link" data-param-value="delivery">Доставка і оплата</a>
                                        </li>
                                        <li class="dropdown__modal--list_item">
                                            <a href="#" class="dropdown_modal--nav_link" data-query="query-link" data-param-value="garants">Гарантія</a>
                                        </li>
                                        <li class="dropdown__modal--list_item">
                                            <a href="#" class="dropdown_modal--nav_link" data-query="query-link" data-param-value="contacts">Контакти</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
    
                            <div class="dropdown__modal--phones phones">
                                <div class="phones__container--modal">
                                    <div class="phones__title--modal">
                                        <h3>Телефони для зв'язку:</h3>
                                    </div>
    
                                    <div class="phones__list--container">
                                        <ul class="phones__list">
                                            <li class="phones__list--item">
                                                <a href="tel:+38 086 787 00 12" class="phones__links">+38 086 787 00 12</a>
    
                                                <svg class="phone__tg--icon">
                                                    <use xlink:href="./img/product/sprites.svg#telegramTransparent"></use>
                                                </svg>
                                            </li>
                                            <li class="phones__list--item">
                                                <a href="tel:+38 086 457 78 45" class="phones__links">+38 086 457 78 45</a>
    
                                                <svg class="phone__whatsapp--icon">
                                                    <use xlink:href="./img/product/sprites.svg#whatsappTransparent"></use>
                                                </svg>
                                            </li>
                                            <li class="phones__list--item">
                                                <a href="tel:+38 086 457 78 45" class="phones__links">+38 086 457 78 45</a>
    
                                                <svg class="phone__viber--icon">
                                                    <use xlink:href="./img/product/sprites.svg#viberTransparent"></use>
                                                </svg>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="dropdown__modal--lang">
                                <div class="lang__modal--container">
                                    <a href="#" class="lang__link--uA">Ua</a>
                                    <a href="#" class="lang__link--rU">Ru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        <main class="main">
            @yield('content')
        </main>
    
        <footer class="footer">
            <div class="footer__container container">
                <div class="footer__inner">
                    <div class="footer__logo">
                        <svg class="footer__logo--svg">
                            <use xlink:href="./img/product/sprites.svg#white-logo"></use>
                        </svg>
                    </div>
                    <div class="footer__navigation">
                        <div class="footer__contacts">
                            <div class="footer__contacts--title">
                                <h3>Наші контакти</h3>
                            </div>
    
                            <ul class="footer__phones--list">
                                <li class="footer__phones--item">
                                    <a href="tel:+38 086 787 00 12" class="footer__phones--links">+38 086 787 00 12</a>
    
                                    <svg class="phone__tg--icon">
                                        <use xlink:href="./img/product/sprites.svg#telegramTransparent"></use>
                                    </svg>
                                </li>
                                <li class="footer__phones--item">
                                    <a href="tel:+38 086 457 78 45" class="footer__phones--links">+38 086 457 78 45</a>
    
                                    <svg class="phone__whatsapp--icon">
                                        <use xlink:href="./img/product/sprites.svg#whatsappTransparent"></use>
                                    </svg>
                                </li>
                                <li class="footer__phones--item">
                                    <a href="tel:+38 086 457 78 45" class="footer__phones--links">+38 086 457 78 45</a>
    
                                    <svg class="phone__viber--icon">
                                        <use xlink:href="./img/product/sprites.svg#viberTransparent"></use>
                                    </svg>
                                </li>
                            </ul>
                        </div>
    
                        <div class="footer__schedule">
                            <div class="footer__schedule--title">
                                <h3>Графік роботи</h3>
                            </div>
    
                            <ul class="footer__schedule--list">
                                <li class="footer__schedule--item">Пн-Пт: <span>9:00 - 18:30</span></li>
                                <li class="footer__schedule--item">Cб: <span>9:00 - 16:00</span></li>
                                <li class="footer__schedule--item">Нд — <span>вихідний</span></b></li>
                            </ul>
                        </div>
    
                        <div class="footer__address">
                            <div class="footer__address--title">
                                <h3>Адреса</h3>
                            </div>
    
                            <ul class="footer__address--list">
                                <li class="footer__address--item">Головний офіс:<span>м.Луцьк, вул. Лесі Українки, 40</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer__socials">
                        <ul class="footer__socials--list">
                            <li class="footer__socials--item">
                                <a href="#" class="footer__socials--link" data-query="query-link" data-param-value="facebook">
                                    <svg class="footer__facebook--icon">
                                        <use xlink:href="./img/product/sprites.svg#Facebook"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="footer__socials--item">
                                <a href="#" class="footer__socials--link" data-query="query-link" data-param-value="youtube">
                                <svg class="footer__youtube--icon">
                                    <use xlink:href="./img/product/sprites.svg#YouTube"></use>
                                </svg>
                                </a>
                            </li>
                            <li class="footer__socials--item">
                                <a href="#" class="footer__socials--link" data-query="query-link" data-param-value="telegram">
                                <svg class="footer__telegram--icon">
                                    <use xlink:href="./img/product/sprites.svg#Telegram"></use>
                                </svg>
                                </a>
                            </li>
                            <li class="footer__socials--item">
                                <a href="#" class="footer__socials--link" data-query="query-link" data-param-value="instagram">
                                <svg class="footer__instagram--icon">
                                    <use xlink:href="./img/product/sprites.svg#Instagram"></use>
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom--container container">
                    <div class="footer__company">
                        <a href="https://webmaestro.com.ua/" class="footer__company--link">
                            <svg class="webmaestro__svg">
                                <use xlink:href="./img/product/sprites.svg#webmaestro"></use>
                            </svg>
                            <span class="footer__company--title">Разработка и раскрутка сайтов</span>
                        </a>
                    </div>
                    <div class="footer__copyright">
                        <span class="footer__owner">© «MaxStar»  2023</span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<script src="/resources/js/product/index.js"></script>
</body>
</html>