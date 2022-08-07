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
        <div class="container">
            <div class="info-services-wrapper">
                <div class="section-title__wrapper">
                    <h2 class="section-title white-color">Дополнительные работы</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/postroyka-bani.png" alt="Постройка бани" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Одной из полнительных услуг нашей компании явлется строительство бань. Полноценные бани, бани-пристройки, встроенные бани - создают наши специалисты.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Баня служит местом не только для регулярного мытья, но и для оздоровительных процедур — целебный пар очищает поры, улучшает кровообращение и придает жизненные силы.
                                </p>
                            </div>
                        </div>                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/postroyka-zabora.png" alt="Постройка забора" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    У забора всего два типа функций. Это защитная функция и эстетическая. К защитной функции относятся следующее: защита участка от проникновения сторонних лиц, защита растения и газон от чужих животных, которые могут им навредить, защита всех жителей дома от сторонних людей с улицы, защита от ветра, пыли и стороннего шума.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Эстетическая функция вполне понятна. Забор должен гармонично сочетаться со стилем постройки.
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