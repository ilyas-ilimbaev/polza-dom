<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строительство домов под ключ от строительной компании Польза-Дом</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include ('blocks/header.php');
    ?>
    <section class="ourworks">
        <div class="container">
            <div class="ourworks__wrapper">
                <h2 class="section-title ourworks-title">наши работы</h2>
                <div class="ourworks-content">
                    <div class="ourworks-card__wrapper">
                        <div class="ourworks-card">
                            <a href="" class="ourworks-card__img-link">
                                <img src="img/ourworks-card-1.png" alt="Первый проект" class="ourworks-card-img">
                            </a>
                        </div>                   
                        <div class="ourworks-card">
                            <a href="" class="ourworks-card__img-link">
                                <img src="img/ourworks-card-2.png" alt="Второй проект" class="ourworks-card-img">
                            </a>
                        </div>                    
                        <div class="ourworks-card">
                            <a href="" class="ourworks-card__img-link">
                                <img src="img/ourworks-card-3.png" alt="Третий проект" class="ourworks-card-img">
                            </a>
                        </div>                    
                        <div class="ourworks-card">
                            <a href="" class="ourworks-card__img-link">
                                <img src="img/ourworks-card-4.png" alt="Четвертый проект" class="ourworks-card-img">
                            </a>
                        </div>                    
                        <div class="ourworks-card">
                            <a href="" class="ourworks-card__img-link">
                                <img src="img/ourworks-card-5.png" alt="Пятый проект" class="ourworks-card-img">
                            </a>
                        </div>                   
                        <div class="ourworks-card">
                            <a href="" class="ourworks-card__img-link">
                                <img src="img/ourworks-card-6.png" alt="Шестой проект" class="ourworks-card-img">
                            </a>
                        </div>
                    </div>
                    <a href="#" class="ourworks-card__more-link">Смотреть больше</a>
                </div>
            </div>
        </div>
    </section>
    <section class="newsletter">
        <div class="container">
            <div class="newsletter__wrapper">
                <h3 class="newsletter-title">
                    Закажите полный
                    <span class="green-text">расчет своего дома!</span>
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
    </section>
    <?php
        include ('blocks/footer.php');
    ?>
    <?php
        include ('blocks/popups.php');
    ?> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="libs/swiper-bundle/swiper-bundle.min.js"></script>
    <script src="libs/jquery.validate/jquery.validate.js"></script>
    <script src="js/main.js"></script>
</body>
</html>