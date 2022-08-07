<!DOCTYPE html>
<html lang="ru">
    <?php
        $link = '
            <link rel="stylesheet" href="css/services.css">
        ';
        include('blocks/head.php');
    ?>
<body>
    <?php
        include ('blocks/header.php');
    ?>
    <section class="services">
        <div class="container">
            <div class="services__wrapper">
                <h2 class="section-title services-title">Услуги</h2>
                <div class="services-content">
                    <div class="services-card-wrapper">
                        <div class="services-card">
                            <img src="img/home-design.png" alt="проектирование дома" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">проектирование дома</h3>
                                <a href="uslugi/proektirovanie.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                      
                        <div class="services-card">
                            <img src="img/earthworks.png" alt="Земляные работы" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">Земляные работы</h3>
                                <a href="uslugi/zemlyanyye-raboty.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                     
                        <div class="services-card">
                            <img src="img/foundation-works.png" alt="Фундаментные работы" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">Фундаментные работы</h3>
                                <a href="uslugi/fundamentnyye-raboty.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                          
                        <div class="services-card">
                            <img src="img/construction-and-masonry-walls.png" alt="Возведение и кладка стен" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">Возведение и кладка стен</h3>
                                <a href="uslugi/vozvedeniye-i-kladka-sten.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                           
                        <div class="services-card">
                            <img src="img/interfloor-installation.png" alt="Устройство межэтажных перекрытий" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">Устройство межэтажных перекрытий</h3>
                                <a href="uslugi/ustroystvo-mezh-etazhnykh-perekrytiy.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                         
                        <div class="services-card">
                            <img src="img/roofing-work.png" alt="кровельные работы" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">кровельные работы</h3>
                                <a href="uslugi/krovelnyye-raboty.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                           
                        <div class="services-card">
                            <img src="img/facade-works.png" alt="фасадные работы" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">фасадные работы</h3>
                                <a href="uslugi/fasadnyye-raboty.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                           
                        <div class="services-card">
                            <img src="img/refurbishment-and-finishing.png" alt="ремонт и отделка" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">ремонт и отделка</h3>
                                <a href="uslugi/remont-i-otdelka.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                     
                        <div class="services-card">
                            <img src="img/communications.png" alt="коммуникации" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">коммуникации</h3>
                                <a href="uslugi/kommunikatsii.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>                                   
                        <div class="services-card">
                            <img src="img/additional-works.png" alt="дополнительные работы" class="services-card__img">
                            <div class="services-card__desc">
                                <h3 class="services-card__title">дополнительные работы</h3>
                                <a href="uslugi/dopolnitelnyye-raboty.php" class="services-card__link-more">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="newsletter">
        <div class="container">
            <div class="newsletter__wrapper">
                <h3 class="newsletter-title">
                    Закажите полный
                    <span class="green-text">расчет СТОИМОСТИ УСЛУГ</span>
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
    </section> -->
    
    <?php
        include ('blocks/newsletter.php');
    ?>
    <?php
        include ('blocks/popups.php');
    ?>  
    <?php
        include ('blocks/footer.php');
    ?>
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="libs/jquery.validate/jquery.validate.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popup.js"></script>
</body>
</html>