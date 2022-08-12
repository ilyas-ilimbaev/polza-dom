<!DOCTYPE html>
<html lang="ru">
    <?php
        $link = '<link rel="stylesheet" href="css/stages-work.css">';
        $script = '<script src="https://code.jquery.com/jquery-3.6.0.js"></script>';
        $script = '<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>';
        include('blocks/head.php');
    ?>
<body>
    <?php
        include ('blocks/header.php');
    ?>
    <section class="stages-work">
        <div class="container">
            <div class="stages-work__wrapper">
                <div class="section-title__wrapper">
                    <h2 class="section-title">этапы строительства дома</h2>
                </div>
                <div class="stages-work__content">
                    <div class="stages-work__card-wrapper">
                        <div class="stages-work__card">
                            <h3 class="stages-work__card-title">1</h3>
                            <p class="stages-work__card-text">Заявка на проект Заполните любую форму на сайте, позвоните или напишите нам на почту.</p>
                        </div>
                        <div class="stages-work__card">
                            <h3 class="stages-work__card-title">2</h3>
                            <p class="stages-work__card-text">Встреча с заказчиком. Обсуждаем пожелания и деталии проекта.</p>
                        </div>
                        <div class="stages-work__card">
                            <h3 class="stages-work__card-title">3</h3>
                            <p class="stages-work__card-text">Подписание договора. Сообщаем вам сроки выполнения проекта.</p>
                        </div>
                        <div class="stages-work__card">
                            <h3 class="stages-work__card-title">4</h3>
                            <p class="stages-work__card-text">Земляные работы. Монтаж канализации и водоснабжения. Закладка фундамента, террасы, крыльца дома.</p>
                        </div>
                        <div class="stages-work__card">
                            <h3 class="stages-work__card-title">5</h3>
                            <p class="stages-work__card-text">Возведение и кладка стен, выполнение фасадных работ. Кровельные работы, установка крыши.</p>
                        </div>
                        <div class="stages-work__card">
                            <h3 class="stages-work__card-title">6</h3>
                            <p class="stages-work__card-text">Установка окон, дверей. Монтаж инженерных сетей. Внутренняя отделка помещений</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stages-work__content-img">
            <img src="/img/stages-works-bg.png" alt="этапы строительства дома" class="stages-work__img">
        </div>
    </section>
    <section class="benefits-product">
        <div class="container benefits-product-container">
            <div class="benefits-product__wrapper">
                <div class="benefits-product__desc">
                    <h2 class="section-title">Преимущества газобетона</h2>
                    <div class="benefits-product__list">
                        <p class="benefits-product__list-item">
                            <span class="modified-color-item">Теплоизоляция конструкции</span> – блоки имеют высокие показатели теплоизоляции, они долго удерживают тепло в помещении, что позволяет сэкономить на отоплении здания, подходят для дополнительного утепления строений.
                        </p>
                        <p class="benefits-product__list-item">
                            <span class="modified-color-item">Удобство в использовании</span> – газобетон легко поддается дополнительной обработке подручными материалами, его можно резать, пилить, сверлить. Из газоблоков можно сформировать арочные проемы и другие сложные конструкции.
                        </p>
                        <p class="benefits-product__list-item">
                            <span class="modified-color-item">Геометрия</span> – предлагается большое многообразие форм и размеров блоков, различной длины и толщины. Блоки имеют точную нарезку, поверхность ровная, максимальное отклонение, которое возможно – 1 мм.
                        </p>
                        <p class="benefits-product__list-item">
                            <span class="modified-color-item">Огнестойкость</span> – блоки совершенно безопасны, при нагревании не выделяются токсичные вещества, они не горят и не плавятся. Газобетон способен выдерживать до 3 часов воздействия огня без потери технических свойств.
                        </p>
                    </div>
                </div>
                <div class="benefits-product__img-box">
                    <img src="/img/benefits-gazobeton.png" alt="Преимущество газобетона" class="benefits-product__img">
                </div>
            </div>
        </div>
    </section>
    <?php
        include ('blocks/help-question.php');
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