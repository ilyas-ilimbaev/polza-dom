<!DOCTYPE html>
<html lang="ru">

    <?php
        $link = '<link rel="stylesheet" href="css/about.css">';
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
    <section class="about">
        <div class="container">
            <div class="about__wrapper">
                <div class="about-top__block-left">
                    <h2 class="section-title about-top__text-left">
                        Заказать строительство дома у нас - это
                    </h2>
                </div>
                <div class="about-top__block-right">
                    <span class="about-top__text-right">
                        70 проектов
                    </span>
                    <span class="about-top__text-right">
                        Более 10 лет на рынке
                    </span>
                </div>
                <div class="about-content">
                    <div class="about-content-desc">
                        <h3 class="about-content-title">качественно и выгодно</h3>
                        <p class="about-content-text">
                            Наша компания предоставляет широкий перечень услуг по проектированию и строительству респектабельных коттеджей и комфортных загородных домов. 
                            Мы располагаем широким арсеналом высокотехнологического оборудования и специализированной техники, что позволяет выполнять работу на высшем уровне.
                        </p>
                        <p class="about-content-text">
                            В нашем штате — лучшие специалисты с многолетним опытом, которым по силам коттеджи любой сложности.
                            Грамотные специалисты в срок выполнят ваши пожелания, мы заботимся о каждом клиенте и создаем для них место, где они будут ощущать себя счастливыми.
                        </p>
                    </div>
                    <div class="about-content-img">
                        <img src="/img/section-about-stroitel.png" alt="Строительство домов, компания Polza-Dom" class="about-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        include('blocks/reviews.php');
    ?>
    <?php
        include('blocks/newsletter.php');
    ?>
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