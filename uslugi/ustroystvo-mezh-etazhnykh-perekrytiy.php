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
                <div class="info-services__title-wrapper">
                    <h2 class="section-title white-color">Устройство межэтажных перекрытий</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">
                        <div class="swiper-slide info-services-card">
                            <img src="../img/sbornyy-zhelezobeton.png" alt="сборный железобетон" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Детали из сборного железобетона обладают высокими качественными характеристиками, продолжительным сроком службы и не нуждаются в специальном уходе в период эксплуатации.
                                </p>
                                <p class="info-services-card__text card-text">
                                    При работе со сборным железобетоном уменьшается время на строительство и трудоемкость. Использование таких элементов исключает необходимость в возведении новой опалубки, а значит, экономит расходы на приобретение леса и упрощает строительство в зимнее время года.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/gazobeton.png" alt="монолитные плиты" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Преимуществом использовния монолитных плит является отсутствие стыков и швов.
                                    Цельная конструкция – это невозможность смещения плит относительно друг друга с образованием трещин вдоль стыков и риском протечек, нарушения тепло- и звукоизоляции.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Равномерное распределение нагрузок. Высокая прочность и долговечность. В монолитной плите нет пустот и стыковочных зон, поэтому она при равной толщине со сборными конструкциями выдерживает большие нагрузки.
                                </p>
                            </div>
                        </div>                  
                        <div class="swiper-slide info-services-card">
                            <img src="../img/perekrytiya-po-balkam.png" alt="перекрытия по балкам" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Минимальная стоимость. Нагрузка на стены в 2-3 раза меньше, чем от панелей. Это позволяет существенно снизить расход арматуры и бетона при устройстве фундамента.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Низкая трудоемкость и высокая скорость работ (по сравнению с заливкой монолитного ж/б перекрытия). Экологичность (в бетоне используется гранитный гравий, радиационный фон которого может существенно превышать норму). Все это является достоинствами использования перекрытия по балкам
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