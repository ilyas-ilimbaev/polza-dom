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
                    <h2 class="section-title white-color">земляные работы</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">
                        <div class="swiper-slide info-services-card">
                            <img src="../img/vid-kotlovana.png" alt="виды котлована" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Перед началом работ нужно четко определиться, какой вид котлована вам нужно выкопать, это зависит от типа фундамента. Перед выкапыванием котлована необходимо рассчитать его длину и ширину.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Разумеется, они зависят от параметров самого здания (его длины и ширины), а также от глубины залегания подошвы конструкции. Нельзя проводить работы такого рода весной. В это время года начинаются процессы оттаивания земли, вследствие чего происходит выделение большого количества воды.
                                </p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/transheya.png" alt="траншея" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                   Без траншей не обходятся при строительстве фундамента, прокладке трубопровода. Вопрос выбора формы траншеи зависит от её глубины, типа грунта, уровня грунтовых вод.
                                   В тёплое время года рекомендуется проводить работы с обычными разновидностями грунта.
                                </p>
                                <p class="info-services-card__text card-text">
                                    В ходе работ больше всего внимания уделяют влажности грунта. Объём материала при обратной засыпке всегда меньше по сравнению с первоначальным.
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