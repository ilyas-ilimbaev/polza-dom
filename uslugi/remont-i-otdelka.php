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
                    <h2 class="section-title white-color">ремонт и отделка</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">
                        <div class="swiper-slide info-services-card">
                            <img src="../img/chistovaya-otdelka.png" alt="Чистовая отделка" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Чистовая отделка предусматривает:
                                    полное покрытие стен, готовый пол, ровный потолок, установку входных и межкомнатных дверей, подключение сантехники (ванна, раковины, унитаз), газовой или электрической плиты. Главное преимущество — отсутствие необходимости делать ремонт.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Квартира уже готова, оставшиеся мелочи дизайна можно добавить в любые сроки и они не отразятся на качестве жизни. Все коммуникации работают, владельцу нужно только привезти мебель и личные вещи.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/chernovaya-otdelka.png" alt="Черновая отделка" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                   Черновая отделка в сданном доме включает в себя:
                                   монтаж входных дверей, установку батарей, подключение кабелей телефонной связи и ТВ, минимальную обработку стен и потолка без финишной отделки, монтаж окон, электропроводку, водоснабжение вентиляционные системы, стяжку пола, гидроизоляционное покрытие санузлов. 
                                </p>
                                <p class="info-services-card__text card-text">
                                    Черновая отделка дома снижает его стоимость, а также позволяет спланировать наполнение жилья под ваши индивидуальные запросы.
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
    <script src="/libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="/libs/jquery.validate/jquery.validate.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/usset-swiper.js"></script>
    <script src="/js/popup.js"></script>
</body>
</html>