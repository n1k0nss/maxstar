@extends('main.master')

@section('content')

<section class="hero__section section">
    <div class="hero__container container">
        <nav hero__nav>
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
        <div class="hero__slider">

        </div>
    </div>
</section>

<section class="brands__section section">
    <div class="brands__container container">
        {{-- Swiper --}}
    </div>
</section>

<section class="categories__section section">
    <div class="categories__container container">
        <ul class="categories-list list">
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/mobile.jpg" alt="">
                    <span>Телевізори</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/comp.jpg" alt="">
                    <span>Проектори</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/game.jpg" alt="">
                    <span>Аудіо для дому</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/wash.jpg" alt="">
                    <span>Домашні кінотеатри</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/photo.jpg" alt="">
                    <span>Аксесуари</span>
                </a>
            </li>
            <li class="categories-list__item">
                <a href="">
                    <img src="./img/main/categories/concert .jpg" alt="">
                    <span>Фото та відео техніка</span>
                </a>
            </li>

        </ul>
    </div>
</section>

<section class="actions__section section">
    <div class="actions__container-mobile container">

    </div>

    <div class="actions__container">

    </div>

</section>


@endsection
