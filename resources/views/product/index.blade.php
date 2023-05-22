@extends('product.master')

@section('content')
<div class="wrapper__content">
    <div class="inner__main">
        <section class="breadcrumbs">
            <div class="breadcrumbs__container container">
                <nav class="breadcrumbs__nav">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__list--item">
                            <a href="#" class="breadcrumbs__list--link" data-query="query-link" data-param-value="home">Головна</a>
    
                            <svg class="breadcrumbsArrow__svg">
                                <use xlink:href="./img/product/sprites.svg#arrowDown"></use>
                            </svg>
                        </li>
                        <li class="breadcrumbs__list--item">
                            <a href="#" class="breadcrumbs__list--link" data-query="query-link" data-param-value="catalogue">Каталог товарів</a>
    
                            <svg class="breadcrumbsArrow__svg">
                                <use xlink:href="./img/product/sprites.svg#arrowDown"></use>
                            </svg>
                        </li>
                        <li class="breadcrumbs__list--item">
                            <a href="#" class="breadcrumbs__list--link breadcrumbs__active--link" data-query="query-link" data-param-value="product">Телефони та аксесуари</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>

        <section class="product">
            <div class="product__container container">
                <h1 class="product__title">Мобільний телефон Apple iPhone 11 128GB Black Slim Box (MHDH3) Офіційна гарантія
                </h1>
                <div class="product__slider--details">
                    <div class="product__slider--special">
                        <button class="swiper-fav-btn js-fav-btn">
                            <svg class="slider__heart slider__heart-js">
                                <use xlink:href="./img/product/sprites.svg#slider_heart"></use>
                            </svg>
                        </button>
                        
                        <span class="slider__special--span">Супер ціна</span>
                    </div>
                </div>
                    <div class="product__gallery">
                        <div class="swiper product__slider">
                            <div class="swiper-wrapper container">
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_1.jpg" alt="slide_1" class="slide__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_2.jpg" alt="slide_2" class="slide__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_3.jpg" alt="slide_3" class="slide__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_1.jpg" alt="slide_4" class="slide__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_2.jpg" alt="slide_5" class="slide__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_3.jpg" alt="slide_6" class="slide__img">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_1.jpg" alt="slide_7" class="slide__img">
                                </div>
                            </div>
        
                            <div class="swiper-pagination product__swiper--pagination"></div>
                        </div>
    
                        <div class="swiper scroll__slider">
                            <div class="swiper-wrapper scroll__slider--wrapper container hide-slider">
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_1.jpg" alt="slide_1" class="slide__img-thumb">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_2.jpg" alt="slide_2" class="slide__img-thumb">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_3.jpg" alt="slide_3" class="slide__img-thumb">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_1.jpg" alt="slide_4" class="slide__img-thumb">
                                </div>
                                <div class="swiper-slide">
                                    <img src="./img/product/product_slides/slide_2.jpg" alt="slide_5" class="slide__img-thumb">
                                </div>
                            </div>
    
                            <div class="swiper-scrollbar product__swiper--scrollbar"></div>
                        </div>
                    </div>
                <div class="product__info">
                    <div class="product__inner--info">
                        <div class="product__info--card">
                            <div class="product__info--container">
                                <div class="product__info--codeNstate">
                                    <div class="product__info--code">
                                        <span class="product__info--title-code">Код товару: <span>5457578144</span></span>
                                    </div>
        
                                    <div class="product__info--state">
                                        <span class="product__info--title-state">Стан товару: <span>НОВИЙ</span></span>
                                    </div>
                                </div>
    
                                <div class="product__info--costNcount">
                                    <div class="product__info--price">
                                        <svg class="price__svg">
                                            <use xlink:href="./img/product/sprites.svg#price"></use>
                                        </svg>
        
                                        <span class="product__info--newPrice-title">2 999 <span class="product__info--currency">грн.</span></span>
                                        <span class="product__info--oldPrice-title">3 199 грн.</span>
                                    </div>
        
                                    <div class="product__info--counter">
                                        <span class="product__info--counter-title">Кількість:</span>
        
                                        <div class="product__info--countQantity">
                                            <button class="product__info--count-button prevCount-btn js-decr">
                                                <svg class="counterDecrArrow__svg">
                                                    <use xlink:href="./img/product/sprites.svg#Arrow_Switch"></use>
                                                </svg>
                                            </button>
        
                                            <input type="number" min="1" max="100" value="1" class="product__info--count-input js-quant-input">
        
                                            <button class="product__info--count-button nextCount-btn js-incr">
                                                <svg class="counterIncrArrow__svg">
                                                    <use xlink:href="./img/product/sprites.svg#Arrow_Switch"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product__info--payment js-overlay-cart">
                                <div class="add-to-cart__popup js-cart-popup">
                                    <button class="close__popup--btn js-close-popup"></button>
                                    <svg class="checked__svg">
                                        <use xlink:href="./img/product/sprites.svg#checked"></use>
                                    </svg>
                                    <div class="popup__title">Товар успішно доданий до кошика</div>
                                    <div class="popup__btns">
                                        <button class="purchase__btn js-close-popup">Оформити замовлення</button>
                                        <button class="return__btn js-close-popup">Повернутись до покупок</button>
                                    </div>
                                </div>
                            </div>

                            <div class="product__info--phone js-overlay-phone">
                                <div class="phone__popup js-phone-popup">
                                    <div class="phone__popup--container">
                                        <svg class="phone__popup--svg">
                                            <use xlink:href="./img/product/sprites.svg#Calling"></use>
                                        </svg>
                                        <input type="tel" name="tel-inpt" class="phone__popup--input" pattern="+38 ([0-9]{3})-[0-9]{3}-[0-9]{3}-[0-9]{3}" required placeholder="+38 (___) ___ ___ ___">
                                        <button type="submit" class="phone__popup--btn js-close-phonepoup">
                                            <span>OK</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="product__info--payment-btns">
                                <button class="product__info--add-to-cart js-add-to-cart" type="button">
                                    <svg class="cart__svg">
                                        <use xlink:href="./img/product/sprites.svg#button-cart"></use>
                                    </svg>

                                    <span class="add-to-cart__title">Додати до кошика</span>
                                </button>

                                <button class="product__info--one-click-buy js-one-click-buy" type="button">
                                    <svg class="calling__svg">
                                        <use xlink:href="./img/product/sprites.svg#Calling"></use>
                                    </svg>

                                    <span class="one-click-buy__title">Купити в 1 клік</span>
                                </button>
                            </div>

                            <div class="product__info--meest">
                                <div class="product__info--meest-check">
                                    <input type="checkbox" name="meest__checkbox" class="product__info--meest-checkbox">

                                    <svg class="meest__logo">
                                        <use xlink:href="./img/product/sprites.svg#Meest_Corporation_Logo"></use>
                                    </svg>
                                </div>

                                <div class="product__info--meest-text">
                                    <p class="product__info--meest-p">
                                        Отримай цей товар зі знижкою <span>5%</span> скориставшись послугою meest express
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product__details--container">
                            <div class="product__characteristics">
                                <h2 class="product__characteristics--title">Характеристики</h2>
                                <div class="product__characteristics--content">
                                    <ul class="product__characteristics--list">
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Діагональ</span>
                                            <span class="product__characteristics--value">6.1</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Роздільна здатність</span>
                                            <span class="product__characteristics--value">1792 x 828</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Тип матриці</span>
                                            <span class="product__characteristics--value">IPS</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Кількість точок торкання</span>
                                            <span class="product__characteristics--value">10</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Матеріал екрана</span>
                                            <span class="product__characteristics--value">Скло</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Кількість СІМ-карт</span>
                                            <span class="product__characteristics--value">1</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Розміри СІМ-карти</span>
                                            <span class="product__characteristics--value">Nano-SIM</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Оперативна пам'ять</span>
                                            <span class="product__characteristics--value">4 ГБ</span>
                                        </li>
                                        <li class="product__characteristics--item">
                                            <span class="product__characteristics--name">Вбудована пам'ять</span>
                                            <span class="product__characteristics--value">128 ГБ</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
    
                            <div class="product__delivery">
                                <div class="product__delivery--title">Оплата та доставка в Україну</div>
                                <div class="product__delivery--content">
                                    <ul class="product__delivery--list">
                                        <li class="product__delivery--item">
                                            <svg class="bus--svg">
                                                <use xlink:href="./img/product/sprites.svg#bus"></use>
                                            </svg>
    
                                            <div class="product__delivery--item-text">
                                                <span class="delivery__item--title">Доставка</span>
                                                <p class="delivery__item--about">
                                                    деталі з Польщі займе 3-5 робочих днів
                                                    По регіонах України 1-2 дні Новою поштою
                                                </p>
                                            </div>
                                        </li>
                                        <li class="product__delivery--item">
                                            <svg class="like--svg">
                                                <use xlink:href="./img/product/sprites.svg#like"></use>
                                            </svg>
    
                                            <div class="product__delivery--item-text">
                                                <span class="delivery__item--title">Гарантія</span>
                                                <p class="delivery__item--about"> 
                                                    Гарантія. 6 місяців Обмін/возврат товару протягом 14 днів 
                                                </p>
                                            </div>
                                        </li>
                                        <li class="product__delivery--item">
                                            <svg class="payTelephone--svg">
                                                <use xlink:href="./img/product/sprites.svg#payTelephone"></use>
                                            </svg>
    
                                            <div class="product__delivery--item-text">
                                                <span class="delivery__item--title">Оплата</span>
                                                <p class="delivery__item--about">
                                                    готівкою при отриманні. Переказ на банківській рахунок
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="goods__recommended">
            <div class="goods__recommended--container container">
                <h2 class="goods__recommended--title">Також вас можуть зацікавити</h2>

                <nav class="goods__slider--navs">
                    <button class="goods__slider--navigation recommended-prev-btn">
                        <svg class="recommended-prev-btn--svg">
                            <use xlink:href="./img/product/sprites.svg#Arrow_Switch"></use>
                        </svg>
                    </button>
                    <button class="goods__slider--navigation recommended-next-btn">
                        <svg class="recommended-next-btn--svg">
                            <use xlink:href="./img/product/sprites.svg#Arrow_Switch"></use>
                        </svg>
                    </button>
                </nav>
                <div class="swiper goods__recommended--slider">
                    <div class="swiper-wrapper goods__recommended--wrapper">
                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_1.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy A42</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_2.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy A51</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_3.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy A71</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_4.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy M12</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_5.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy M33</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_6.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy M32</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_7.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy S22</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_3.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Huawei P Smart</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_6.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон ZTE Blade V30</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__card">
                            <div class="goods__img--wrapper">
                                <a href="#" class="goods__img--link">
                                    <img src="./img/product/goods_slides/goods_5.jpg" alt="#" class="goods__img">
                                </a>
                            </div>

                            <div class="goods__card--content">
                                <a href="#" class="goods__card--name-link">Мобильный телефон Samsung Galaxy A32</a>

                                <div class="goods__card--price">
                                    <span class="goods__card--new-price">4 299 <span class="goods__card--currency">грн.</span></span>
                                    <span class="goods__card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="company__description">
            <div class="company__description--container container">
                <button type="button" class="text-reveal--btn js-reveal">
                    <svg class="reveal-action--svg">
                        <use xlink:href="./img/product/sprites.svg#arrowDown"></use>
                    </svg>
                </button>
                <span class="company__description--title">Бpeндoві ocoбливocті нашого інтepнeт-мaгaзинy</span>

                <div class="company__description--text">
                    <p>Побутова техніка є тим видом товару, до вибору якого слід поставитися з усією відповідальністю, саме тому потрібно обрати спеціалізовану точку продажу такої електроніки, якою є Інтернет-магазин у м. Луцьк «MaxStar».</p>

                    <p>Сьогодні наш Інтернет-магазин побутової техніки є одним з найбільших у місті Луцьк, який постачає свої товари у інші міста та регіони України, наприклад, Чернівці, Івано-Франківськ, Луцьк та ін. Наша команда постійно аналізує динамічний український ринок, тому, обираючи категорії товарів для нашого онлайн-магазину, ми опираємося на результати оцінки попиту.</p>

                    <p>Завдяки цьому до каталогу пропозицій нашого Інтернет-магазину побутової техніки постійно додаються нові позиції, а також проводяться акції та знижуються ціни на найбільш популярну електроніку. Крім цього, ми активно співпрацюємо з виробниками та постачальниками з усього світу для того, щоб забезпечити своїм клієнтам насправді широкий вибір найменувань товарів.</p>

                    <span>Серед безперечних переваг Інтернет-магазину побутової техніки та електроніки у Львові «MaxStar» слід особливо відзначити наступні:</span>

                    <div class="continue__description--text js-reveal-text">
                        <p>Дизайн сайту розроблений таким чином, щоб кожен відвідувач зміг інтуїтивно зорієнтуватися та легко знайти саме ту побутову техніку, яка його цікавить (зручний каталог та функція швидкого пошуку);</p>

                        <p>Наш Луцькський Інтернет-магазин побутової техніки пропонує вам позиції, які коштують дешевше, ніж в офф-лайнових точках продажу у м. Луцьк;</p>

                        <p>У нас ви можете недорого купити побутову техніку з доставкою кур’єрською службою у будь-який населений пункт України, наприклад, Ужгород чи Тернопіль, або забрати замовлену позицію у найближчому до вас магазині нашої мережі у місті Луцьк; </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="goods__views">
            <div class="goods__views--container container">
                <h2 class="goods__views--title">Ваші перегляди</h2>

                <nav class="goods__views-slider--navs">
                    <button class="goods__views-slider--navigation views-prev-btn">
                        <svg class="views-prev-btn--svg">
                            <use xlink:href="./img/product/sprites.svg#Arrow_Switch"></use>
                        </svg>
                    </button>
                    <button class="goods__views-slider--navigation views-next-btn">
                        <svg class="views-next-btn--svg">
                            <use xlink:href="./img/product/sprites.svg#Arrow_Switch"></use>
                        </svg>
                    </button>
                </nav>
                <div class="swiper goods__views--slider">
                    <div class="swiper-wrapper goods__views--wrapper">
                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_3.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy A42</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_2.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy A32</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_4.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон ZTE Blade V30</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_1.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Huawei P Smart</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_6.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy S22</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_5.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy M32</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_7.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy M33</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_2.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy M12</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_4.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy A71</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide goods__views-card">
                            <div class="goods__views-img--wrapper">
                                <a href="#" class="goods__views-img--link">
                                    <img src="./img/product/goods_slides/goods_6.jpg" alt="#" class="goods__views--img">
                                </a>
                            </div>

                            <div class="goods__views-card--content">
                                <a href="#" class="goods__views-card--name">Мобильный телефон Samsung Galaxy A51</a>

                                <div class="goods__views-card--price">
                                    <span class="goods__views-card--new-price">4 299 <span class="goods__views-card--currency">грн.</span></span>
                                    <span class="goods__views-card--old-price">4 800 грн.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection