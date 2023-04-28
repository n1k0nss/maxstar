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
                <a href="logo__link link" href="#">
                    <svg>
                        <use href="./img/main/sprite.svg#icon-header-logo"></use>
                    </svg>
                </a>
            </div>
            <div class="header__search-modal">
                <button class="header__search button" type="button" data-target="search-menu">
                    <svg>
                        <use href="./img/main/sprite.svg#icon-search"></use>
                    </svg>
                </button>
                <div class="search-modal__box">
                    <div class="modal__search">
                        <form action="" class="modal__search-form">
                            <input class="search-form__input" type="text" placeholder="Пошук товарів" name="search">
                            <button class="search-form__button button" type="submit"></button>
                        </form>
                    </div>
                    <div class="modal__contact">
                        <div class="contact__title">
                            <p>Не нашли что искали?</p>
                            <p>Тогда позвоните нам по телефону</p>
                        </div>
                        <ul class="contact__number-list">
                            <li class="number-list__item"><a href="tel:+380867870012">+38 086 787 00 12</a>
                                 <svg>
                                    <use href="./img/main/sprite.svg#icon-telegram-mini"></use>
                                </svg>
                            </li>
                            <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                                <svg>
                                   <use href="./img/main/sprite.svg#icon-whatsapp-mini"></use>
                               </svg>
                           </li>
                           <li class="number-list__item"><a href="tel:+380864577845">+38 086 457 78 45</a>
                            <svg>
                               <use href="./img/main/sprite.svg#icon-viber-mini"></use>
                           </svg>
                       </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="header__cart">

            </div>
            <div class="header__menu-dropdown">

            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
