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
                <h2 class="section-title">этапы строительства дома</h2>
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
    <section class="section-benefits">
        <div class="container">
            
        </div>
    </section>
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