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
    <section class="detailed-info-services black-color">
        <div class="container detailed-container">
            <div class="info-services-wrapper">
                <div class="section-title__wrapper">
                    <h2 class="section-title white-color">КРОВЕЛЬНЫЕ РАБОТЫ</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">
                        <div class="swiper-slide info-services-card">
                            <img src="../img/metallocherepitsa.png" alt="Кровля из металлочерепицы" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Кровля из металлочерепицы считается одним из оптимальных способов сооружения крыши здания – как в плане стоимости, так и с точки зрения надежности.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Достоинством является относительно простой процесс монтажа стальных листов, что обеспечивается большим выбором размеров изделий и их небольшим весом.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Хорошая жесткость и прочность – материал выдерживает довольно большие нагрузки за счет волнистого профиля, стойкость к коррозии.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/profnastil.png" alt="Кровельный профнастил" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Кровельный профнастил уже много лет занимает лидирующие позиции на рынке стройматериалов.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Уникальные свойства и практичность позволяют его использовать в самых разных условиях, а цена радует своей  доступностью.
                                    Благодаря большому запасу прочности, такое кровельное покрытие способно выдержать достаточно сильное деформирующее воздействие.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Этот профлист настолько прочный, что его в некоторых условиях даже используют как несущий.
                                </p>
                            </div>
                        </div>                  
                        <div class="swiper-slide info-services-card">
                            <img src="../img/faltsevaya-krovlya.png" alt="Фальцевая кровля" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Фальцевая кровля считается одним из самых надежных способов укрытия крыши. Свое название она получила благодаря особому методу соединения металлических листов – фальцеванию.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Шов, который получается в результате закатывания краев стали, называется фальцем.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Он обеспечивает абсолютно герметичное соединение, а технологи монтажа материала предполагает скрытое крепление к обрешетке кляммерами. Стойкость к любым погодным условиям.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev info-services-button-prev"></div>
                <div class="swiper-button-next info-services-button-next"></div>
                
                  <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
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
    <script src="../libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="../libs/jquery.validate/jquery.validate.js"></script>
    <script src="../js/main.js"></script>
    <script src="/js/usset-swiper.js"></script>
    <script src="/js/popup.js"></script>
</body>
</html>