<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/scss/main/index.scss'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxstar</title>
</head>
<body data-lock>
    <header class="header">
        <div class="header__container container">
            <div class="header__logo">
                <a class="logo__link link" href="/">
                    <img src="./img/main/logo.svg" alt="">
                </a>
            </div>
            <div class="header__modal header__search-modal ">
                <button class="header__search button" type="button" data-target="search-menu" data-search-menu-button>
                    <svg class="header__search-icon" width="24" height="24">
                        <use href="./img/main/sprite.svg#icon-search"></use>
                    </svg>
                </button>
                <div class="search-modal__box" data-search-menu>
                    <div class="modal__search">
                        <form action="" class="modal__search-form">
                            <input class="search-form__input" type="text" placeholder="Пошук товарів" name="search" autocomplete="off">
                            <button class="search-form__button button" type="submit">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-search"></use>
                                </svg>
                            </button>
                        </form>
                    </div>
                    <div class="modal__contact">
                        <div class="contact__title">
                            <p>Не знайшли те що шукали?</p>
                            <p>Тоді зателефонуйте нам по телефону</p>
                        </div>
                        <ul class="contact__number-list list">
                            <li class="number-list__item"><a href="tel:+380867870012">+38 086 787 00 12</a>
                                 <a href="#">
                                    <svg width="24" height="24">
                                        <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                    </svg>
                                 </a>
                            </li>
                            <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                                <a href="#">
                                    <svg width="24" height="24">
                                        <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                                    </svg>
                                </a>
                           </li>
                           <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                            <a href="#">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                                </svg>
                            </a>
                       </li>
                        </ul>
                    </div>
                    <div class="modal__social">
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

            <div class="header__modal header__menu-modal ">
                <button class="header__menu-button button" type="button" data-target="menu" data-main-menu-button>
                    <div class="menu-button__wrapper">
                        <span class="menu-button__span"></span>
                    </div>
                </button>
                <div class="menu-modal__box" data-main-menu>
                    <div class="modal__fav">
                        <a href="#">
                            <div class="fav-icon">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-heart"></use>
                                </svg>
                            </div>
                            <span>Вибране</span>
                        </a>
                    </div>
                    <div class="modal__cart">
                        <a href="#">
                            <div class="cart-icon">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-cart"></use>
                                </svg>
                            </div>
                            <span>Кошик</span>
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
                                 <a href="#">
                                    <svg width="24" height="24">
                                        <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                    </svg>
                                 </a>
                            </li>
                            <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                                <a href="#">
                                    <svg width="24" height="24">
                                        <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                                    </svg>
                                </a>
                           </li>
                           <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                            <a href="#">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                                </svg>
                            </a>
                       </li>
                        </ul>
                    </div>
                    <div class="modal__lang-switch">
                        <ul class="lang-list list">
                            <li class="lang-list__item"><a href="#">Ua</a></li>
                            <li class="lang-list__item"><a href="#">Ru</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="header__phones">
                <div class="phones__number">
                    <span class="phones__number-normal">+38 086     <span class="phones__number-bold">787 00 12</span></span>
                    <svg width="24" height="24">
                        <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                    </svg>
                    <button type="button" class="phones__button button" data-phone-box-button>
                        <svg width="24" height="24">
                            <use href="./img/main/sprite.svg#icon-arrow_down"></use>
                        </svg>
                    </button>
                </div>
                <div class="phones__box" data-phone-box>
                    <ul class="contact__number-list list">
                        <li class="number-list__item"><a class="number-list__phone" href="tel:+380867870012">+38 086 787 00 12</a>
                             <a href="#">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                </svg>
                             </a>
                        </li>
                        <li class="number-list__item"><a class="number-list__phone" href="tel:+380864577845">+38 086 457 78 45</a>
                            <a href="#">
                                <svg width="24" height="24">
                                    <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                                </svg>
                            </a>
                       </li>
                       <li class="number-list__item"><a class="number-list__phone" href="tel:+380864577845">+38 086 457 78 45</a>
                        <a href="#">
                            <svg width="24" height="24">
                                <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                            </svg>
                        </a>
                   </li>
                    </ul>

                    <div class="phones__plan">
                        <span class="phones__title">Графік роботи</span>
                        <ul class="phones__plan-list list">
                            <li class="plan-list__item">Пн-Пт: <span>9:00–18:30
                            </span></li>
                            <li class="plan-list__item">Сб: <span>9:00–16:00</span>
                            </li>
                            <li class="plan-list__item">Нд — <span>вихідний</span></li>
                        </ul>
                    </div>


                </div>
            </div>

        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer">
            <div class="footer__main">
                <div class="footer__container-main container">
                    <div class="footer__logo">
                        <a class="logo__link link" href="/">
                            <img src="./img/main/footer-logo.svg" alt="">
                        </a>
                    </div>
                    <address class="footer__info">
                        <div class="footer__contacts footer__item">
                            <span class="footer__title">Наші контакти</span>
                            <ul class="footer__contact-list list">
                                <li class="contact-list__item">
                                    <a href="tel:+380867870012">+38 086 787 00 12</a>
                                     <a href="#">
                                        <svg width="24" height="24">
                                            <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                        </svg>
                                     </a>
                                </li>
                                <li class="contact-list__item">
                                    <a href="tel:+380864577845">+38 086 457 78 45</a>
                                    <a href="#">
                                        <svg width="24" height="24">
                                            <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="contact-list__item">
                                    <a href="tel:+380864577845">+38 086 457 78 45</a>
                                <a href="#">
                                    <svg width="24" height="24">
                                        <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                                    </svg>
                                </a>
                                </li>
                            </ul>
                        </div>

                        <div class="footer__schedule footer__item">
                            <span class="footer__title">Графік роботи</span>
                            <ul class="schedule-list list">
                                <li class="schedule-list__item">Пн-Пт: <span>9:00–18:30
                                </span></li>
                                <li class="schedule-list__item">Сб: <span>9:00–16:00</span>
                                </li>
                                <li class="schedule-list__item">Нд — <span>вихідний</span></li>
                            </ul>
                        </div>

                        <div class="footer__address">
                            <span class="footer__title">Адреса</span>
                            <p>Головний офіс <br> <span>м.Луцьк, вул. Лесі Українки, 40</span></p>
                        </div>
                    </address>
                    <div class="footer__social">
                        <ul class="footer__social-list list">
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
            <div class="footer__bottom">
                <div class="footer__container-bottom container">
                    <div class="footer__company">
                        <a href="#">
                            <svg width="120" height="20">
                                <use href="./img/main/sprite.svg#icon-webmaestro"></use>
                            </svg>
                            <span>Розробка і розкрутка сайтів</span>
                        </a>
                    </div>
                    <div class="footer__copyright">
                        <span>© «MaxStar»  2023</span>
                    </div>

                </div>
            </div>
    </footer>
    @vite(['resources/js/main/index.js'])
</body>
</html>
