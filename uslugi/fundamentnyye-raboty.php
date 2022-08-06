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
        <div class="container detailed-container">
            <div class="info-services-wrapper">
                <div class="info-services__title-wrapper">
                    <h2 class="section-title">фундаментные работы</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">
                        <div class="swiper-slide info-services-card">
                            <img src="../img/svainia-funadament.png" alt="" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Для свайного фундамента с ростверком потребуется меньше вложений, поэтому, если позволяют условия, выгодней использовать именно его.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Такой фундамент представляет собой конструкцию из свай, заглубленных в грунт ниже глубины промерзания почвы, и соединенных вверху при помощи металлической или бетонной ленты (ростверка).</p>
                                <p class="info-services-card__text card-text">
                                    Конструкция, возведенная по всем правилам, отличается надежностью и имеет длительный срок службы – несколько десятков лет.</p>
                            </div>
                        </div>                 
                        <div class="swiper-slide info-services-card">
                            <img src="../img/lentochnii-fundament.png" alt="Кровельный профнастил" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    При сооружении дома или других построек чаще всего отдают предпочтение ленточному фундаменту, так как такое основание обладает многими преимуществами.</p>
                                <p class="info-services-card__text card-text">
                                    Ленточный фундамент для дома достаточно прост в устройстве и при большой необходимости его можно залить без привлечения строительной техники.</p>
                                <p class="info-services-card__text card-text">
                                    Такой фундамент является универсальной конструкцией и применяется при строительстве легких деревянных и тяжелых каменных построек на различного типа грунтах.
                                </p>
                            </div>
                        </div>                  
                        <div class="swiper-slide info-services-card">
                            <img src="../img/fundament-plita.png" alt="" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Фундамент-плита считается наиболее прочным и надежным. В качестве еще одного достоинства указывают относительно небольшой объем земляных работ, но это общая черта всех фундаментов с неглубоким залеганием в грунте.</p>
                                <p class="info-services-card__text card-text">
                                    В качестве одного из достоинств часто приводят аргумент, что монолитную плиту можно сделать своими руками.
                                </p>
                            </div>
                        </div>                  
                        <div class="swiper-slide info-services-card">
                            <img src="../img/tsokolnyy-etazh.png" alt="" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Конструкция цокольного этажа фактически является фундаментом для всего дома. Нагрузка передается через стены на грунтовое основание.</p>
                                <p class="info-services-card__text card-text">
                                    Перед началом строительства проводят инженерные изыскания - определяют тип почвы, ее несущую способность, глубину залегания подземных вод.
                                </p>
                                <p class="info-services__text card-text">
                                    Строительство подвала под домом приравнивается по трудоемкости и стоимости к возведению фундамента с надземным этажом. Он может располагаться под всем сооружением или его частью.
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
</body>
</html>