<!DOCTYPE html>
<html lang="ru">
    <?php
        $link = '
            <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css" />
            <link rel="stylesheet" href="css/swiper.css">
            <link rel="stylesheet" href="css/main.css">
        ';
        $script = '
            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
        ';
        include('blocks/head.php');
    ?>
<body>
    <?php
    include('blocks/header.php');

    function create_url_img($url_img)
    {
        return "https://" . $_SERVER['HTTP_HOST'] . "/img/$url_img";
    }

    ?>

    <section class="benefits">
        <div class="container">
            <div class="benefits__wrapper">
                <h2 class="section-title benefits-title aos-init aos-animate" data-aos="fade-down" data-aos-duration="600">почему выбирают нас <span class="benefits-mob"> для <br> строительства домов и коттеджей</span></h2>
                <div class="benefits-items__wrapper">
                    <div class="benefits-item aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                        <div class="benefits-item__img-wrapper">
                            <img src="<?= create_url_img("calc.png") ?>" alt="" class="benefits-item__img">
                        </div>
                        <h4 class="benefits-item__title">РАСЧЕТ СМЕТЫ ПОД <br> ВАШ БЮДЖЕТ</h4>
                    </div>

                    <div class="benefits-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="800">
                        <div class="benefits-item__img-wrapper">
                            <img src="img/services.png" alt="" class="benefits-item__img">
                        </div>
                        <h4 class="benefits-item__title">КАЧЕСТВЕННОЕ ВЫПОЛНЕНИЕ ВСЕГО КОМПЛЕКСА СТРОИТЕЛЬНЫХ УСЛУГ</h4>
                    </div>

                    <div class="benefits-item aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefits-item__img-wrapper">
                            <img src="img/warranty.png" alt="" class="benefits-item__img">
                        </div>
                        <h4 class="benefits-item__title">ГАРАНТИЯ НА <br> СТРОИТЕЛЬСТВО 5 ЛЕТ</h4>
                    </div>

                    <div class="benefits-item aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                        <div class="benefits-item__img-wrapper">
                            <img src="img/home.png" alt="" class="benefits-item__img">
                        </div>
                        <h4 class="benefits-item__title">ПРОФЕССИОНАЛЬНЫЙ ПОДХОД К СТРОТЕЛЬСТВУ ВАШЕГО ДОМА</h4>
                    </div>

                    <div class="benefits-item aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                        <div class="benefits-item__img-wrapper">
                            <img src="img/checkmark-icon.png" alt="" class="benefits-item__img">
                        </div>
                        <h4 class="benefits-item__title">ИСПОЛЬЗОВАНИЕ ВЫСОКОКАЧЕСТВЕННЫХ МАТЕРИАЛОВ</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="top-houses">
        <div class="container">
            <div class="top-house__wrapper">
                <h2 class="top-house__title section-title">ЛУЧШИЕ ПРОЕКТЫ</h2>
                <div class="top-house__slide-container">
                    <div class="swiper top-house__swiper">
                        <div class="swiper-wrapper top-house__wrapper-slide">
                            <div class="top-house__slide swiper-slide">
                                <img src="/img/house-project-12.png" alt="Проект дома №12 из газобетона" class="top-house__slide-img">
                                <div class="top-house__slide-content">
                                    <h4 class="top-house__slide-title">Проект дома №12 из газобетона</h4>
                                    <div class="top-house__slide-desc">
                                        <p class="top-house__slide-text top-house__house-floor">Колличество этажей: 2</p>
                                        <p class="top-house__slide-text top-house__house-area">126 кв.м.</p>
                                        <p class="top-house__slide-text top-house__house-price-">от 1 170 000 руб.</p>
                                    </div>
                                    <a href="" class="top-house__slide-link-more top-house__slide-text">
                                        Подробнее
                                        <span class="button-next">
                                            <svg class="icon arrow-next">
                                                <use xlink:href="img/sprite.svg#arrow-next"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="top-house__slide swiper-slide">
                                <img src="/img/house-project-19.png" alt="Проект дома №19 из кирпича" class="top-house__slide-img">
                                <div class="top-house__slide-content">
                                    <h4 class="top-house__slide-title">Проект дома №19 из кирпича</h4>
                                    <div class="top-house__slide-desc">
                                        <p class="top-house__slide-text top-house__house-floor">Колличество этажей: 2</p>
                                        <p class="top-house__slide-text top-house__house-area">168 кв.м.</p>
                                        <p class="top-house__slide-text top-house__house-price-">от 1 790 000 руб.</p>
                                    </div>
                                    <a href="" class="top-house__slide-link-more top-house__slide-text">
                                        Подробнее
                                        <span class="button-next">
                                            <svg class="icon arrow-next">
                                                <use xlink:href="img/sprite.svg#arrow-next"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="top-house__slide swiper-slide">
                                <img src="/img/house-project-16.png" alt="Проект дома №16 из газобетона" class="top-house__slide-img">
                                <div class="top-house__slide-content">
                                    <h4 class="top-house__slide-title">Проект дома №16 из газобетона</h4>
                                    <div class="top-house__slide-desc">
                                        <p class="top-house__slide-text top-house__house-floor">Колличество этажей: 2</p>
                                        <p class="top-house__slide-text top-house__house-area">220 кв.м.</p>
                                        <p class="top-house__slide-text top-house__house-price-">от 2 680 000 руб.</p>
                                    </div>
                                    <a href="" class="top-house__slide-link-more top-house__slide-text">
                                        Подробнее
                                        <span class="button-next">
                                            <svg class="icon arrow-next">
                                                <use xlink:href="img/sprite.svg#arrow-next"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="top-house__slide swiper-slide">
                                <img src="/img/house-project-26.png" alt="Проект дома №26 деревянный дом" class="top-house__slide-img">
                                <div class="top-house__slide-content">
                                    <h4 class="top-house__slide-title">Проект дома №26 деревянный дом</h4>
                                    <div class="top-house__slide-desc">
                                        <p class="top-house__slide-text top-house__house-floor">Колличество этажей: 3</p>
                                        <p class="top-house__slide-text top-house__house-area">190 кв.м.</p>
                                        <p class="top-house__slide-text top-house__house-price-">от 2 320 000 руб.</p>
                                    </div>
                                    <a href="" class="top-house__slide-link-more top-house__slide-text">
                                        Подробнее
                                        <span class="button-next">
                                            <svg class="icon arrow-next">
                                                <use xlink:href="img/sprite.svg#arrow-next"></use>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="calc">
        <div class="calc__wrapper">
            <div class="calc-tabs">
                <div class="calc-tabs__item calc-tabs__item--active" data-calc="house">Рассчитать стоимость дома</div>
                <div class="calc-tabs__item" data-calc="mortgage">Рассчитать стоимость ипотеки</div>
                <div class="calc-tabs__item" data-calc="services">Рассчитать стоимость услуг</div>
                <div class="calc-tabs__item" data-calc="estimate">Рассчитать смету на строительство дома</div>
                <div class="calc-tabs__item" data-calc="stock">Акции</div>
            </div>
            <div class="calc-content">
                <div class="calc-content__wrapper calc-content-house calc-content--active">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <h3 class="calc-content__title">Какой дом необходимо построить?</h3>
                        <div class="calc-content__cards-wrapper calc-content__house-types">
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/sectionCalculate-img-Brick-house.png" alt="Дом из кирпича" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Дом из кирпича</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-delay="150">
                                <img src="img/sectionCalculate-img-Timber-house.png" alt="Дом из бруса" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Дом из бруса</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                                <img src="img/sectionCalculate-img-Log-house.png" alt="Дом из бревна" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Дом из бревна</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-delay="450">
                                <img src="img/sectionCalculate-img-House-of-tiles.png" alt="Дом из панелей" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Дом из панелей</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-delay="600">
                                <img src="img/sectionCalculate-img-Block-house.png" alt="Дом из блоков" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Дом из блоков</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800" data-aos-delay="750">
                                <img src="img/sectionCalculate-img-Frame-house.png" alt="Каркасный дом" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Каркасный дом</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/sectionCalculate-img-House-carriage.png" alt="Дом из лафета" class="calc-content__img">
                                <input type="radio" name="house-of-brick" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Дом из лафета</a>
                            </label>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-1">
                                    <label for="house-2-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-2">
                                    <label for="house-2-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-3">
                                    <label for="house-2-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-4">
                                    <label for="house-2-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-5">
                                    <label for="house-2-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-6">
                                    <label for="house-2-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-2" id="house-2-7">
                                    <label for="house-2-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="house-3" id="house-3-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="house-4-1">
                                    <label for="house-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="house-4-2">
                                    <label for="house-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="house-4-3">
                                    <label for="house-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="house-4-4">
                                    <label for="house-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-mortgage">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <h3 class="calc-content__title">Какую недвижимость хотите приобрести?</h3>
                        <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/sectionCalculate-img-Brick-house.png" alt="Дом из кирпича" class="calc-content__img">
                                <input type="radio" name="house-of-brick-1" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Загородный дом</a>
                            </label>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Укажите примерную стоимость будущего жилья</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="mortgage-2" id="mortgage-2-1">
                                    <label for="mortgage-2-1">до 1 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="mortgage-2" id="mortgage-2-2">
                                    <label for="mortgage-2-2">1 - 1.5 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="mortgage-2" id="mortgage-2-3">
                                    <label for="mortgage-2-3">1.5 - 2 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="mortgage-2" id="mortgage-2-4">
                                    <label for="mortgage-2-4">2 - 2.5 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="mortgage-2" id="mortgage-2-5">
                                    <label for="mortgage-2-5">2.5 - 3 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="mortgage-2" id="mortgage-2-6">
                                    <label for="mortgage-2-6">свыше 3 млн. руб</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой первоначальный взнос готовы внести?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите сумму" name="mortgage-3" id="mortgage-3-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Укажите комфортный ежемесячный платеж</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите сумму" name=" mortgage-4" id="mortgage-4-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="mortgage-5" id="mortgage-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="mortgage-5" id="mortgage-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="mortgage-5" id="mortgage-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="mortgage-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="mortgage-5" id="mortgage-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="mortgage-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <h3 class="calc-content__title">Какая услуга Вас интересует?</h3>
                        <div class="calc-content__cards-wrapper calc-content__house-types">
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-1.png" alt="Проектирование дома" class="calc-content__img">
                                <input data-id="service-1" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Проектирование дома</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-2.png" alt="Земляные работы. Планировка участка" class="calc-content__img">
                                <input data-id="service-2" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Земляные работы. <br>Планировка участка</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-3.png" alt="Фундаментные работы" class="calc-content__img">
                                <input data-id="service-3" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Фундаментные работы</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-4.png" alt="Возведение и кладка стен" class="calc-content__img">
                                <input data-id="service-4" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Возведение и кладка стен</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-5.png" alt="Устройство межэтажных перекрытий" class="calc-content__img">
                                <input data-id="service-5" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Устройство межэтажных перекрытий</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-6.png" alt="Кровельные работы" class="calc-content__img">
                                <input data-id="service-6" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Кровельные работы</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-7.png" alt="Фасадные работы" class="calc-content__img">
                                <input data-id="service-7" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Фасадные работы</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-8.png" alt="Ремонт и отделка" class="calc-content__img">
                                <input data-id="service-8" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Ремонт и отделка</a>
                            </label>
                            <label class="calc-content__card aos-init aos-animate" data-aos="fade-left" data-aos-duration="800">
                                <img src="img/service-9.png" alt="Монтаж коммуникации" class="calc-content__img">
                                <input data-id="service-9" type="radio" name="service-main" class="calc-content__input-choice">
                                <a href="" class="calc-content__card-link">Монтаж коммуникации</a>
                            </label>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-check="hi" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-1">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Укажите примерную стоимость будущего жилья</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-1-1" id="services-1-1-1">
                                    <label for="services-1-1-1">до 1 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-1-1" id="services-1-1-2">
                                    <label for="services-1-1-2">1 - 1.5 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-1-1" id="services-1-1-3">
                                    <label for="services-1-1-3">1.5 - 2 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-1-1" id="services-1-1-4">
                                    <label for="services-1-1-4">2 - 2.5 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-1-1" id="services-1-1-5">
                                    <label for="services-1-1-5">2.5 - 3 млн. руб</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-1-1" id="services-1-1-6">
                                    <label for="services-1-1-6">свыше 3 млн. руб</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой первоначальный взнос готовы внести?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите сумму" name="services-1-2" id="services-1-2-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-2">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Что необходимо сделать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-1" id="services-2-1-1">
                                    <label for="services-2-1-1">Вырыть котлован</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-1" id="services-2-1-2">
                                    <label for="services-2-1-2">Вырыть траншею</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-1">
                                    <label for="services-2-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-2">
                                    <label for="services-2-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-3">
                                    <label for="services-2-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-4">
                                    <label for="services-2-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-5">
                                    <label for="services-2-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-6">
                                    <label for="services-2-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-2-2" id="services-2-7">
                                    <label for="services-2-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-2-3" id="services-2-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-2-4-1">
                                    <label for="services-2-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-2-4-2">
                                    <label for="services-2-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-2-4-3">
                                    <label for="services-2-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-2-4-4">
                                    <label for="services-2-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-3">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Выберите тип фундамента</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-1" id="services-3-1-1">
                                    <label for="services-3-1-1">Фундамент с ростверком</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-1" id="services-3-1-2">
                                    <label for="services-3-1-2">Монолитная плита</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-1" id="services-3-1-3">
                                    <label for="services-3-1-3">Цокольный этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-1" id="services-3-1-4">
                                    <label for="services-3-1-4">Ленточный фундамент</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-1">
                                    <label for="services-3-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-2">
                                    <label for="services-3-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-3">
                                    <label for="services-3-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-4">
                                    <label for="services-3-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-5">
                                    <label for="services-3-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-6">
                                    <label for="services-3-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-3-2" id="services-3-7">
                                    <label for="services-3-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-3-3" id="services-3-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-3-4-1">
                                    <label for="services-3-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-3-4-2">
                                    <label for="services-3-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-3-4-3">
                                    <label for="services-3-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-3-4-4">
                                    <label for="services-3-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-4">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Выберите вид внутренней отделки</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-1" id="services-4-1-1">
                                    <label for="services-4-1-1">Черновая отделка</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-1" id="services-4-1-2">
                                    <label for="services-4-1-2">Чистовая отделка</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-1">
                                    <label for="services-4-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-2">
                                    <label for="services-4-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-3">
                                    <label for="services-4-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-4">
                                    <label for="services-4-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-5">
                                    <label for="services-4-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-6">
                                    <label for="services-4-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-4-2" id="services-4-7">
                                    <label for="services-4-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-4-3" id="services-4-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-4-4-1">
                                    <label for="services-4-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-4-4-2">
                                    <label for="services-4-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-4-4-3">
                                    <label for="services-4-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-4-4-4">
                                    <label for="services-4-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-5">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-1" id="services-5-1-1">
                                    <label for="services-5-1-1">Сборное ЖБИ</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-1" id="services-5-1-2">
                                    <label for="services-5-1-2">Монолитное перекрытие</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-1" id="services-5-1-3">
                                    <label for="services-5-1-3">Деревянное перекрытие</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-1">
                                    <label for="services-5-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-2">
                                    <label for="services-5-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-3">
                                    <label for="services-5-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-4">
                                    <label for="services-5-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-5">
                                    <label for="services-5-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-6">
                                    <label for="services-5-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-5-2" id="services-5-7">
                                    <label for="services-5-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-5-3" id="services-5-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-5-4-1">
                                    <label for="services-5-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-5-4-2">
                                    <label for="services-5-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-5-4-3">
                                    <label for="services-5-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-5-4-4">
                                    <label for="services-5-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-6">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип кровли Вы хотите?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-1" id="services-6-1-1">
                                    <label for="services-6-1-1">Плоская</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-1" id="services-6-1-2">
                                    <label for="services-6-1-2">Односкатная</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-1" id="services-6-1-3">
                                    <label for="services-6-1-3">Двускатная</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-1" id="services-6-1-4">
                                    <label for="services-6-1-4">Многоскатная</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-1" id="services-6-1-5">
                                    <label for="services-6-1-5">Вальмовая</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-1" id="services-6-1-6">
                                    <label for="services-6-1-6">Водосточная система</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой материал кровли хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-2" id="services-6-2-1">
                                    <label for="services-6-2-1">Проф. настил</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-2" id="services-6-2-2">
                                    <label for="services-6-2-2">Металлочерепица</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-2" id="services-6-2-3">
                                    <label for="services-6-2-3">Фальцевая кровля</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-1">
                                    <label for="services-6-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-2">
                                    <label for="services-6-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-3">
                                    <label for="services-6-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-4">
                                    <label for="services-6-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-5">
                                    <label for="services-6-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-6">
                                    <label for="services-6-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-3" id="services-6-7">
                                    <label for="services-6-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-6-4" id="services-6-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-5" id="services-6-5-1">
                                    <label for="services-6-5-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-5" id="services-6-5-2">
                                    <label for="services-6-5-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-5" id="services-6-5-3">
                                    <label for="services-6-5-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-6-5" id="services-6-5-4">
                                    <label for="services-6-5-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="6">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-7">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой вид отделки вас интересует?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-1">
                                    <label for="services-7-1-1">Штукатурка фасада</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-2">
                                    <label for="services-7-1-2">Камень</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-3">
                                    <label for="services-7-1-3">Облицовочный кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-4">
                                    <label for="services-7-1-4">Керамогранит</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-5">
                                    <label for="services-7-1-5">Фасадная плитка</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-6">
                                    <label for="services-7-1-6">Сайдинг</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-7">
                                    <label for="services-7-1-7">Сэндвич-панели</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-1" id="services-7-1-8">
                                    <label for="services-7-1-8">Отделка короедом</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-1">
                                    <label for="services-7-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-2">
                                    <label for="services-7-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-3">
                                    <label for="services-7-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-4">
                                    <label for="services-7-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-5">
                                    <label for="services-7-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-6">
                                    <label for="services-7-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-7-2" id="services-7-7">
                                    <label for="services-7-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-7-3" id="services-7-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-7-4-1">
                                    <label for="services-7-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-7-4-2">
                                    <label for="services-7-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-7-4-3">
                                    <label for="services-7-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-7-4-4">
                                    <label for="services-7-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-8">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой материал стен Вашего строения?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-1">
                                    <label for="services-8-1-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-2">
                                    <label for="services-8-1-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-3">
                                    <label for="services-8-1-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-4">
                                    <label for="services-8-1-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-5">
                                    <label for="services-8-1-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-6">
                                    <label for="services-8-1-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-1" id="services-8-1-7">
                                    <label for="services-8-1-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-1">
                                    <label for="services-8-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-2">
                                    <label for="services-8-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-3">
                                    <label for="services-8-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-4">
                                    <label for="services-8-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-5">
                                    <label for="services-8-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-6">
                                    <label for="services-8-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-8-2" id="services-8-7">
                                    <label for="services-8-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-8-3" id="services-8-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-8-4-1">
                                    <label for="services-8-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-8-4-2">
                                    <label for="services-8-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-8-4-3">
                                    <label for="services-8-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-8-4-4">
                                    <label for="services-8-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-services calc-content-service-9">
                    <div class="calc-content__container-slide" data-slide-num="1">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Что необходимо сделать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-1" id="services-9-1-1">
                                    <label for="services-9-1-1">Электромонтажные работы</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-1" id="services-9-1-2">
                                    <label for="services-9-1-2">Газификаци дома</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-1" id="services-9-1-3">
                                    <label for="services-9-1-3">Отопление дома</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-1" id="services-9-1-4">
                                    <label for="services-9-1-4">Водоснабжение дома</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-1" id="services-9-1-5">
                                    <label for="services-9-1-5">Канализация дома</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" data-service="yeap" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="2">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какой тип материала Вы хотите использовать?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-1">
                                    <label for="services-9-1">Керамзитоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-2">
                                    <label for="services-9-2">Газоблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-3">
                                    <label for="services-9-3">Пеноблок</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-4">
                                    <label for="services-9-4">Кирпич</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-5">
                                    <label for="services-9-5">Бревно</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-6">
                                    <label for="services-9-6">Каркас</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="services-9-2" id="services-9-7">
                                    <label for="services-9-7">Брус</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="3">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Какая площадь строения планируется?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; justify-content: center">
                                <div class="wrap-input wrap-input-item wrap-input-item-text">
                                    <input type="text" placeholder="Введите ответ (кв.м.)" name="services-9-3" id="services-9-1">
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="4">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">количество этажей?</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center">
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-9-4-1">
                                    <label for="services-9-4-1">1 этаж</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-9-4-2">
                                    <label for="services-9-4-2">2 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-9-4-3">
                                    <label for="services-9-4-3">3 этажа</label>
                                </div>
                                <div class="wrap-input wrap-input-item">
                                    <input type="radio" name="house-4" id="services-9-4-4">
                                    <label for="services-9-4-4">1,5 этажа</label>
                                </div>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap">
                            <button type="button" class="calc-content-btn calc-content-btn-back">
                                <span class="arrow-2"></span> Назад
                            </button>
                            <button type="button" class="calc-content-btn calc-content-btn-next">Далее
                                <span class="arrow"></span>
                            </button>
                        </div>
                    </div>
                    <div class="calc-content__container-slide" data-slide-num="5">
                        <div class="calc-content-wrap">
                            <h3 class="calc-content__title">Спасибо за ответы! Мы свяжемся с вами в ближайшее время!</h3>
                            <div class="calc-content__cards-wrapper calc-content__house-types" style="display: flex; flex-wrap: wrap; justify-content: center;">
                                <div class="wrap-input" style="margin-right: 40px; margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Telegram" name="house-5" id="house-5-1">
                                    <img src="/img/telega.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-bottom: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="WhatsApp" name="house-5" id="house-5-2">
                                    <img src="/img/WhatsApp.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input" style="margin-right: 40px;">
                                    <input class="thanks-answer__input" type="text" placeholder="Телефон" name="house-5" id="house-5-3">
                                    <img src="/img/telephone.png" alt="" class="thanks-answer__img">
                                </div>
                                <div class="wrap-input">
                                    <input class="thanks-answer__input" type="text" placeholder="Viber" name="house-5" id="house-5-4">
                                    <img src="/img/Viber.png" alt="" class="thanks-answer__img">
                                </div>
                            </div>
                            <div class="wrap-input" style="margin: 50px auto 0 auto; width: 590px;">
                                <input type="radio" name="house-5" id="house-5-5">
                                <label class="thanks-answer__agreement" style="color: #000;" for="house-5-5"><span style="color: #047309">Согласен</span> на обработку персональных данных в соответствии с <a href="#" style="color: #047309; margin-left: 26px;">пользовательским соглашением</a></label>
                            </div>
                        </div>
                        <div class="calc-content-btn-wrap" style="justify-content: center; margin-bottom: 60px;">
                            <button type="button" class="thanks-answer__send">
                                Узнать стоимость
                            </button>
                        </div>
                    </div>
                </div>
                <div class="calc-content__wrapper calc-content-estimate">
                    Рассчитать смету на строительство дома
                </div>
            </div>
            <div class="calc-content-two">
                <div class="calc-content__wrapper calc-content-stock">
                    <div class="calc-stock">
                        <h4 class="calc-stock__title">Забор в подарок!</h4>
                        <div class="calc-stock-wrap">
                            <span class="calc-stock__line-top"></span>
                            <div class="calc-stock__left">
                                <p class="calc-stock__left-text">При заказе строительства дома или <br>коттеджа от 190 м2 в Уфе, в подарок <br> мы построим забор на вашем <br>участке! Ассортимент большой.</p>
                                <p class="calc-stock__left-text">Уточнить информацию о <br> выгодном предложении можно <br>по номеру: <a href="tel: +7 (4862) 22-05-63">+7 (4862) 22-05-63</a>.</p>
                            </div>
                            <span class="calc-stock__line-down"></span>
                            <img src="/img/calc-stock.png" alt="" class="calc-stock__right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more">
        <div class="container">
            <div class="more__wrapper">
                <div class="more-item-left">
                    <h2 class="section-title more-title">В чем преимущества жизни в частном доме?</h2>
                    <div class="more-desc">
                        <ol class="more-list">
                            <li class="more-text">Не нужно ездить "на природу" - природа рядом. А какая - зависит от выбранного места и ваших приоритетов.</li>
                            <li class="more-text">Независимые коммуникации. Хочешь - включил отопление посреди лета. Никаких отключений горячей воды, перекрытий ее на время ремонта у соседей.</li>
                            <li class="more-text">Большая жилплощадь. В собственном доме вы вольны распоряжаться пространством как душе угодно: можно сделать рабочий кабинет, комнату для гостей, два санузла. К тому же у вас всегда будет возможность расширить жилую площадь.</li>
                        </ol>
                    </div>
                </div>
                <div class="more-item-right">
                    <img src="img/section-more-img.png" alt="" class="more-img">
                </div>
            </div>
        </div>
    </section>
    <?php
    include('blocks/reviews.php');
    ?>
    <?php
    include('blocks/footer.php');
    ?>
    <?php
    include('blocks/popups.php');
    ?>
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="libs/jquery.validate/jquery.validate.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/usset-swiper.js"></script>
    <script src="js/calculation.js"></script>
    <script>
        doc.querySelector('.reviews-form__submit').addEventListener("click", () => {

            let mark = "Оценка"
            let report = "Мой отзыв"
            let name = "Владимир"
            let email = "email@mail.ru"

            ajaxPost("/send.php", `feedbackform=true&mark=${mark}&report=${report}&name=${name}&email=${email}`, (result) => {
                result = JSON.parse(result)
                if (result['success']) {
                    alert("Отзыв отправлен!")
                } else {
                    alert("Произошла ошибка при отправке отзыва!")
                    alert(result['textError'])
                }
            })
        })

        doc.querySelectorAll(".calc-content-btn-next").forEach(btn => {
            btn.addEventListener("click", (e) => {
                if (!e.target.hasAttribute("data-check")) {
                    e.target.parentElement.parentElement.parentElement.style.transform = `translateX(-${+e.target.parentElement.parentElement.getAttribute("data-slide-num") * 100}%)`
                } else {
                    var element = document.querySelectorAll('input[type=radio][name=service-main]').forEach(item => {
                        if (!item.checked) return
                        close_all_tab("calc-content")
                        console.log(item.getAttribute("data-id"))
                        choose_tab(`${item.getAttribute("data-id")}`)
                    });
                }
            })
        });

        doc.querySelectorAll(".calc-content-btn-back").forEach(btn => {
            btn.addEventListener("click", (e) => {
                if (e.target.hasAttribute("data-service")) {
                    close_all_tab("calc-content")
                    choose_tab('services')
                } else {
                    e.target.parentElement.parentElement.parentElement.style.transform = `translateX(-${(+e.target.parentElement.parentElement.getAttribute("data-slide-num") - 2) * 100}%)`
                }

            })
        });

        function close_all_input(className) {
            Array.from(doc.querySelector(`.${className}`).children).forEach(item => {
                item.classList.remove("calc-tabs__item--active")
            })
        }

        function close_all_tab(className) {
            Array.from(doc.querySelector(`.${className}`).children).forEach(item => {
                item.classList.remove("calc-content--active")
            })
            doc.querySelector(`.calc-content-stock`).classList.remove("calc-content--active")
            doc.querySelector(`.calc-content`).style.display = "none"
            doc.querySelector(`.calc-content-two`).style.display = "none"
        }

        function choose_input(elem) {
            elem.target.classList.add("calc-tabs__item--active")
        }

        function choose_tab(calc) {
            if (calc == "stock") {
                doc.querySelector(".calc-content-two").style.display = "flex"
            } else {
                console.log(`.calc-content-${calc}`)
                doc.querySelector(`.calc-content-${calc}`).classList.add("calc-content--active")
                doc.querySelector(`.calc-content`).style.display = "flex"
            }
        }

        doc.querySelectorAll(".calc-tabs__item").forEach(item => {
            item.addEventListener("click", (e) => {
                close_all_tab("calc-content")
                close_all_input("calc-tabs")
                choose_input(e)
                let calc = e.target.getAttribute("data-calc")
                choose_tab(calc)
            })
        })

        function ajaxPost(url, parameters, callback) {
            // parameters = encodeURIComponent(parameters)
            if (parameters === false || parameters === null || parameters === undefined) {
                parameters = "";
            }
            var request = new XMLHttpRequest();
            request.open('POST', url, true);
            request.addEventListener('readystatechange', function() {
                if ((request.readyState == 4) && (request.status == 200)) {
                    callback(request.responseText)
                } else {
                    if (request.readyState == 0) {
                        // Request not initialized
                        console.log('Request not initialized')
                    }
                    if (request.status == 403) {
                        // Forbidden
                        console.log('Forbidden')
                    }
                    if (request.status == 404) {
                        // Not Found
                        console.log('Not Found')
                    }
                }
            });
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
            request.send(parameters);
        }
    </script>
</body>

</html>