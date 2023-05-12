@extends('main.master')

@section('content')

<section class="hero__section section">
    <div class="hero__container container">
        <nav class="hero__nav">
            <ul class="nav-list list">
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_menu"></use>
                        </svg>
                        <span>Каталог товарів</span>
                    </a>
                </li>
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_phone"></use>
                        </svg>
                        <span>Телефони та аксесуари</span>
                    </a>
                </li>
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_note"></use>
                        </svg>
                        <span>Комп’ютери</span>
                    </a>
                </li>
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_game"></use>
                        </svg>
                        <span>Ігрові приставки та консолі</span>
                    </a>
                </li>
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_washing"></use>
                        </svg>
                        <span>RTV та AGD</span>
                    </a>
                </li>
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_photo"></use>
                        </svg>
                        <span>Фото та відео техніка</span>
                    </a>
                </li>
                <li class="nav-list__item">
                    <a href="#" class="nav-link">
                        <svg width="18" height="18">
                            <use href="./img/main/sprite.svg#icon-category_pult"></use>
                        </svg>
                        <span>Техніка для концертів</span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="hero__swiper swiper">
            <div class="hero__swiper-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="hero__swiper-slide swiper-slide">
                    <img src="./img/main/swiper/slide1.webp" alt="Slide1">
                </div>
                <div class="hero__swiper-slide swiper-slide">
                    <img src="./img/main/swiper/slide2.webp" alt="Slide1">
                </div>
                <div class="hero__swiper-slide swiper-slide">
                    <img src="./img/main/swiper/slide3.webp" alt="Slide1">
                </div>
                <div class="hero__swiper-slide swiper-slide">
                    <img src="./img/main/swiper/slide4.webp" alt="Slide1">
                </div>
                <div class="hero__swiper-slide swiper-slide">
                    <img src="./img/main/swiper/slide5.webp" alt="Slide1">
                </div>

            </div>

            <button type="button" class="hero-swiper-button__prev">
                <svg>
                    <use href="./img/main/sprite.svg#icon-right_arrow"></use>
                </svg>
            </button>

            <button type="button" class="hero-swiper-button__next">
                <svg>
                    <use href="./img/main/sprite.svg#icon-right_arrow"></use>
                </svg>
            </button>
              <!-- If we need pagination -->
            <div class="hero__swiper-pagination swiper-pagination"></div>
        </div>
    </div>
</section>

<section class="brands__section section">
    <div class="brands__container container">
        <div class="brands__title">
            <h2>Популярні бренди</h2>
            <div class="brands__buttons">
                <button type="button" class="swiper-button swiper-button__prev brands-swiper-button__prev">
                    <svg>
                        <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                    </svg>
                </button>
                <button type="button" class="swiper-button swiper-button__next brands-swiper-button__next">
                    <svg>
                        <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                    </svg>
                </button>
            </div>
        </div>
        <div class="brands__swiper swiper">
            <div class="brands__swiper-wrapper swiper-wrapper">
                <!-- Slides -->
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/samsung.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/philips.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/lg.svg" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/akai.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/mi.svg" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/sony.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/hisense.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/huawei.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/apple.svg" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/canon.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/kivi.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/ergo.png" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/bravis.webp" alt="">
                </div>
                <div class="brands__swiper-slide swiper-slide">
                    <img src="./img/main/brands/dell.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="categories__section section">
    <div class="categories__container container">
        <h2>Популярні категорії</h2>
        <ul class="categories-list list">
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/mobile.jpg" alt="">
                    <span class="categories__text">Телефони та аксесуари</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/comp.jpg" alt="">
                    <span class="categories__text">Комп’ютери</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/game.jpg" alt="">
                    <span class="categories__text">Ігрові приставки та консолі</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/wash.jpg" alt="">
                    <span class="categories__text">RTV та AGD</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/photo.jpg" alt="">
                    <span class="categories__text">Фото та відео техніка</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/concert.jpg" alt="">
                    <span class="categories__text">Техніка для концертів</span>
                </a>
            </li>

        </ul>
    </div>
</section>

<section class="actions__section section">
    <div class="actions__container container">

        <div class="actions__tab-buttons">
            <div class="tab-buttons__box">
                <button type="button" class="tabs__btn button" data-tab="#discounts__tab" data-swiper-tab="#swiper1">
                    <span class="tab-name">
                        Акційні пропозиції
                    </span>
                </button>
                <button type="button" class="tabs__btn button" data-tab="#latest__tab" data-swiper-tab="#swiper2">
                    <span class="tab-name">
                        Останні надходження
                    </span>
                </button>
                <button type="button" class="tabs__btn button" data-tab="#your-views__tab" data-swiper-tab="#swiper3">
                    <span class="tab-name">
                        Ваші перегляди
                    </span>
                </button>
            </div>
        </div>

        <div class="actions-discount actions__item">
            <div class="discount__title actions__head">
                <h3><span>Акційні</span> пропозиції</h3>
                <div class="actions__buttons" id="swiper1">
                    <button type="button" class="swiper-button swiper-button__prev discount-swiper-button__prev">
                        <svg>
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                    <button type="button" class="swiper-button swiper-button__next discount-swiper-button__next">
                        <svg>
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="discount__swiper actions__swiper swiper tabs__item" id="discounts__tab">
                <div class="discount__swiper-wrapper swiper-wrapper">
                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/3.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/2.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/3.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/4.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/1.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/6.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="discount__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/5.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="actions__latest actions__item">
            <div class="latest__title actions__head">
                <h3><span>Останні</span> надходження</h3>
                <div class="actions__buttons" id="swiper2">
                    <button class="swiper-button swiper-button__prev latest-swiper-button__prev">
                        <svg>
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                    <button class="swiper-button swiper-button__next latest-swiper-button__next">
                        <svg>
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="latest__swiper actions__swiper swiper tabs__item" id="latest__tab">
                <div class="latest__swiper-wrapper swiper-wrapper">
                    <div class="latest__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/1.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="latest__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/6.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="latest__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/4.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="latest__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/2.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="latest__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/5.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="latest__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/3.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="actions__views actions__item">
            <div class="views__title actions__head">
                <h3><span>Ваші</span> перегляди</h3>
                <div class="actions__buttons" id="swiper3">
                    <button class="swiper-button swiper-button__prev views-swiper-button__prev">
                        <svg>
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                    <button class="swiper-button swiper-button__next views-swiper-button__next">
                        <svg>
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="views__swiper actions__swiper swiper tabs__item" id="your-views__tab">
                <div class="views__swiper-wrapper swiper-wrapper">
                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/1.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/2.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/1.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/3.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/4.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/2.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/5.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/6.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class="views__swiper-slide swiper-slide card">
                        <a href="">
                            <img class="card__image" src="./img/main/products/2.jpg" alt="">
                        </a>
                        <div class="card__info">
                            <a class="card__name" href="">
                                Телевизор Samsung UE55AU8000UXUA
                            </a>
                            <div class="card__code">
                                <span class="card__code-text">Код товара:</span>
                                <span class="card__code-number">5457578144</span>
                            </div>
                            <div class="card__price">
                                <div class="card_price-text">
                                    <span class="price__number">4 299</span>
                                    <span class="price__type">грн.</span>
                                </div>
                                <button class="card__cart-button button">
                                    <svg>
                                        <use href="./img/main/sprite.svg#icon-cart_fill"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<section class="advantages__section section">
    <div class="advantages__container container">
        <h2>Чому у нас вигідно купувати?</h2>
        <ul class="advantages-list list">
            <li class="advantages-list__item">
                <svg>
                    <use href="./img/main/sprite.svg#icon-advantage1"></use>
                </svg>
                <span>Замовлення приймаються 24/7</span>
            </li>
            <li class="advantages-list__item">
                <svg>
                    <use href="./img/main/sprite.svg#icon-advantage2"></use>
                </svg>
                <span>Конкурентні ціни, акції та знижки</span>
            </li>
            <li class="advantages-list__item">
                <svg>
                    <use href="./img/main/sprite.svg#icon-advantage3"></use>
                </svg>
                <span>Тільки перевірена техніка</span>
            </li>
            <li class="advantages-list__item">
                <svg>
                    <use href="./img/main/sprite.svg#icon-advantage4"></use>
                </svg>
                <span>Професійна консультація співробітників</span>
            </li>
            <li class="advantages-list__item">
                <svg>
                    <use href="./img/main/sprite.svg#icon-advantage5"></use>
                </svg>
                <span>Величезний вибір аксесуарів
                </span>
            </li>
            <li class="advantages-list__item">
                <svg>
                    <use href="./img/main/sprite.svg#icon-advantage6"></use>
                </svg>
                <span>Зручні способи оплати та доставки</span>
            </li>
        </ul>
    </div>
</section>

<section class="about__section section">
    <div class="about__container container">
        <img class="about__image" src="./img/main/about.jpg" alt="about image">
        <h2>Бpeндoві ocoбливocті нашого інтepнeт-мaгaзинy</h2>
        <p>Побутова техніка є тим видом товару, до вибору якого слід поставитися з усією відповідальністю, саме тому потрібно обрати спеціалізовану точку продажу такої електроніки, якою є Інтернет-магазин у м. Луцьк «MaxStar».<br><br>Сьогодні наш Інтернет-магазин побутової техніки є одним з найбільших у місті Луцьк, який постачає свої товари у інші міста та регіони України, наприклад, Чернівці, Івано-Франківськ, Луцьк та ін. Наша команда постійно аналізує динамічний український ринок, тому, обираючи категорії товарів для нашого онлайн-магазину, ми опираємося на результати оцінки попиту<br><br>Завдяки цьому до каталогу пропозицій нашого Інтернет-магазину побутової техніки постійно додаються нові позиції, а також проводяться акції та знижуються ціни на найбільш популярну електроніку. Крім цього, ми активно співпрацюємо з виробниками та постачальниками з усього світу для того, щоб забезпечити своїм клієнтам насправді широкий вибір найменувань товарів.<br><br>Серед безперечних переваг Інтернет-магазину побутової техніки та електроніки у Львові «MaxStar» слід особливо відзначити наступні: <br><br>Дизайн сайту розроблений таким чином, щоб кожен відвідувач зміг інтуїтивно зорієнтуватися та легко знайти саме ту побутову техніку, яка його цікавить (зручний каталог та функція швидкого пошуку); <br><br>Наш Луцький Інтернет-магазин побутової техніки пропонує вам позиції, які коштують дешевше, ніж в офф-лайнових точках продажу у м. Луцьк; <br><br>У нас ви можете недорого купити побутову техніку з доставкою кур’єрською службою у будь-який населений пункт України, наприклад, Ужгород чи Тернопіль, або забрати замовлену позицію у найближчому до вас магазині нашої мережі у місті Луцьк; <br><br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quibusdam reprehenderit ducimus eius ex autem, assumenda quaerat enim soluta illum illo, ab quis fugit similique repellat ut harum minima, nam praesentium dolor in! Laborum suscipit in culpa facilis? Aperiam quisquam unde fugiat consequuntur perspiciatis voluptates est odit doloribus ipsam eligendi ab corporis nemo ratione, veniam, adipisci nihil officiis ipsum sequi repellat praesentium. Molestias explicabo recusandae reprehenderit illo id error magnam hic aut mollitia, fugiat rem doloribus itaque repellendus vero! Alias vitae reprehenderit qui inventore dicta illo exercitationem adipisci impedit quas! Libero esse nam accusamus aliquid corporis exercitationem excepturi iusto molestias temporibus quas deserunt pariatur illum maxime, voluptatem consequuntur repellendus amet? Repellendus expedita porro deleniti sapiente. Quaerat consequatur id ex porro architecto, tenetur illum facere recusandae laboriosam labore molestiae laudantium reprehenderit officia provident ullam eligendi aliquid obcaecati nesciunt. Illum vitae commodi eveniet? Incidunt eaque tempora nihil non, suscipit excepturi ducimus quis esse modi eius quia totam laudantium cum officia quod sit ea tenetur voluptatibus molestias et minima vel doloribus maxime? Ipsum, dolore! Quam et quas porro facilis, sit libero. Expedita ex quia deleniti, odit, ipsam quisquam quaerat vitae excepturi sit reiciendis eum, totam quos quas repellendus officiis blanditiis id doloribus iure.
        </p>
        <button type="button" class="about__button">
            <svg width="24" height="24">
                <use href="./img/main/sprite.svg#icon-arrow_down"></use>
            </svg>
        </button>
    </div>
</section>


{{-- formTask --}}
<section class="task__section section">
    <div class="task__container">
        <div class="task">
            <h2>Залиште свій відгук!</h2>
            <form name="task" action="" class="task__form">

                <input type="text" class="task__name" name="name" placeholder="Ім'я">

                <input type="text" class="task__surname" name="surname" placeholder="Прізвище">

                <textarea class="task__comment" name="comment" id="form__comment" placeholder="Текст відгуку"></textarea>

                <div class="task__ratings">
                    <span>Ваша оцінка:</span>
                    <div class="ratings-buttons">

                        <input class="ratings__input" type="radio" name="nameRating" value="5" id="rate-5">
                        <label class="ratings__label" for="rate-5">&#9733</label>

                        <input class="ratings__input" type="radio" name="nameRating" value="4" id="rate-4">
                        <label class="ratings__label" for="rate-4">&#9733</label>

                        <input class="ratings__input" type="radio" name="nameRating" value="3" id="rate-3">
                        <label class="ratings__label" for="rate-3">&#9733</label>

                        <input class="ratings__input" type="radio" name="nameRating" value="2" id="rate-2">
                        <label class="ratings__label" for="rate-2">&#9733</label>

                        <input class="ratings__input" type="radio" name="nameRating" value="1" id="rate-1">
                        <label class="ratings__label" for="rate-1">&#9733</label>

                    </div>
                    <span class="rating-text"></span>
                </div>

                <div class="task__file">
                        <div class="file__load">
                            <div class="file__label">
                                <div class="butafor-button">
                                    <svg width="20" height="20">
                                        <use href="./img/main/sprite.svg#icon-category_photo"></use>
                                    </svg>
                                    <span>Прикріпити фото</span>
                                </div>
                                <input accept=".jpg, .png" type="file" name="image" class="file__input" multiple>
                        </div>
                    </div>
                    <div class="file__preview">
                    </div>
                </div>

                <button class="task__submit" type="submit">Надіслати</button>
            </form>
        </div>
    </div>
</section>


@endsection
