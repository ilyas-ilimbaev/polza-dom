<!DOCTYPE html>
<html lang="ru">
    <?php
        $link = '
            <link rel="stylesheet" href="/css/swiper-bundle/swiper-bundle.min.css" />
            <link rel="stylesheet" href="/css/detailed-info-services.css">
            <link rel="stylesheet" href="/css/swiper.css">
        ';
        include('../blocks/head.php');
    ?>
<body>
    <?php
        include ('../blocks/header.php');
    ?>
    <section class="detailed-info-services">
        <div class="container">
            <div class="info-services-wrapper">
                <h2 class="section-title">Фасадные работы</h2>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">
                        <div class="swiper-slide info-services-card">
                            <img src="../img/vidy-shtukaturki.png" alt="Виды штукатурки" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Использование штукатурки для наружных работ — один из самых простых вариантов быстрого преображения зданий. Правильный выбор вида фасадной штукатурки позволит достичь идеально выровнять поверхности, сделать безукоризненными углы, значительно повысить звукоизоляционные характеристики здания.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Существует несколько видов штукатурок: акриловая, минеральная, силикатная. Преимущества штукатурных смесей — возможность отделки практически любых стеновых материалов.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/oblitsovochnyy-kirpich.png" alt="Облицовочный  кирпич" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                   Одним из основных и самых распространённых строительных материалов является кирпич. Особенно он востребован при проведении облицовки зданий.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Особенно он востребован при проведении облицовки зданий.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Зачастую производится фасадный кирпич, как декоративный, т.е. пустотелый в средине и идеально гладкий или с имитацией скола либо природного камня с лицевой стороны. Строгое соответствие размерам является отличительной чертой облицовочного  кирпича. Это приводит к визуальной аккуратности и красоте кладки.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/keramogranit–otdelochnyy-material.png" alt="Керамогранит – отделочный материал" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                   Керамогранит – отделочный материал, который используют для облицовки фасадов и внутренних помещений домов. Имитируя натуральный камень, он является роскошным элементом дизайна, а устойчивость к внешним воздействиям делает его надёжной защитой для стен.
                                </p>
                                <p class="info-services-card__text card-text">
                                     Помимо этого данный материал отличается своей долговечностью, удобством в замене, при повреждении одной плитки не придетс менять всю облицовку, а также он обладает грязяотталкивающими свойствами.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/sayding.png" alt="Сайдинг" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Долговечность, доступность, декоративные свойства, простота монтажа и ухода. Таким условиям отвечает отделка дома сайдингом.
                                </p>
                                <p class="info-services-card__text card-text">
                                    На данный момент существует огромный выбор сайдинга: металлический, деревянный, фиброцементный, виниловый, каждый из которых отличается своим преимуществом.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/kamennaya-oblitsovka.png" alt="Каменная облицовка" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Каменная облицовка фасадов зданий выигрывает в сравнении с любыми другими материалами в плане прочности и долговечности. Это главный аргумент независимо от происхождения материала: добыт он в карьере или создан руками человека.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Камень отличается своей практичностью, экологической безопасностью, сроком эксплутации ( из каменных блоков неограничен). Помимо этого дом будет иметь свой индивидуальный, неповторимый внешний вид.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev info-services-button-prev"></div>
                <div class="swiper-button-next info-services-button-next"></div>
            </div>
        </div>
    </section>
    <?php
        include ('../blocks/help-question.php');
    ?>       
    <?php
        include ('../blocks/footer.php');
    ?>
    <?php
        include ('../blocks/popups.php');
    ?>
    <script src="/libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="/libs/jquery.validate/jquery.validate.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/usset-swiper.js"></script>
    <script src="/js/popup.js"></script>
</body>
</html>