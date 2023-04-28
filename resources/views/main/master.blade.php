<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/scss/main/index.scss', 'resources/js/main/index.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxstar</title>
</head>
<body>
    <header class="header">
        <div class="header__container container">
            <div class="header__logo">
                <a class="logo__link link" href="#">

                    <img src="./img/main/logo.svg" alt="">
                </a>
            </div>
            <div class="header__search-modal header__modal">
                <button class="header__search button" type="button" data-target="search-menu">
                    <svg width="24" height="24">
                        <use href="./img/main/sprite.svg#icon-search"></use>
                    </svg>
                </button>
                <div class="search-modal__box">
                    <div class="modal__search">
                        <form action="" class="modal__search-form">
                            <input class="search-form__input" type="text" placeholder="Пошук товарів" name="search">
                            <button class="search-form__button button" type="submit">
                                <svg width="20" height="20">
                                    <use href="./img/main/sprite.svg#icon-search"></use>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="modal__contact">
                        <div class="contact__title">
                            <p>не знайшли те що шукали?</p>
                            <p>Тоді зателефонуйте нам по телефону</p>
                        </div>
                        <ul class="contact__number-list list">
                            <li class="number-list__item"><a href="tel:+380867870012">+38 086 787 00 12</a>
                                 <svg width="17" height="13">
                                    <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                </svg>
                            </li>
                            <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                                <svg width="16" height="16">
                                   <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                               </svg>
                           </li>
                           <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                            <svg width="15" height="17">
                               <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                           </svg>
                       </li>
                        </ul>
                    </div>
                    <div class="modal_social">
                        <ul class="social-list list">
                            <li class="social-list__item">
                                 <a href="#">
                                    <svg width="34" height="34">
                                        <use href="./img/main/sprite.svg#icon-facebook"></use>
                                    </svg>
                                 </a>
                            </li>
                            <li class="social-list__item">
                                <a href="#">
                                   <svg width="34" height="34">
                                       <use href="./img/main/sprite.svg#icon-youtube"></use>
                                   </svg>
                                </a>
                           </li>
                           <li class="social-list__item">
                            <a href="#">
                               <svg width="34" height="34">
                                   <use href="./img/main/sprite.svg#icon-telegram"></use>
                               </svg>
                            </a>
                       </li>
                       <li class="social-list__item">
                        <a href="#">
                           <svg width="34" height="34">
                               <use href="./img/main/sprite.svg#icon-instagram"></use>
                           </svg>
                        </a>
                   </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="header__cart-modal header__modal">
                <button class="header__cart-button button" type="button" data-target="cart">
                    <svg width="24" height="24">
                        <use href="./img/main/sprite.svg#icon-cart"></use>
                    </svg>
                </button>
            </div>
            <div class="header__menu-modal header__modal">
                <button class="header__menu-button button" type="button" data-target="menu">
                    <div class="menu-button__wrapper">
                        <span class="menu-button__span"></span>
                    </div>
                </button>
                <div class="menu-modal__box">
                    <div class="modal_fav">
                        <a href="#">
                            <svg width="17" height="15">
                                <use href="./img/main/sprite.svg#icon-heart"></use>
                            </svg>
                            <span>Вибране</span>
                        </a>
                    </div>
                    <div class="modal__nav">
                        <nav class="nav">
                            <ul class="nav-list list">
                                <li class="nav-list__item">
                                    <a href="#" class="nav-link">Про нас</a>
                                </li>
                                <li class="nav-list__item">
                                    <a href="#" class="nav-link">Як замовити</a>
                                </li>
                                <li class="nav-list__item">
                                    <a href="#" class="nav-link">Доставка і оплата</a>
                                </li>
                                <li class="nav-list__item">
                                    <a href="#" class="nav-link">Гарантія</a>
                                </li>
                                <li class="nav-list__item">
                                    <a href="#" class="nav-link">Контакти</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="modal__contact">
                        <div class="contact__title">
                            <p>Телефони для зв'язку</p>
                        </div>
                        <ul class="contact__number-list list">
                            <li class="number-list__item"><a href="tel:+380867870012">+38 086 787 00 12</a>
                                 <svg width="17" height="13">
                                    <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                </svg>
                            </li>
                            <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                                <svg width="16" height="16">
                                   <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                               </svg>
                           </li>
                           <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                            <svg width="15" height="17">
                               <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                           </svg>
                       </li>
                        </ul>
                    </div>
                    <div class="modal__lang-switch">
                        <ul class="lang-list">
                            <li class="lang-list__item"><a href="#">Ua</a></li>
                            <li class="lang-list__item"><a href="#">Ru</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
