<?php

include('config.php');

include('class/db.php');

$base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS);

$limit = 10;

$result = $base->query("SELECT `name-tag`,`name-tag-ru`,`img` FROM `house_list` WHERE 1 LIMIT $limit");

$show_items = "";
foreach ($result as &$dom) {
    $show_items .= "<div class=\"list-project__project-card\">
                        <a href=\"projects.php?tag=" . $dom['name-tag'] . "\" class=\"project-card__img-link-project\">
                            <img src=\"" . $dom['img'] . "\" alt=\"" . $dom['name-tag-ru'] . "\" class=\"project-card__img\">
                            <div class=\"project-card__hover-project-name\">" . $dom['name-tag-ru'] . "</div>
                        </a>
                    </div>";
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строительство домов под ключ от строительной компании Польза-Дом</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        include ('blocks/header.php');
    ?>
    <section class="catalog">
        <div class="container">
            <div class="catalog__wrapper">
                <h2 class="section-title catalog-title">Каталог</h2>
                <div class="catalog-content">
                    <div class="catalog-content__filter-group">
                        <div class="filter-group filter-group__cost-filter">
                            <div class="filter-group__title">Стоимость</div>
                            <div class="filter-group__range-line-container">
                                <div class="filter-group__range-line">
                                    <div class="range-line__slide-rail"></div>
                                    <div class="range-line__min"></div>
                                    <div class="range-line__max"></div>
                                </div>
                            </div>
                            <div class="filter-group__form cost-range">
                                <input type="text" value="" placeholder="от 1 114 000" class="filter-group__min-range filter-group__form-field">
                                <input type="text" value="" placeholder="до 9 570 380" class="filter-group__max-range filter-group__form-field">
                            </div>
                        </div>
                        <div class="filter-group filter-group__area-filter">
                            <div class="filter-group__title">Общая площадь</div>
                            <div class="filter-group__range-line-container">
                                <div class="filter-group__range-line">
                                    <div class="range-line__slide-rail"></div>
                                    <div class="range-line__min"></div>
                                    <div class="range-line__max"></div>
                                </div>
                            </div>
                            <div class="filter-group__form area-range">
                                <input type="text" value="" placeholder="от 68" class="filter-group__min-range filter-group__form-field">
                                <input type="text" value="" placeholder="до 290" class="filter-group__max-range filter-group__form-field">
                            </div>
                        </div>
                        <div class="filter-group filter-group__count-floors-filter">
                            <div class="filter-group__title">Количество этажей</div>
                            <div class="filter-group__form count-floors-range">
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-floors" class="filter-group__real-radio" />

                                    <div class="filter-group__label-text">1 (<span class="filter-group__numberOffers">17</span>)</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-floors" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">2 (<span class="filter-group__numberOffers">35</span>)</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-floors" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">3 (<span class="filter-group__numberOffers">8</span>)</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-floors" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">1,5 (<span class="filter-group__numberOffers">1</span>)</div>
                                </label>
                            </div>
                        </div>
                        <div class="filter-group filter-group__count-bedrooms">
                            <div class="filter-group__title">Количество спален</div>
                            <div class="filter-group__form count-bedrooms-range">
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-bedrooms" class="filter-group__real-radio" />

                                    <div class="filter-group__label-text">1 (<span class="filter-group__count-bedrooms">17</span>)</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-bedrooms" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">2 (<span class="filter-group__count-bedrooms">35</span>)</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-bedrooms" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">3 (<span class="filter-group__count-bedrooms">8</span>)</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="count-bedrooms" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">4 (<span class="filter-group__count-bedrooms">1</span>)</div>
                                </label>
                            </div>
                        </div>
                        <div class="filter-group filter-group__materials">
                            <div class="filter-group__title">Материалы</div>
                            <div class="filter-group__form materials-range">
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="materials" class="filter-group__real-radio" />

                                    <div class="filter-group__label-text">Кирпич</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="materials" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">Пеноблок</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="materials" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">Бревно</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="radio" name="materials" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">Газоблок</div>
                                </label>
                            </div>
                        </div>
                        <div class="filter-group filter-group__more">
                            <div class="filter-group__title">Дополнительно</div>
                            <div class="filter-group__form more-range">
                                <label for="" class="filter-group__form-label">
                                    <input type="checkbox" name="more" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">Гараж</div>
                                </label>
                                <label for="" class="filter-group__form-label">
                                    <input type="checkbox" name="more" class="filter-group__real-radio" />
                                    <div class="filter-group__label-text">Баня</div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="catalog-content__list-project">
                        <?php echo $show_items; ?>
                        <a href="#" class="card__more-link" data-count="<?php echo $limit; ?>">Смотреть больше</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="newsletter__wrapper">
                <h3 class="newsletter-title">
                    Закажите полный
                    <span class="green-text">расчет своего дома!</span>
                </h3>
                <p class="newsletter-text">Просто оставьте номер телефона, и мы свяжемся с Вами в ближайшее время</p>
                <form action="" class="newsletter-form">
                    <div class="newsletter-form__item">
                        <input type="tel" required="" name="number" maxlength="12" placeholder="Введите номер телефона" class="newsletter-form__input">
                        <button class="newsletter-form__submit">ОТПРАВИТЬ</button>
                    </div>
                    <p class="newsletter-form__text">Нажимая кнопку “Отправить заявку” вы принимаете условия обработки данных</p>
                </form>
            </div>
        </div>
    </section>
    <?php
        include ('blocks/footer.php');
    ?>
    <?php
        include ('blocks/popups.php');
    ?>    
    <!-- <div class="btn-help-questions">
        <a class="btn-calc">Рассчитать стоимость</a>
        <div class="btn-question-icon">
            <img src="img/btn-question-icon.png" alt="Рассчитать стоимость" srcset="">
        </div>
    </div> -->
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="libs/jquery.validate/jquery.validate.js"></script>
    <script src="js/main.js"></script>
    <script src="js/range.js"></script>
</body>

</html>