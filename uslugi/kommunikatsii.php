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
                    <h2 class="section-title white-color">Коммуникации</h2>
                </div>
                <div class="swiper info-services-swiper">
                    <div class="swiper-wrapper info-services-content">                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/elektromontazhnyye-raboty.png" alt="Электромонтажные работы" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Электромонтажные работы – это виды работ, которые направлены на подключение потребителей к электросети, обеспечение стабильной подачи электроэнергии с соблюдением проектных параметров.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Они выполняются при строительстве новых зданий и сооружений, проведении реконструкции, ремонта зданий. В результате их выполнения электроприборы, оборудование, установленные в здании, должны получать электричество с требуемыми значениями напряжения, силы тока, мощности, рабочей частоты.
                                </p>
                            </div>
                        </div>                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/podklyucheniye-gaza.png" alt="Подключение газа" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Подключение газа к частному дому – залог комфорта и уюта. Без качественного отопления частный дом обогреть в зимнее время довольно проблематично, а газовый котел по праву считается одним из наиболее надежных и экономичных решений.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Даже если газификация дома обойдется в кругленькую сумму, на этом не стоит экономить, так как в большинстве случаев выгода, по сравнению с альтернативными источниками тепла очевидна даже при поверхностных расчетах.
                                </p>
                            </div>
                        </div>                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/avtonomnyye-sistemy-otopleniya.png" alt="Автономные системы отопления" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Автономные системы отопления в частных домах выполняют одну из главных функций при их обустройстве. От правильного распределения тепла в помещениях зависит не только комфорт проживания.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Отопление несет еще и конструктивную нагрузку: предотвращает возникновение и распространение сырости, грибка и плесени. Монтаж отопления производят несколькими способами: одно или двухтрубным, с батареями (чугунными, стальными, биметаллическими).
                                </p>
                            </div>
                        </div>                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/sistema-vodootvedeniya.png" alt="Система водоотведения" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Система водоотведения является такой же частью цивилизованного существования, как электроснабжение, вентиляция, отопление. К такой важной составляющей коммуникаций предъявляются требования экологичности и эффективности.
                                </p>
                                <p class="info-services-card__text card-text">
                                    Система водоотведения частного дома должна быть простой в обустройстве и удобной в эксплуатации.Схема канализации в частном доме  должна содержать ключевые элементы системы – стояк , разметку труб, точки стока воды.
                                </p>
                            </div>
                        </div>                
                        <div class="swiper-slide info-services-card">
                            <img src="../img/raznovidnosti-vodosnabzheniya.png" alt="Разновидности водоснабжения" class="info-services-card__img">
                            <div class="info-services-card__desc">
                                <p class="info-services-card__text card-text">
                                    Водоснабжение в частном доме разделяют на две основные разновидности:
                                </p>
                                <br>
                                <p class="info-services-card__text card-text">
                                    1. Автономное. Подача воды осуществляется из собственной скважины.
                                </p>
                                <br>
                                <p class="info-services-card__text card-text">
                                    2. Централизованное. Вода подается из водопроводной магистрали, которая в свою очередь запитана из водонапорной башни или насосной станции.
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