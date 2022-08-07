<!DOCTYPE html>
<html lang="ru">

    <?php
        $link = '<link rel="stylesheet" href="css/contacts.css">';
        include('blocks/head.php');
    ?>

<body>
    <?php
    include('blocks/header.php');    
    
    function create_url_img($url_img)
    {
        return "https://" . $_SERVER['HTTP_HOST'] . "/img/$url_img";
    }

    ?>
    <section class="contacts">
        <div class="container">
            <div class="contacts__wrapper">
                <h2 class="section-title contacts-title">контакты</h2>
                <div class="contacts-content">
                    <div class="contacts-content__left">
                        <div class="contacts-content__item">
                            <h3 class="item-title">Адрес офиса:</h3>
                            <div class="contacts-content__list">
                                <a href="#" class="contacts-content__list-link">Ул. Ленина, дом 92, офис 338, этаж 4</a>
                            </div>
                        </div>                    
                        <div class="contacts-content__item">
                            <h3 class="item-title">График работы:</h3>
                            <div class="contacts-content__list">
                                <ul>
                                    <li class="contacts-content__list-item"><a href="#" class="contacts-content__list-link">Пн – Пт 10:00-19:00</a></li>
                                    <li class="contacts-content__list-item"><a href="#" class="contacts-content__list-link">Сб 10:00-18:00</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="contacts-content__item">
                            <a href="tel:+7 (495) 818-23-15" class="contacts-content__list-link">+7 (495) 818-23-15</a>
                        </div>
                        <div class="contacts-content__item">
                            <a href="/" class="contacts-content__list-link contacts__color-font">PolsaDom.com</a>
                        </div>
                    </div>
                    <div class="contacts-content__right">
                        <img src="/img/contacts-map.png" alt="" class="contacts-map-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('blocks/footer.php');
    ?>
    <?php
        include('blocks/popups.php');
    ?>
    <script src="js/main.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/calculation.js"></script>
</body>
</html>