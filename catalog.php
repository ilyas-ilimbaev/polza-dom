<?php

include('config.php');

include('class/db.php');

$base = new DataBase(BASE_NAME, BASE_USER, BASE_PASS);

$limit = 1;

$result = $base->query("SELECT `name-tag`,`name-tag-ru`,`img` FROM `house_list` WHERE 1 LIMIT $limit");

$show_items = "";
foreach ($result as &$dom) {
    $show_items .= "<div class=\"list-project__project-card\">
                        <a href=\"projects?tag=" . $dom['name-tag'] . "\" class=\"project-card__img-link-project\">
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
                        <button class="show-all-bitch">Показать</button>
                    </div>
                    <div class="catalog-content__list-project" style="display: flex; flex-direction: column;">
                        <div class="warp-dop" style="display: flex; flex-wrap: wrap;">
                            <?php echo $show_items; ?>
                        </div>
                        <a href="#" class="card__more-link" data-count="<?php echo $limit; ?>" data-limit="<?php echo $limit; ?>" data-filters="not">Смотреть больше</a>
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
    <script src="js/popup.js"></script>
    <script>
        function get_filters() {
            return {
                "min_cost": "1100000",
                "max_cost": "9100000",
                "min_square": "68",
                "max_square": "290",
                "quantity-storey": "-",
                "quantity-bedroom": "-",
                "materials": "brick",
                "garage": "1",
                "bathhouse": "-"
            }
        }

        document.querySelector(".show-all-bitch").addEventListener("click", () => {
            const limit = +document.querySelector(".card__more-link").getAttribute("data-limit")
            document.querySelector(".card__more-link").setAttribute("data-count", limit)
            document.querySelector(".card__more-link").style.display = "block"
            const filters = get_filters()

            document.querySelector(".warp-dop").innerHTML = "Загрузка";

            ajaxPost("query/show_catalog_filters.php", `limit=${limit}&filters=${JSON.stringify(filters)}`, (result) => {
                result = JSON.parse(result)
                if (result.success) {
                    result = result.house_list
                    console.log(result, limit + 1)
                    if (result.length == limit + 1) {
                        document.querySelector(".card__more-link").setAttribute("data-count", limit)
                        document.querySelector(".card__more-link").setAttribute("data-filters", "yes")
                        length_list = result.length - 1
                    } else {
                        document.querySelector(".card__more-link").style.display = "none"
                        length_list = result.length
                    }

                    let list = "";
                    for (let i = 0; i < length_list; i++) {
                        let element = result[i];
                        list += `<div class="list-project__project-card"><a href="projects?tag=${element['name-tag']}" class="project-card__img-link-project"><img src="${element['img']}" alt="${element['name-tag-ru']}" class="project-card__img"><div class="project-card__hover-project-name">${element['name-tag-ru']}</div></a></div>`;
                    }
                    document.querySelector(".warp-dop").innerHTML = list
                } else {
                    alert("Произошла ошибка")
                }
            })
        })

        document.querySelector(".card__more-link").addEventListener("click", (e) => {
            e.preventDefault()
            const limit = +e.target.getAttribute("data-limit")
            const count = +e.target.getAttribute("data-count")
            const filters = e.target.getAttribute("data-filters")
            if (filters == "not")
                ajaxPost("query/show_catalog.php", `count=${count}&limit=${limit}`, (result) => {
                    result = JSON.parse(result)
                    if (result.success) {
                        result = result.house_list
                        if (result.length == limit + 1) {
                            e.target.setAttribute("data-count", count + limit)
                            length_list = result.length - 1
                        } else {
                            e.target.style.display = "none"
                            length_list = result.length
                        }
                        let list = "";
                        for (let i = 0; i < length_list; i++) {
                            let element = result[i];
                            list += `<div class="list-project__project-card"><a href="projects?tag=${element['name-tag']}" class="project-card__img-link-project"><img src="${element['img']}" alt="${element['name-tag-ru']}" class="project-card__img"><div class="project-card__hover-project-name">${element['name-tag-ru']}</div></a></div>`;
                        }
                        document.querySelector(".warp-dop").innerHTML += list
                    } else {
                        alert("Произошла ошибка")
                    }
                })
            else
                ajaxPost("query/show_catalog.php", `count=${count}&limit=${limit}&filters=${JSON.stringify(get_filters())}`, (result) => {
                    console.log(result)
                    result = JSON.parse(result)
                    console.log(result)
                    if (result.success) {
                        result = result.house_list
                        if (result.length == limit + 1) {
                            e.target.setAttribute("data-count", count + limit)
                            length_list = result.length - 1
                        } else {
                            e.target.style.display = "none"
                            length_list = result.length
                        }
                        let list = "";
                        for (let i = 0; i < length_list; i++) {
                            let element = result[i];
                            list += `<div class="list-project__project-card"><a href="projects?tag=${element['name-tag']}" class="project-card__img-link-project"><img src="${element['img']}" alt="${element['name-tag-ru']}" class="project-card__img"><div class="project-card__hover-project-name">${element['name-tag-ru']}</div></a></div>`;
                        }
                        document.querySelector(".warp-dop").innerHTML += list
                    } else {
                        alert("Произошла ошибка")
                    }
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